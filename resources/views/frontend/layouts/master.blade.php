<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>@yield('meta_title', 'Code Academics')</title>
    <meta name="description" content="@yield('meta_description', 'Join Code Academics in Jalandhar City to master web development, programming, and software skills. Learn from expert instructors with hands-on training in Laravel, PHP, Python, React, and more. Start your coding journey today!')">
    <meta name="keywords" content="@yield('meta_keywords', 'Code Academics,Code Academics Jalandhar, coding institute Jalandhar, programming courses Jalandhar, web development training, Laravel course Jalandhar, PHP training, Python classes, React JS course, best IT institute in Jalandhar, software development training')">
    <meta name="author" content="code academics">
    <meta name="robots" content="noindex, nofollow">
    <meta name="google-site-verification" content="sJl9KNsLmOUjr8KhFBNifQSa6tXtJi30PUJOtv8e1vM" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/frontend/favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/frontend/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/frontend/favicon/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assets/frontend/favicon/android-chrome-512x512.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/frontend/favicon/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('assets/frontend/favicon/site.webmanifest') }}">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/themify-icons.css') }}">
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.css') }}">
    <!--slicknav Css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slicknav.css') }}">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <style>
        .modal-content {
            border-radius: 10px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            background-color: #0a68a6 !important;
            /* Dark Blue from your website */
        }

        .modal-header h5 {
            color: #ffffff;
        }

        .btn-primary {
            background-color: #162c50;
            border-color: #162c50;
        }

        .btn-primary:hover {
            background-color: #0d1c33;
            border-color: #0d1c33;
        }

        .form-control {
            border-radius: 5px;
        }

        .buttonclose {
            color: #ffffff;
            border: none;
            background: none;
            outline: none;
            font-size: 20px;
        }
    </style>
    @yield('headerLinks')
</head>

<body>

    <!-- START PRELOADER -->
    <div id="loader-wrapper">
        <img id="loader" src="{{ asset('assets/frontend/images/loaderlogo.png') }}" alt="loader">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- END PRELOADER -->

    <!-- START NAVBAR -->
    <div id="navigation" class="fixed-top navbar-light bg-faded site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="site-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/frontend/images/logo.png') }}"
                                alt=""></a>
                    </div>
                </div><!--- END Col -->

                <div class="col-lg-6 col-md-9 col-sm-8 ">
                    <div class="header_right ">
                        <nav id="main-menu" class="ms-auto">
                            <ul>
                                <li><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                                <li><a class="nav-link" href="{{ route('coursePage') }}">Courses</a></li>
                                <li><a class="nav-link" href="{{ route('blogPage') }}">Blog</a></li>
                                <li><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                                <li><a class="nav-link" href="{{ route('aboutUs') }}">About Us</a></li>
                            </ul>
                        </nav>
                        <div id="mobile_menu"></div>
                    </div>
                </div><!--- END Col -->
                <div class="col-lg-4 col-md-3 col-sm-8">
                    {{-- <div class="home_lc">
						<a href="#" class="hlc">
						  <i class="ti-heart"></i>
						  <span class="gactive">0</span>
					   </a>
						<a href="#" class="hlc">
						  <i class="ti-shopping-cart-full"></i>
						  <span class="gactive">2</span>
					   </a>
					</div> --}}
                    <div class="call_to_action">
                        <a class="btn_one open-enquiry-form" href="javascript:void(0)">Enquire Now</a>
                        <a class="btn_two" href="tel:+919592 258 369">+91 9592 258 369</a>
                    </div><!--- END SOCIAL PROFILE -->
                </div>
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </div>
    <!-- END NAVBAR -->
    @php
        $courses = new App\Models\Course();
        $courses = $courses->where('is_active', 1)->get();
    @endphp
    @yield('content')



    <!-- Enquiry Form Modal -->
    <div id="enquiryModal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title">Enquiry Form</h5>
                    <button type="button" data-bs-dismiss="modal" class="buttonclose">X</button>
                </div>
                <div class="modal-body">
                    <form id="enquiryForm">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="tel" name="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea name="message" class="form-control"></textarea>
                        </div>
                        <button type="submit" id="submitButton" class="btn btn-primary w-100"
                            style="background: #0a68a6!important">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/frontend/images/footerlogo.png') }}"
                                alt=""></a>
                        <p>📚 Unlocking Knowledge, Empowering. <br>
                            "Shaping the future of education through innovation and expertise."</p>
                    </div>
                    <div class="foot_social">
                        <ul>
                            <li><a target="_blank" style="text-decoration: none;" href="#"><span class="ti-twitter"></span></a></li>
                            <li><a target="_blank" style="text-decoration: none;" href="https://www.facebook.com/people/Code-Academics/61574966825969/"><span class="ti-facebook"></span></a></li>
                            <li><a target="_blank" style="text-decoration: none;" href="https://www.instagram.com/codeacademics/"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer">
                        <h4>Courses</h4>
                        <ul>
                            @foreach ($courses as $course)
                                <li><a class="open-enquiry-form"
                                        href="javascript:void(0)">{{ ucfirst($course->name) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="{{ route('aboutUs') }}">About us</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('sitemap') }}">Sitemap</a></li>
                        </ul>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer">
                        <h4>Contact Info</h4>
                        <div class="sf_contact">
                            <span class="ti-mobile"></span>
                            <h3>Phone number</h3>
                            <p>+91 9592 258 369</p>
                        </div>
                        <div class="sf_contact">
                            <span class="ti-email"></span>
                            <h3>Email Address</h3>
                            <p>codeacademicss@gmail.com</p>
                        </div>
                        <div class="sf_contact">
                            <span class="ti-map"></span>
                            <h3>Office Address</h3>
                            <p> SCO - 207, First Floor Badwal Complex, Near Narinder Cinema, Jalandhar City.</p>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
            <div class="row fc">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="footer_copyright">
                        <p>© 2025. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="footer_menu">
                        {{-- <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                        </ul> --}}
                    </div>
                </div><!-- END COL -->
            </div>
        </div><!--- END CONTAINER -->
    </div>
    <!-- END FOOTER -->

    <!-- Latest jQuery -->
    <script src="{{ asset('assets/frontend/js/jquery-1.12.4.min.js') }}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <!-- jquery.slicknav -->
    <script src="{{ asset('assets/frontend/js/jquery.slicknav.js') }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- jquery mixitup min js -->
    <script src="{{ asset('assets/frontend/js/jquery.mixitup.js') }}"></script>
    <!-- scrolltopcontrol js -->
    <script src="{{ asset('assets/frontend/js/scrolltopcontrol.js') }}"></script>
    <!-- jquery purecounter vanilla js -->
    <script src="{{ asset('assets/frontend/js/purecounter_vanilla.js') }}"></script>
    <!-- WOW - Reveal Animations When You Scroll -->
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>

    <script>
        $(document).ready(function() {

            // Open Enquiry Form
            $(".open-enquiry-form").click(function() {
                $("#enquiryModal").modal("show");
            });

            $("#enquiryForm input, #enquiryForm textarea").on("input", function() {
                $(this).next(".error").remove(); // Remove existing error messages
            });

            $("#enquiryForm").submit(function(event) {
                event.preventDefault();
                $('#submitButton').prop('disabled', true);
                let name = $("input[name='name']").val().trim();
                let email = $("input[name='email']").val().trim();
                let phone = $("input[name='phone']").val().trim();
                let message = $("textarea[name='message']").val().trim();

                let nameRegex = /^[A-Za-z\s]+$/;
                let phoneRegex = /^[0-9]{10}$/;
                let emailRegex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;

                $(".error").remove(); // Remove previous errors

                let isValid = true;

                // Validate Name
                if (!name.match(nameRegex)) {
                    $("input[name='name']").after(
                        "<span class='error text-danger'>Only letters allowed</span>");
                    isValid = false;
                }

                // Validate Email
                if (!email.match(emailRegex)) {
                    $("input[name='email']").after(
                        "<span class='error text-danger'>Must be a Gmail address</span>");
                    isValid = false;
                }

                // Validate Phone
                if (!phone.match(phoneRegex)) {
                    $("input[name='phone']").after(
                        "<span class='error text-danger'>Enter a valid 10-digit phone number</span>");
                    isValid = false;
                }

                // Validate Message
                if (message === "") {
                    $("textarea[name='message']").after(
                        "<span class='error text-danger'>This field is required</span>");
                    isValid = false;
                }
                // Submit if valid
                if (isValid) {
                    let formData = new FormData(this);

                    $.ajax({
                        url: "/store-enquiry",
                        type: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr("content")
                        },
                        success: function(response) {
                            window.location.href = "/thankyou";
                        },
                        error: function(xhr) {
                            console.error("Error:", xhr.responseText);
                        }
                    });
                } else {
                    $('#submitButton').prop('disabled', false); // Re-enable button if validation fails
                }
            });
        });
    </script>
    @yield('footerScript')

</body>

</html>
