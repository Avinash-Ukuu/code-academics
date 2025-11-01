<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Play Quiz - Code Academics</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            font-family: Arial;
            background: #f6f7fb;
            padding: 30px
        }

        .card {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 22px;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, .06)
        }

        .hidden {
            display: none
        }

        .options li {
            margin: 10px 0
        }

        button {
            padding: 10px 14px;
            border-radius: 6px;
            border: 0;
            background: #2563eb;
            color: #fff;
            cursor: pointer
        }

        .correct {
            color: green;
            font-weight: bold
        }

        .wrong {
            color: red;
            font-weight: bold
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Code Academics — Quiz</h2>

        <div id="setup">
            <label>Category</label>
            <select id="category"></select>

            <label>Subcategory</label>
            <select id="subcategory"></select>

            <br><br>
            <button id="btnStart">Start Quiz</button>
        </div>

        <div id="quiz" class="hidden">
            <h3 id="qText"></h3>
            <ul id="options" class="options"></ul>
            <div id="feedback" style="margin-top:10px;"></div>
            <br>
            <button id="btnNext">Next</button>
        </div>

        <div id="result" class="hidden">
            <h3>Quiz Completed</h3>
            <p>Your score: <span id="score">0</span></p>
            <button id="btnRestart">Restart</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const csrf = $('meta[name="csrf-token"]').attr('content');

        let uniqueToken = localStorage.getItem('quiz_token') || null;
        if (!uniqueToken) {
            uniqueToken = 'quiz_' + Date.now() + '_' + Math.floor(Math.random() * 10000);
            localStorage.setItem('quiz_token', uniqueToken);
        }

        let quizUser = null;
        let attemptId = null;
        let questions = [];
        let idx = 0;
        let score = 0;

        // load categories
        $.get('/quiz/api/categories').done(function(data) {
            $('#category').append('<option value="">Select</option>');
            data.forEach(c => $('#category').append(`<option value="${c.id}">${c.name}</option>`));
        });

        // load subcategories
        $('#category').on('change', function() {
            const id = $(this).val();
            $('#subcategory').empty();
            if (!id) return;
            $.get(`/quiz/api/subcategories/${id}`).done(function(data) {
                $('#subcategory').append('<option value="">Select</option>');
                data.forEach(s => $('#subcategory').append(`<option value="${s.id}">${s.name}</option>`));
            });
        });

        // start or get guest user then start attempt
        $('#btnStart').on('click', function() {
            const page = 'quiz_play';
            $.post('/quiz/user/start-or-get', {
                    _token: csrf,
                    unique_token: uniqueToken,
                    page: page
                })
                .done(function(res) {
                    quizUser = res.quiz_user;
                    // start attempt
                    const quizCategoryId = $('#category').val();
                    if (!quizCategoryId) return alert('Select category');
                    $.post('/quiz/start', {
                            _token: csrf,
                            quiz_user_id: quizUser.id,
                            quiz_category_id: quizCategoryId
                        })
                        .done(function(resp) {
                            attemptId = resp.data.id;
                            // fetch questions for chosen subcategory
                            const subId = $('#subcategory').val();
                            if (!subId) return alert('Select subcategory');
                            $.get(`/quiz/api/questions/${subId}`).done(function(qs) {
                                if (!qs || qs.length === 0) return alert(
                                    'No questions in this subcategory');
                                questions = qs;
                                idx = 0;
                                score = 0;
                                $('#setup').hide();
                                $('#result').hide();
                                $('#quiz').show();
                                showQuestion();
                            });
                        })
                        .fail(function(xhr) {
                            alert('Could not start attempt: ' + xhr.responseText);
                        });
                })
                .fail(function(xhr) {
                    alert('Could not create guest: ' + xhr.responseText);
                });
        });

        function showQuestion() {
            $('#feedback').empty();
            const q = questions[idx];
            $('#qText').text((idx + 1) + '. ' + q.question);
            $('#options').empty();
            $('#options').append(`<li><label><input type="radio" name="opt" value="a"> ${q.option_a}</label></li>`);
            $('#options').append(`<li><label><input type="radio" name="opt" value="b"> ${q.option_b}</label></li>`);
            $('#options').append(`<li><label><input type="radio" name="opt" value="c"> ${q.option_c}</label></li>`);
            $('#options').append(`<li><label><input type="radio" name="opt" value="d"> ${q.option_d}</label></li>`);
            // remove any previous selection
            $('input[name="opt"]').prop('checked', false);
        }

        $('#btnNext').on('click', function() {
            const selected = $('input[name="opt"]:checked').val();
            if (!selected) return alert('Select an option');

            const q = questions[idx];
            const isCorrect = (selected === q.correct_option);
            if (isCorrect) {
                score += 10;
                $('#feedback').html('<div class="correct">Correct ✅</div>');
            } else {
                $('#feedback').html(
                    `<div class="wrong">Wrong ❌ — Correct: ${optionText(q, q.correct_option)}</div>`);
            }

            // save answer
            $.post('/quiz/answer', {
                _token: csrf,
                quiz_attempt_id: attemptId,
                quiz_question_id: q.id,
                selected_option: selected,
                is_correct: isCorrect ? 1 : 0
            }).fail(function(xhr) {
                console.error('Save answer failed', xhr.responseText);
            });

            // move next after a short delay so feedback shows
            setTimeout(function() {
                idx++;
                if (idx >= questions.length) {
                    endAttempt();
                } else {
                    showQuestion();
                }
            }, 900);
        });

        function optionText(q, opt) {
            if (opt === 'a') return q.option_a;
            if (opt === 'b') return q.option_b;
            if (opt === 'c') return q.option_c;
            return q.option_d;
        }

        function endAttempt() {
            $.post(`/quiz/end/${attemptId}`, {
                    _token: csrf,
                    total_score: score
                })
                .done(function() {
                    $('#quiz').hide();
                    $('#result').show();
                    $('#score').text(score);
                }).fail(function(xhr) {
                    alert('Could not finish attempt: ' + xhr.responseText);
                });
        }

        // restart
        $('#btnRestart').on('click', function() {
            $('#result').hide();
            $('#setup').show();
        });
    </script>
</body>

</html>
