<?php

namespace App\Http\Controllers;

use App\Models\QuizAnswer;
use Illuminate\Http\Request;

class QuizAnswerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'quiz_attempt_id' => 'required|exists:quiz_attempts,id',
            'quiz_question_id' => 'required|exists:quiz_questions,id',
            'selected_option' => 'required|string',
            'is_correct' => 'required|boolean',
        ]);

        $answer = QuizAnswer::create([
            'quiz_attempt_id' => $request->quiz_attempt_id,
            'quiz_question_id' => $request->quiz_question_id,
            'selected_option' => $request->selected_option,
            'is_correct' => (bool)$request->is_correct,
            'answered_at' => now(),
        ]);

        return response()->json(['message' => 'Answer saved', 'data' => $answer]);
    }

    public function showByAttempt($attemptId)
    {
        $answers = QuizAnswer::where('quiz_attempt_id', $attemptId)->get();
        return response()->json($answers);
    }
}
