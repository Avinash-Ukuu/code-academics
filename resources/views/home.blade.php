@extends('frontend.layouts.master')
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "EducationalOrganization",
            "name": "Code Academics",
            "url": "{{ route('home') }}",
            "logo": "{{ url(asset('assets/frontend/images/logo.png')) }}",
            "description": "Code Academics is a Jalandhar city institute that offers courses in MEAN / MERN, Web Development, Video Editing, Web Designing, UI & UX, Digital Marketing, Mobile Application, Basic Computer and 12th-grade coaching.",
            "foundingDate": "2025",
            "founder": [
                {
                    "@type": "Person",
                    "name": "SHOBIT THAKUR"
                },
                {
                    "@type": "Person",
                    "name": "AVINASH"
                }
            ],
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "SCO - 207, First Floor Badwal Complex, Near Narinder Cinema",
                "addressLocality": "Jalandhar",
                "addressRegion": "Punjab",
                "postalCode": "144001",
                "addressCountry": "IN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "31.313724",
                "longitude": "75.590905"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-9592258369",
                "contactType": "customer service",
                "areaServed": "IN",
                "availableLanguage": ["en", "hi"]
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "reviewCount": "17"
            },
            "sameAs": [
                "https://www.facebook.com/people/Code-Academics/61574966825969/",
                "https://www.instagram.com/codeacademics/",
                "https://in.linkedin.com/company/code-academics"
            ],
            "knowsAbout": [
                @foreach ($courses as $course)
                    {!! json_encode($course->name) !!}@if(!$loop->last),@endif
                @endforeach
            ],
            "hasCourse": [
                @foreach ($courses as $course)
                    {
                        "@type": "Course",
                        "name": {!! json_encode($course->name) !!},
                        "description": {!! json_encode($course->meta_description ?? $course->name) !!},
                        "provider": {
                            "@type": "EducationalOrganization",
                            "name": "Code Academics",
                            "sameAs": "{{ route('home') }}"
                        }
                    }@if(!$loop->last),@endif
                @endforeach
            ]
        }
    </script>
@endsection
@section('headerLinks')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style_1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/validnavs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/unit-test.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/traningsection.css') }}">
    <style>
        a {
            text-decoration: none
        }
    </style>
@endsection
@section('content')
    <!-- START HOME -->
    <section id="home" class="home_bg"
        style="background-image: url(assets/frontend/images/home.png);  background-size:cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="home_content">
                        {{-- <h1><span> Future</span> Starts With <span>CODE ACADEMICS</span></h1> --}}
                        <h1>Future Start with Us: <span> Best Coding Institute in Jalandhar</span></h1>
                        <p>Upgrade your career with the best programming courses in Jalandhar. Learn coding, design, and IT
                            skills from experts at Code Academics Jalandhar.</p>
                    </div>
                    <div class="home_btn">
                        <a href="{{ route('coursePage') }}" class="cta"><span>Explore Courses</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!-- END COL-->
                <div class="col-lg-6 col-sm-6 col-xs-12 bannerVideoParent">
                    <div class="home_me_img">
                        <div class="youtube img-fluid bannerVideo" data-embed="IaYpubnP9Ug">
                            <img src="{{ asset('assets/frontend/images/code-academics-banner.jpg') }}"
                                style="width:100%;height:100%;display:block;">
                            <div style="position:absolute;top:50%;left:60%;transform:translate(-50%,-50%);height: 40px;">
                                <span class="yt-icon-shape style-scope yt-icon ytSpecIconShapeHost">
                                    <div style="width: 100%;height: 100%;display: block;fill: #ff0033;">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="yt-ringo2-svg_yt10" width="93"
                                            height="20" viewBox="0 0 93 20" focusable="false" aria-hidden="true"
                                            style="pointer-events: none; display: inherit; width: 100%; height: 100%;">
                                            <g>
                                                <path
                                                    d="M14.4848 20C14.4848 20 23.5695 20 25.8229 19.4C27.0917 19.06 28.0459 18.08 28.3808 16.87C29 14.65 29 9.98 29 9.98C29 9.98 29 5.34 28.3808 3.14C28.0459 1.9 27.0917 0.94 25.8229 0.61C23.5695 0 14.4848 0 14.4848 0C14.4848 0 5.42037 0 3.17711 0.61C1.9286 0.94 0.954148 1.9 0.59888 3.14C0 5.34 0 9.98 0 9.98C0 9.98 0 14.65 0.59888 16.87C0.954148 18.08 1.9286 19.06 3.17711 19.4C5.42037 20 14.4848 20 14.4848 20Z"
                                                    fill="#FF0033"></path>
                                                <path d="M19 10L11.5 5.75V14.25L19 10Z" fill="white"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- END COL-->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END  HOME -->

    <!-- START TOP PROMO FEATURES -->
    <section class="tp_feature">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.2s" data-wow-offset="0">
                    <div class="single_tp">
                        <h3>Practical Learning</h3>
                        <p>Hands-on training with real-world projects at the leading IT training institute in Jalandhar.</p>
                        <a href="javascript:void(0)" class="cta open-enquiry-form"><span>Enquire Now</span>
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
                        <h3>Expert Mentors</h3>
                        <p>Learn from industry professionals at Punjab’s best IT coaching center.</p>
                        <a href="javascript:void(0)" class="cta open-enquiry-form"><span>Enquire Now</span>
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
                        <h3>Career Support</h3>
                        <p>Placement guidance & resume building from a trusted software training institute in Jalandhar.</p>
                        <a href="javascript:void(0)" class="cta open-enquiry-form"><span>Enquire Now</span>
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
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp customSticky" data-wow-duration="1s"
                    data-wow-delay="0.2s" data-wow-offset="0">
                    <div class="ab_img">
                        <img src="{{ asset('assets/frontend/images/about.jpg') }}" style="aspect-ratio: unset !important;"
                            class="img-fluid" alt="career guidance">
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="ab_content">
                        <h2>Why <span>Code Academics</span> is the <u><span>Best Coding Institute</span></u> in Jalandhar
                        </h2>
                        <p>At Code Academics Jalandhar, we prepare students with practical, career-oriented training in the
                            latest technologies. As the best coding institute in Jalandhar,
                            our focus is to make every learner job-ready with live projects, expert guidance, and globally
                            relevant skills.</p>
                        <p>From Python classes in Jalandhar to full stack development courses, digital marketing training,
                            and even video editing courses, we offer a wide range of programs that match today’s IT industry
                            requirements.</p>
                        <p>Our structured courses and supportive mentors ensure that every student gains confidence in
                            coding, problem-solving, and professional IT skills.
                        </p>
                    </div>
                    <div class="abmv">
                        <span class="ti-medall"></span>
                        <h4>Our Mission</h4>
                        <p>To empower students with industry-relevant knowledge through hands-on learning at the best IT
                            coaching center in Jalandhar.
                            Our mission is to build confident professionals who can excel in the global IT market.</p>
                    </div>
                    <div class="abmv">
                        <span class="ti-wand"></span>
                        <h4>Our Vision</h4>
                        <p>To become the most trusted professional coding academy in Jalandhar, bridging the gap between
                            education and industry by offering advanced programming courses in Jalandhar that prepare
                            students for future technologies.</p>
                    </div>
                    <a class="btn_one open-enquiry-form" href="javascript:void(0)">Start Learning Today</a>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END ABOUT US HOME ONE -->

    <!-- START COUNTER -->
    <section id="counts" class="counts section-padding">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Some Fun Fact</h2>
                <p>Our Great <span><u>Achievement</u></span></p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-face-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Enrolled Students</p>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-files" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Academic Programs</p>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-headphone-alt" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Students Placement</p>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-user" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Certified Students</p>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END COUNTER -->

    <!-- START COMPANY PARTNER LOGO  -->
    {{-- <div class="partner-logo section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner_title">
                        <h3>Trusted Company Arround The World! </h3>
                    </div>
                    <div class="partner">
                        <a href="#"><img src="{{ asset('assets/frontend/images/1.png') }}" alt="image"></a>
                        <a href="#"><img src="{{ asset('assets/frontend/images/2.png') }}" alt="image"></a>
                        <a href="#"><img src="{{ asset('assets/frontend/images/3.png') }}" alt="image"></a>
                        <a href="#"><img src="{{ asset('assets/frontend/images/4.png') }}" alt="image"></a>
                        <a href="#"><img src="{{ asset('assets/frontend/images/5.png') }}" alt="image"></a>
                        <a href="#"><img src="{{ asset('assets/frontend/images/2.png') }}" alt="image"></a>
                        <a href="#"><img src="{{ asset('assets/frontend/images/1.png') }}" alt="image"></a>
                        <a href="#"><img src="{{ asset('assets/frontend/images/3.png') }}" alt="image"></a>
                        <a href="#"><img src="{{ asset('assets/frontend/images/4.png') }}" alt="image"></a>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->
    </div> --}}
    <!-- END COMPANY PARTNER LOGO -->

    <!-- START WHY CHOOSE US-->
    <section class="marketing_content_area section-padding">
        <div class="container">
            <div class="ab_content">
                <h2>What Makes <span>Code Academics</span> the Best Coding Institute in Jalandhar</h2>
                <p>As the leading IT training institute in Jalandhar, we offer practical learning, expert mentors, and
                    complete career support for students who want to excel in programming and IT skills.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-book ss_one"></span>
                            <h2><a href="javascript:void(0)">Structured Offline Learning</a></h2>
                        </div>
                        <p>Experience interactive, in-person classes at the best coding institute in Jalandhar. With classes
                            from 9 AM to 6 PM, you’ll enjoy focused sessions and real-world coding practice.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-heart ss_two"></span>
                            <h2><a href="javascript:void(0)">Expert <br>Instructor</a></h2>
                        </div>
                        <p>Learn from industry professionals at the top software training institute in Jalandhar, bringing
                            years of real-world expertise and in-demand IT skills.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-user ss_three"></span>
                            <h2><a href="javascript:void(0)">Efficient Team<br> Management</a></h2>
                        </div>
                        <p>Our dedicated team ensures smooth learning at Code Academics Jalandhar, making us a trusted
                            computer classes institute in Jalandhar with top-notch support.
                        </p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-eye ss_four"></span>
                            <h2><a href="javascript:void(0)">Strategic Course <br> Planning</a></h2>
                        </div>
                        <p>Follow structured learning paths that cover everything from basics to advanced programming. Ideal
                            for students seeking the best programming courses in Jalandhar.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-light-bulb ss_five"></span>
                            <h2><a href="javascript:void(0)">Teacher Guidance & Support</a></h2>
                        </div>
                        <p>Personalized mentorship from experts at our professional coding academy in Jalandhar, helping you
                            track progress and achieve your career goals.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-email ss_six"></span>
                            <h2><a href="javascript:void(0)">Dedicated Support During Class Hours</a></h2>
                        </div>
                        <p>Get continuous assistance during your sessions at Code Academics, the most reliable IT coaching
                            center in Jalandhar. Our mentors are available full-time to answer your queries.</p>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END WHY CHOOSE US -->

    <!-- Swiper -->
    {{-- <section class="marketing_content_area section-padding custombackground">
        <div class="container">
            <div class="section-title">
                <h2>Gallery</h2>
                <p>Life At <span><u>Code Academics.</u></span> </p>
            </div>
            <div class="swiper-container two">
                <div class="swiper-wrapper">
                    @foreach ($galleries as $gallery)
                        <div class="swiper-slide">
                            <div class="slider-image">
                                <img src="{{ asset('uploads/gallery/' . $gallery->url) }}" alt="{{ $gallery->title }}">
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section> --}}

    <div class="testimonial-style-two-area default-padding">
        {{-- <div class="container">
            <div class="row">
                    <div class="site-heading text-left ab_content">
                        <h2>Gallery</h2>
                        <h2 class="title split-text">Life At <span><u>Code Academics.</u></span> </h2>
                    </div>
            </div>
        </div> --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-style-two-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single Item -->
                            @foreach ($galleries as $gallery)
                                <div class="swiper-slide">
                                    <div class="testimonial-style-two">
                                        <img style="width: 100%" src="{{ asset('uploads/gallery/' . $gallery->url) }}"
                                            alt="{{ $gallery->title }}">
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--START COURSE -->
    {{-- <div class="best-cpurse section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Popular Courses</h2>
                <p>Choose Our <span><u>Top Courses</u></span></p>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                    @if ($loop->iteration == 7)
                        @break
                    @endif
                    <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                        data-wow-offset="0">
                        <div class="course-slide">
                            <div class="course-img">
                                @if ($course->image && file_exists('uploads/courses/' . $course->image))
                                    <img src="{{ asset('uploads/courses/' . $course->image) }}" loading="lazy"
                                        alt="{{ $course->name }} course in Jalandhar">
                                @else
                                    <img src="{{ asset('assets/frontend/images/c1.png') }}" loading="lazy"
                                        alt="{{ $course->name }} course in Jalandhar">
                                @endif

                            </div>
                            <div class="course-content">
                                <h3><a
                                        href="{{ route('courseDetail', ['slug' => $course->slug]) }}">{{ $course->name }}</a>
                                </h3>
                            </div>
                        </div><!--END COURSE SLIDE -->
                    </div><!--END COL -->
                @endforeach
                <div class="col-lg-12 text-center">
                    <div class="cc_btn">
                        <a class="btn_one" href="{{ route('coursePage') }}">View All Course</a>
                    </div>
                </div><!--END COL -->
            </div><!--END ROW -->
        </div><!--END CONTAINER -->
    </div> --}}


    <!-- Start Course
                        ============================================= -->
    <div class="course-style-two-area default-padding bottom-less bg-gray-gradient-secondary overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Latest Courses</h4>
                        <h2 class="title">Most Popular Courses</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="course-style-one-bullet swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="course-bullet-item">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend/images/26.png') }}" alt="Image Not Found">
                                    </div>
                                    <div class="info">
                                        <h4>Design</h4>
                                        <span>14 Courses</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="course-bullet-item">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend/images/27.png') }}" alt="Image Not Found">
                                    </div>
                                    <div class="info">
                                        <h4>App Development</h4>
                                        <span>26 Courses</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="course-bullet-item">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend/images/28.png') }}" alt="Image Not Found">
                                    </div>
                                    <div class="info">
                                        <h4>Spoken English</h4>
                                        <span>15 Courses</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="course-bullet-item">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend/images/29.png') }}" alt="Image Not Found">
                                    </div>
                                    <div class="info">
                                        <h4>Development</h4>
                                        <span>12 Courses</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="course-bullet-item">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend/images/30.png') }}" alt="Image Not Found">
                                    </div>
                                    <div class="info">
                                        <h4>Security</h4>
                                        <span>23 Courses</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="course-style-one-carousel swiper">
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="course-inner-carousel swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($courses as $course)
                                        <!-- Single Item -->
                                        <div class="swiper-slide">
                                            <div class="course-style-one-item hover-less style-two">
                                                <div class="thumb">
                                                    @if ($course->image && file_exists('uploads/courses/' . $course->image))
                                                        <img src="{{ asset('uploads/courses/' . $course->image) }}"
                                                            loading="lazy" alt="{{ $course->name }} course in Jalandhar">
                                                    @else
                                                        <img src="{{ asset('assets/frontend/images/c1.png') }}"
                                                            loading="lazy" alt="{{ $course->name }} course in Jalandhar">
                                                    @endif
                                                </div>
                                                {{-- <div class="top-meta">
                                                    <ul>
                                                        <li>
                                                            <div class="course-rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star-half-alt"></i>
                                                                <span>(4.8)</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="bookmark">
                                                        <a href="#"><i class="fas fa-bookmark"></i></a>
                                                    </div>
                                                </div> --}}
                                                <div class="info">
                                                    <h4><a
                                                            href="{{ route('courseDetail', ['slug' => $course->slug]) }}">{{ $course->name }}</a>
                                                    </h4>
                                                    <div class="course-meta">
                                                        <ul style="margin-top: 10px">
                                                            @foreach ($course->durations as $data)
                                                                <li>
                                                                    {{ $data->duration }} Months
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="course-bottom-meta">
                                                    <a href="{{ route('courseDetail', ['slug' => $course->slug]) }}">
                                                        Enroll Now To Course</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Item -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <a class="btn_one" href="{{ route('coursePage') }}">View All Courses</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Course -->




    <!--END COURSE -->

    <!-- START COURSE PROMOTION -->
    <section class="course_promo section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="cp_content">
                        <h4>One Platform & Many Courses For You</h4>
                        <h2>Best <span><u>Offline Learning Platform</u></span> in Jalandhar</h2>
                        <p>At Code Academics, we believe learning is most effective when it’s offline, practical, and
                            mentor-guided.
                            That’s why we provide a structured environment where students can focus fully on coding,
                            designing, and IT skills without distractions.</p>
                        <p>As the best coding institute in Jalandhar, we offer multiple in-demand courses under one roof —
                            from web development and Python classes in Jalandhar to digital marketing, video editing, and
                            full stack development courses.</p>
                        <p>Every program is designed to give you real-world project experience, so you don’t just learn
                            theory — you build actual skills that companies want.</p>
                        <ul>
                            <li><span class="ti-check"></span>9/10 Average Satisfaction Rate
                                <ul>
                                    <li>
                                        <p>Students rate Code Academics as the top IT training institute in Jalandhar,
                                            thanks to practical learning and dedicated guidance.</p>
                                    </li>
                                </ul>
                            </li>
                            <li><span class="ti-check"></span>96% Completitation Rate
                                <ul>
                                    <li>
                                        <p>With structured offline classes and step-by-step mentoring, our students
                                            successfully complete even advanced programming courses in Jalandhar.</p>
                                    </li>
                                </ul>
                            </li>
                            <li><span class="ti-check"></span>Supportive Learning Environment & Expert Instructors
                                <ul>
                                    <li>
                                        <p>We combine a friendly classroom setup with experienced mentors, making us the
                                            most reliable professional coding academy in Jalandhar.</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="cp_btn">
                        <a href="{{ route('coursePage') }}" class="cta"><span>Explore Our Courses</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp customSticky" data-wow-duration="1s"
                    data-wow-delay="0.2s" data-wow-offset="0">
                    <div class="cp_img">
                        <img src="{{ asset('assets/frontend/images/avinew.webp') }}"
                            style="aspect-ratio: unset !important;" class="img-fluid" alt="image">
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END COURSE PROMOTION -->

    <!-- 45 Days Training section -->
    <section class="industrial-training-section">
        <div class="section-custom-container">

            <!-- Left Image -->
            <div class="training-image">
                <img src="{{ asset('assets/frontend/images/industrial-training.png') }}"
                    alt="45 Days and 6 Weeks Industrial Training in Jalandhar at Code Academics" loading="lazy">
            </div>

            <!-- Right Content -->
            <div class="training-content">

                <h2>
                    45 Days & 6 Weeks Industrial Training in Jalandhar
                </h2>

                <p>
                    Upgrade your technical skills with our industry-focused 45 days industrial training in Jalandhar
                    and 6 weeks industrial training in Jalandhar, specially designed for B.Tech, BCA, MCA, and Diploma
                    students.
                </p>

                <p>
                    At Code Academics, we provide hands-on practical training with live projects to
                    help students gain
                    real industry exposure. Our training programs are structured to bridge the gap between academic
                    knowledge and
                    real-world application.
                </p>

                <h3 class="benefits-heading">What You’ll Get:</h3>

                <ul class="training-benefits">
                    <li>Live Project Experience</li>
                    <li>Industry-Expert Trainers</li>
                    <li>Internship Certificate</li>
                    <li>Practical Learning Environment</li>
                    <li>Career & Interview Guidance</li>
                </ul>

                <p>
                    Whether you choose our 45 days industrial training in Jalandhar for intensive
                    short-term learning
                    or our 6 weeks industrial training in Jalandhar for deeper technical exposure,
                    you’ll gain the
                    confidence and skills required to excel in today’s competitive job market.
                </p>

                <div class="cta-box">
                    <p>
                        {{-- <p class="limited"> --}}
                        Limited seats available – Enroll now and start your professional journey today!
                    </p>
                    <a href="javascript:void(0)" class="cta open-enquiry-form"><span>Enquire Now</span>
                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                </div>

            </div>

        </div>
    </section>


    <!-- 45 Days Training End section -->


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
                                    Which is the best coding institute in Jalandhar?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Code Academics is recognized as the best coding institute in Jalandhar, offering
                                    practical training in web development, Python, digital marketing, video editing, and
                                    more. Our offline classes, expert instructors, and placement guidance make us the top
                                    choice for students and professionals.
                                </div>
                            </div>
                        </div><!-- END ACCORDION ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you provide Python classes in Jalandhar?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, Code Academics offers beginner to advanced python classes in Jalandhar. Students
                                    learn coding fundamentals, data structures, and real-world applications to prepare for
                                    careers in software development and data science
                                </div>
                            </div>
                        </div><!-- END ACCORDION ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What are the best programming courses in Jalandhar for beginners?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Beginners can start with our web development institute in Jalandhar, Python programming,
                                    or digital marketing courses. These courses are designed step-by-step, making them easy
                                    to follow while building strong career skills.
                                </div>
                            </div>
                        </div><!-- END ACCORDION ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do you offer a full stack development course in Jalandhar?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we provide a comprehensive full stack development course in Jalandhar, covering
                                    frontend (HTML, CSS, JavaScript, React) and backend (Node.js, MongoDB) with live project
                                    experience.
                                </div>
                            </div>
                        </div><!-- END ACCORDION ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Why should I choose Code Academics Jalandhar for IT training?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Code Academics is more than just a computer classes institute in Punjab — it’s a
                                    professional coding academy in Jalandhar. We offer 100% practical training, supportive
                                    mentorship, a 96% completion rate, and certificates that add value to your career
                                    profile.
                                </div>
                            </div>
                        </div><!-- END ACCORDION ITEM  -->
                    </div>
                </div><!-- END COL  -->
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="pt_faq">
                        <img src="{{ asset('assets/frontend/images/faq.png') }}" style="aspect-ratio: unset !important;"
                            class="img-fluid" alt="image">
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END FAQ -->

    <!-- START TESTIMONIALS-->
    <section class="testi_home_area section-padding">
        <div class="container">
            <div class="section-title customSection">
                <h2>Testimonial</h2>
                <p class="customSpace">What Says <span><u>Our Students</u></span></p>
                <a class="reviewButton"
                    href="https://search.google.com/local/writereview?placeid=ChIJ30P_95VbGjkRWJ_QD2CQkRg" target="_blank"
                    style="background:#1a73e8;color:#fff;padding:10px 20px;border-radius:6px;text-decoration:none;">
                    Review us on Google
                </a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <p>I started with zero knowledge of design, but now I can create wireframes, prototypes, and
                                    full UI systems — all thanks to Code Academics. Loved the mentorship and community here.
                                    You don’t just learn design, you think like a designer</p>
                            </div>
                            <div class="testi_pic_title tpt_one">
                                <div class="pic">
                                    <img src="{{ asset('assets/frontend/images/swati.jpeg') }}" alt="image">
                                </div>
                                <h4>Swati Singh</h4>
                                <small class="post">- Student</small>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <p>All Instructors are industry experienced , really the top top top and the best one I
                                    would say in our city jalandhar.I learned front end development and ui/ux design and
                                    recently I am placed in gurgaon and working there. Thank you to both Avinash sir and
                                    Shobit sir for making me capable to earn the good amount</p>
                            </div>
                            <div class="testi_pic_title tpt_two">
                                <div class="pic">
                                    <img src="{{ asset('assets/frontend/images/default.jpg') }}" alt="image">
                                </div>
                                <h4>Sunil Aggarwal</h4>
                                <small class="post">- Student</small>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <p>I give 10/10 rating to this company because its work excellent. My experience with this
                                    company is great , the work environment, infrastructure and staff members are very
                                    cooperative . The program they teach in very manner way or skilled way even normal
                                    person can easily understood. So please i personally recommend to join this company and
                                    take admission and be a part of this company.</p>
                            </div>
                            <div class="testi_pic_title tpt_one">
                                <div class="pic">
                                    <img src="{{ asset('assets/frontend/images/default.jpg') }}" alt="image">
                                </div>
                                <h4>Ujjwal Jha</h4>
                                <small class="post">- Student</small>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <p>This is the best platform for learning all about coding for beginners and advanced
                                    programmers. I found an interactive and user friendly environment.
                                    On top of that you can find anything you want, from basic to advance. Also this the
                                    recommended coding academy in Jalandar and experinced programmers are out there.</p>
                            </div>
                            <div class="testi_pic_title tpt_two">
                                <div class="pic">
                                    <img src="{{ asset('assets/frontend/images/default.jpg') }}" alt="image">
                                </div>
                                <h4>Srishti</h4>
                                <small class="post">- Student</small>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <p>If you want to learn laravel. Then code academics is the best place for you. Where you
                                    can get the 100% placement after the completion of your course</p>
                            </div>
                            <div class="testi_pic_title tpt_three">
                                <div class="pic">
                                    <img src="{{ asset('assets/frontend/images/default.jpg') }}" alt="image">
                                </div>
                                <h4>Suman Sharma</h4>
                                <small class="post">- Student</small>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                    </div><!-- END TESTIMONIAL SLIDER -->
                </div><!-- END COL  -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END TESTIMONIALS -->

    <!-- START BLOG -->
    <section id="blog" class="blog_area section-padding">
        <div class="container">
            <div class="section-title">
                <h2>News</h2>
                <p>Our Latest <span><u>Blogs</u></span></p>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    @if ($loop->iteration == 3)
                        @break
                    @endif
                    <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                        data-wow-offset="0">
                        <div class="single_blog">
                            <img src="{{ asset('uploads/blogs/' . $blog->image) }}" class="img-fluid"
                                alt="{{ Str::limit($blog->title, 60) }}">
                            <div class="content_box">
                                <span>{{ $blog->blog_created_at }}</span>
                                <h2><a
                                        href="{{ route('blogDetail', ['slug' => $blog->slug]) }}">{{ \Illuminate\Support\Str::words($blog->title, 10, '...') }}</a>
                                </h2>
                                <a href="{{ route('blogDetail', ['slug' => $blog->slug]) }}" class="cta"><span>READ
                                        MORE</span>
                                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                                        <path d="M1,5 L11,5"></path>
                                        <polyline points="8 1 12 5 8 9"></polyline>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div><!-- END COL-->
                @endforeach
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    @foreach ($blogs as $blog)
                        @if ($loop->iteration <= 2)
                            @continue
                        @endif
                        @if ($loop->iteration == 5)
                            @break
                        @endif
                        <div class="single_blog">
                            <div class="content_box">
                                <span>{{ $blog->blog_created_at }}</span>
                                <h2><a
                                        href="{{ route('blogDetail', ['slug' => $blog->slug]) }}">{{ \Illuminate\Support\Str::words($blog->title, 10, '...') }}</a>
                                </h2>
                                <a href="{{ route('blogDetail', ['slug' => $blog->slug]) }}" class="cta"><span>READ
                                        MORE</span>
                                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                                        <path d="M1,5 L11,5"></path>
                                        <polyline points="8 1 12 5 8 9"></polyline>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div><!-- END COL-->
            </div><!-- / END ROW -->
        </div><!-- END CONTAINER  -->
    </section>
    <!-- END BLOG -->
    <!-- Start Map -->
    <div style="width: 100%; max-width: 100%; overflow: hidden; position: relative; padding-top: 43.25%;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3408.637599152545!2d75.58841117623629!3d31.313760057319723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5b95f7ff43df%3A0x189190600fd09f58!2sCode%20Academics%20-%20Best%20Coding%20Institute%20in%20Jalandhar!5e0!3m2!1sen!2sin!4v1772339721920!5m2!1sen!2sin"
            width="600" height="450" style="border:0; position: absolute; top:0; left:0; width:100%; height:100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- End map -->

    <!-- START FOOTER -->
@endsection

@section('footerScript')
    <script src="{{ asset('assets/frontend/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js ') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.appear.js ') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/loopcounter.js ') }}"></script>
    <script src="{{ asset('assets/frontend/js/validnavs.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/gsap.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js ') }}"></script>
    <script>
        document.querySelectorAll(".youtube").forEach(el => {
            el.addEventListener("click", function() {
                let iframe = document.createElement("iframe");
                iframe.setAttribute("frameborder", "0");
                iframe.setAttribute("allowfullscreen", "");
                iframe.setAttribute("allow",
                    "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                );
                iframe.style.width = "100%";
                iframe.style.height = "100%";
                iframe.style.marginTop = "10px";
                iframe.src = "https://www.youtube.com/embed/" + this.dataset.embed + "?autoplay=1";
                iframe.classList.add("youtube-iframe");
                this.innerHTML = "";
                this.appendChild(iframe);
            });
        });

        var swiper = new Swiper('.swiper-container.two', {
            effect: 'coverflow',
            loop: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflow: {
                rotate: 0,
                stretch: 100,
                depth: 150,
                modifier: 1.5,
                slideShadows: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    coverflow: {
                        stretch: 50,
                        depth: 80,
                    }
                }
            }
        });
    </script>
@endsection
