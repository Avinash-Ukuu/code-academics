@extends('frontend.layouts.master')
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "EducationalOrganization",
            "name": "Code Academics",
            "url": "{{route('home')}}",
            "logo": "{{ url(asset('assets/frontend/images/logo.png')) }}",
            "description": "Code Academics is a Jalandhar city institute that offers courses in MEAN / MERN, Web Development, Video Editing, Web Designing, UI & UX, Digital Marketing, Mobile Application, Basic Computer and 12th-grade coaching.",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-9592258369",
                "contactType": "customer service",
                "areaServed": "IN",
                "availableLanguage": ["en", "hi"]
            },
            "sameAs": [
                "https://www.facebook.com/people/Code-Academics/61574966825969/",
                "https://www.instagram.com/codeacademics/",
                "https://in.linkedin.com/company/code-academics"
            ],
            "knowsAbout": [
                @foreach ($courses as $course)
                    "{{$course->name}}"@if(!$loop->last),@endif
                @endforeach
            ]
        }
    </script>
@endsection
@section('content')
    <!-- START HOME -->
    <section id="home" class="home_bg"
        style="background-image: url(assets/frontend/images/home.png);  background-size:cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="home_content">
                        <h1><span> Future</span> Starts With <span>CODE ACADEMICS</span></h1>
                        <p>Unlock your potential with expert-led courses designed to boost your skills.
                        </p>
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
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="home_me_img">
                        <img src="{{ asset('assets/frontend/images/home-image.png') }}"
                            style="aspect-ratio: unset !important;" class="img-fluid" alt="image">
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
                        <h3>Cutting-Edge Curriculum</h3>
                        <p>Stay ahead with industry-relevant courses designed to equip you with in-demand tech skills.</p>
                        <p>🔹 Frontend Development | 🔹 Backend Development | 🔹 UI & UX
                        </p>
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
                        <h3>Expert Instructors</h3>
                        <p>Learn from IT professionals and experienced mentors who guide you through hands-on projects.</p>
                        <p> 💡 Practical Learning | 📚 Live Sessions | 🎓 Career Mentorship</p>
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
                        <h3>Advanced Learning Environment</h3>
                        <p>Experience cutting-edge technology with world-class facilities designed for IT excellence.</p>
                        <p>💻 High-Tech Labs | 🖥 Practical | 📜 Certification of Completion</p>
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
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="ab_img">
                        <img src="{{ asset('assets/frontend/images/about.jpg') }}" style="aspect-ratio: unset !important;"
                            class="img-fluid" alt="career guidance">
                        {{-- <img src="{{ asset('assets/frontend/images/avi-about.jpeg') }}"
                            style="aspect-ratio: unset !important;" class="img-fluid" alt="career guidance"> --}}
                        {{-- <img src="{{ asset('assets/frontend/images/about1.png') }}" style="aspect-ratio: unset !important;"
                            class="img-fluid" alt="career guidance"> --}}

                    </div>
                </div><!--- END COL -->
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="ab_content">
                        <h2>Master In-Demand <u><span> IT Skills </span></u> & Elevate Your Career</h2>
                        <p>Stay ahead in the tech industry with hands-on training and expert-led courses designed for
                            real-world applications.</p>
                    </div>
                    <div class="abmv">
                        <span class="ti-medall"></span>
                        <h4>Our Mission</h4>
                        <p>Empowering learners with industry-relevant skills, practical knowledge, and professional
                            certifications to build a successful IT career.</p>
                    </div>
                    <div class="abmv">
                        <span class="ti-wand"></span>
                        <h4>Our Vision</h4>
                        <p>To bridge the gap between education and industry by providing top-tier IT training, fostering
                            innovation, and preparing students for future tech advancements.</p>
                    </div>
                    <a class="btn_one open-enquiry-form" href="javascript:void(0)">Enquire Now</a>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END ABOUT US HOME ONE -->

    <!-- START COUNTER -->
    {{-- <section id="counts" class="counts section-padding">
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
                            <span data-purecounter-start="0" data-purecounter-end="8232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Enrolled Students</p>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-files" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Academic Programs</p>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-headphone-alt" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="163" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Winning Award</p>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-user" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="93" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Certified Students</p>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section> --}}
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
                        <p>Join our high-quality, in-person classes from 9 AM to 6 PM and experience focused, interactive
                            learning in an offline environment.</p>
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
                        <p>Our dedicated team ensures a smooth learning experience with top-notch organization and support.
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
                        <p>Get assistance and guidance from our instructors during 9 AM to 6 PM to ensure a smooth learning
                            experience.</p>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END WHY CHOOSE US -->

    <!--START COURSE -->
    <div class="best-cpurse section-padding">
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
                                    <img src="{{ asset('uploads/courses/' . $course->image) }}" loading="lazy" alt="{{ $course->name }} course in Jalandhar">
                                @else
                                    <img src="{{ asset('assets/frontend/images/c1.png') }}" loading="lazy" alt="{{ $course->name }} course in Jalandhar">
                                @endif

                            </div>
                            <div class="course-content">
                                <h3><a href="{{ route('courseDetail',['slug'=>$course->slug]) }}">{{ $course->name }}</a></h3>
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
    </div>
    <!--END COURSE -->

    <!-- START COURSE PROMOTION -->
    <section class="course_promo section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="cp_content">
                        <h4>Best Offline Learning Platform</h4>
                        <h2>One Platfrom & Many <span><u>Courses</u></span> For You</h2>
                        <p>Enhance your skills with our expert-led offline courses, designed for both professionals and
                            school students in a structured classroom environment.</p>
                        <ul>
                            <li><span class="ti-check"></span>9/10 Average Satisfaction Rate</li>
                            <li><span class="ti-check"></span>96% Completitation Rate</li>
                            <li><span class="ti-check"></span>Supportive Learning Environment & Expert Instructors</li>
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
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="cp_img">
                        <img src="{{ asset('assets/frontend/images/promo.png') }}" style="aspect-ratio: unset !important;"
                            class="img-fluid" alt="image">
                        <!-- <div class="wc_year">
                                                    <h3>20 Years of Experience <br />from 2002</h3>
                                                </div> -->
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END COURSE PROMOTION -->


    <!-- START TESTIMONIALS-->
    <section class="testi_home_area section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Testimonial</h2>
                <p>What Says <span><u>Our Students</u></span></p>
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
                            <img src="{{ asset('uploads/blogs/' . $blog->image) }}" class="img-fluid" alt="{{ Str::limit($blog->title, 60) }}">
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
        <iframe  title="Map of reaching Code Academics"
            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d109076.43892059589!2d75.50858480128626!3d31.313729190279737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x391a5b95f7ff43df%3A0x189190600fd09f58!2sFirst%20Floor%2C%20Badwal%20complex%2C%20SCO%20-%20207%2C%20Near%20Narinder%20Cinema%2C%20Jawahar%20Nagar%2C%20Jalandhar%2C%20Punjab%20144001!3m2!1d31.3137555!2d75.5909861!5e0!3m2!1sen!2sin!4v1757049818988!5m2!1sen!2sin"
            width="600" height="450" style="border:0; position: absolute; top:0; left:0; width:100%; height:100%;"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- End map -->

    <!-- START FOOTER -->
@endsection
