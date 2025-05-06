@extends('frontend.layouts.master')
@section('meta_title', 'About Us - Code Academics')
@section('meta_description', 'Learn more about Code Academics and our mission dedicated to knowledge sharing.')
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>About Us</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li> / About</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!-- START TOP PROMO FEATURES -->
    <section class="tp_feature">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.2s" data-wow-offset="0">
                    <div class="single_tp">
                        <h3>Cutting-Edge Curriculum</h3>
                        <p>Stay ahead with industry-relevant courses designed to equip you with in-demand tech skills.</p>
                        <p>🔹 Frontend Development | 🔹 Backend Development | 🔹 UI & UX
                        </p>
                        <a href="javascript:void(0)" class="open-enquiry-form cta"><span>Enquire Now</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.3s" data-wow-offset="0">
                    <div class="single_tp">
                        <h3>Expert Instructors</h3>
                        <p>Learn from IT professionals and experienced mentors who guide you through hands-on projects.</p>
                        <p> 💡 Practical Learning | 📚 Live Sessions | 🎓 Career Mentorship</p>
                        <a href="javascript:void(0)" class="open-enquiry-form cta"><span>Enquire Now</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.4s" data-wow-offset="0">
                    <div class="single_tp">
                        <h3>Advanced Learning Environment</h3>
                        <p>Experience cutting-edge technology with world-class facilities designed for IT excellence.</p>
                        <p>💻 High-Tech Labs | 🖥 Practical | 📜 Certification of Completion</p>
                        <a href="javascript:void(0)" class="open-enquiry-form cta"><span>Enquire Now</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END TOP PROMO FEATURES -->

    <!-- START ABOUT US HOME ONE -->
    <section class="ab_one section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="ab_img">
                        <img src="{{ asset('assets/frontend/images/about2.png') }}" style="aspect-ratio: unset !important;" class="img-fluid" alt="image">
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="ab_content">
                        <h2>Learn new skills to <u><span>Advance Your Career</span></u> </h2>
                        <p>Stay ahead in the tech industry with our expert-led training programs. At Code Academics Jalandhar, we offer hands-on courses in web development, software programming, and digital technologies to help you grow your skills and career.
                            Whether you're a beginner or an experienced developer, our structured learning approach ensures you gain the latest industry knowledge through real-world projects and mentorship from professionals.</p>
                        <p><strong> At Code Academics Jalandhar, we offer comprehensive training in Web Development, Software and App Development, Video Editing, and digital marketing. Our courses cover technologies like Laravel, PHP, React, and SEO, equipping you with the skills needed to excel in the tech industry. Whether you want to build websites, develop software, our expert-led training will guide you every step of the way. Join us today and take the first step toward a successful future in technology.</strong></p>
                        <a class="btn_one open-enquiry-form" href="javascript:void(0)">Enquire Now</a>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END ABOUT US HOME ONE -->

    <!-- START WHY CHOOSE US-->
    <section class="marketing_content_area section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Code Academics</h2>
                <p>Find the <span><u>best features</u></span> of Code Academics.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-book ss_one"></span>
                            <h2><a href="javascript:void(0)">Structured Offline Learning</a></h2>
                        </div>
                        <p>Join our high-quality, in-person classes from 9 AM to 6 PM and experience focused, interactive learning in an offline environment.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-heart ss_two"></span>
                            <h2><a href="javascript:void(0)">Expert <br>Instructor</a></h2>
                        </div>
                        <p>Learn from industry professionals with real-world experience and deep subject knowledge.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-user ss_three"></span>
                            <h2><a href="javascript:void(0)">Efficient Team<br> Management</a></h2>
                        </div>
                        <p>Our dedicated team ensures a smooth learning experience with top-notch organization and support.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-eye ss_four"></span>
                            <h2><a href="javascript:void(0)">Strategic Course <br> Planning</a></h2>
                        </div>
                        <p>Structured learning paths designed to help you master skills step by step.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-light-bulb ss_five"></span>
                            <h2><a href="javascript:void(0)">Teacher Guidance & Support</a></h2>
                        </div>
                        <p>Get personalized mentorship and performance monitoring to maximize your learning potential.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-email ss_six"></span>
                            <h2><a href="javascript:void(0)">Dedicated Support During Class Hours</a></h2>
                        </div>
                        <p>Get assistance and guidance from our instructors during 9 AM to 6 PM to ensure a smooth learning experience.</p>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END WHY CHOOSE US -->


    <!-- START TEAM-->
    {{-- <section class="team_member section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Team Member</h2>
                <p>Our Expert <span><u>Instructors</u></span></p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{{ asset('assets/frontend/images/team5.png')}}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Stephen Cronin</h3>
                            <span class="post">Designer</span>
                            <div class="sth_det2">
                                <span class="ti-file"> <u>5 Course</u></span>
                                <span class="ti-user"> <u>12 Student</u></span>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{{ asset('assets/frontend/images/team6.png')}}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Rachel Park</h3>
                            <span class="post">Developer</span>
                            <div class="sth_det2">
                                <span class="ti-file"> <u>5 Course</u></span>
                                <span class="ti-user"> <u>12 Student</u></span>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{{ asset('assets/frontend/images/team7.png')}}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Dan Billson</h3>
                            <span class="post">Marketer</span>
                            <div class="sth_det2">
                                <span class="ti-file"> <u>5 Course</u></span>
                                <span class="ti-user"> <u>12 Student</u></span>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{{ asset('assets/frontend/images/team8.png')}}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Gina Mellow</h3>
                            <span class="post">Co-founder</span>
                            <div class="sth_det2">
                                <span class="ti-file"> <u>5 Course</u></span>
                                <span class="ti-user"> <u>12 Student</u></span>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                </div><!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{{ asset('assets/frontend/images/team9.png')}}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">John Stuart</h3>
                            <span class="post">Graphics Expert</span>
                            <div class="sth_det2">
                                <span class="ti-file"> <u>5 Course</u></span>
                                <span class="ti-user"> <u>12 Student</u></span>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{{ asset('assets/frontend/images/team10.png')}}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Maikel Clark</h3>
                            <span class="post">Animator</span>
                            <div class="sth_det2">
                                <span class="ti-file"> <u>5 Course</u></span>
                                <span class="ti-user"> <u>12 Student</u></span>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section> --}}
    <!-- END TEAM -->

    <!-- START FAQ -->
    <section class="faq_area section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Question</h2>
                <p>General <span><u>Questions</u></span></p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is the best IT institute for web development and SEO training?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our IT institute offers top-notch web development courses in Laravel, PHP, and React, along with expert SEO training to help you rank higher on search engines.
                                </div>
                            </div>
                        </div><!-- END ACCORDION ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Where can I learn SEO and digital marketing with practical training?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    At our institute, we provide hands-on SEO and digital marketing training, covering keyword research, technical SEO, and link-building strategies.
                                </div>
                            </div>
                        </div><!-- END ACCORDION ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Which is the best place to learn full-stack development and SEO together?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our institute offers full-stack development courses in Laravel, PHP, and React, along with in-depth SEO training to help you build and optimize websites effectively.
                                </div>
                            </div>
                        </div><!-- END ACCORDION ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How can I improve my website ranking with SEO training?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our SEO course teaches you how to optimize your website using on-page and off-page SEO techniques, helping you improve search rankings and drive organic traffic.
                                </div>
                            </div>
                        </div><!-- END ACCORDION ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    What is the best IT training institute for AI, software development, and SEO?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We provide expert-led courses in AI, machine learning, software development, and SEO, equipping you with skills to grow in the tech industry.
                                </div>
                            </div>
                        </div><!-- END ACCORDION ITEM  -->
                    </div>
                </div><!-- END COL  -->
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="pt_faq">
                        <img src="{{ asset('assets/frontend/images/faq.png')}}" style="aspect-ratio: unset !important;" class="img-fluid" alt="image">
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END FAQ -->

@endsection
