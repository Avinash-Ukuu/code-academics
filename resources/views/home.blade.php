@extends('frontend.layouts.master')
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
                        <img src="{{ asset('assets/frontend/images/home-image.png') }}" style="aspect-ratio: unset !important;" class="img-fluid" alt="image">
                        {{-- <div class="home_ps">
                            <img src="{{ asset('assets/frontend/images/user2.svg') }}" alt="">
                            <h2>5</h2>
                            <span>Active student</span>
                        </div>
                        <div class="home_ps2">
                            <img src="{{ asset('assets/frontend/images/file2.svg') }}" alt="">
                            <h2>20+</h2>
                            <span>Online Course</span>
                        </div> --}}
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
                        <img src="{{ asset('assets/frontend/images/about1.png') }}" style="aspect-ratio: unset !important;" class="img-fluid" alt="image">
                        <!-- <div class="wc_year">
                                <h3><span>6k+</span> <br />Happy Clients</h3>
                            </div> -->
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="ab_content">
                        <h2>Master In-Demand <u><span> IT Skills </span></u> & Elevate Your Career</h2>
                        <p>Stay ahead in the tech industry with hands-on training and expert-led courses designed for real-world applications.</p>
                    </div>
                    <div class="abmv">
                        <span class="ti-medall"></span>
                        <h4>Our Mission</h4>
                        <p>Empowering learners with industry-relevant skills, practical knowledge, and professional certifications to build a successful IT career.</p>
                    </div>
                    <div class="abmv">
                        <span class="ti-wand"></span>
                        <h4>Our Vision</h4>
                        <p>To bridge the gap between education and industry by providing top-tier IT training, fostering innovation, and preparing students for future tech advancements.</p>
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

    <!--START COURSE -->
    <div class="best-cpurse section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Popular Courses</h2>
                <p>Choose Our <span><u>Top Courses</u></span></p>
            </div>
            <div class="row">
                @foreach($courses as $course)
                    @if($loop->iteration == 7) @break @endif
                    <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                        data-wow-offset="0">
                        <div class="course-slide">
                            <div class="course-img">
                                <img src="{{ asset('assets/frontend/images/c1.png') }}" alt="course">

                            </div>
                            <div class="course-content">
                                <h3><a class="open-enquiry-form" href="javascript:void(0)">{{$course->name}}</a></h3>
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
                        <p>Enhance your skills with our expert-led offline courses, designed for both professionals and school students in a structured classroom environment.</p>
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
                        <img src="{{ asset('assets/frontend/images/promo.png') }}" style="aspect-ratio: unset !important;" class="img-fluid" alt="image">
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
                                <p>This platform has transformed the way I learn. The instructors are amazing, and the content is very engaging!</p>
                            </div>
                            <div class="testi_pic_title tpt_one">
                                <div class="pic">
                                    <img src="{{ asset('assets/frontend/images/t1.png') }}" alt="image">
                                </div>
                                <h4>James Clayton</h4>
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
                                <p>I highly recommend Web Development course! The lessons are well-structured, and the support from the team is fantastic.</p>
                            </div>
                            <div class="testi_pic_title tpt_two">
                                <div class="pic">
                                    <img src="{{ asset('assets/frontend/images/t2.png') }}" alt="image">
                                </div>
                                <h4>James Simmons</h4>
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
                                <p>A great experience! The practical exercises helped me a lot in understanding real-world applications.</p>
                            </div>
                            <div class="testi_pic_title tpt_three">
                                <div class="pic">
                                    <img src="{{ asset('assets/frontend/images/t3.png') }}" alt="image">
                                </div>
                                <h4>Alex feroundo</h4>
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
                                <p>The course exceeded my expectations! The explanations were clear, and I felt supported throughout the learning process.</p>
                            </div>
                            <div class="testi_pic_title tpt_one">
                                <div class="pic">
                                    <img src="{{ asset('assets/frontend/images/t4.png') }}" alt="image">
                                </div>
                                <h4>Kallu Mastan</h4>
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
                                <p>Absolutely worth it! The hands-on projects made learning so much more effective and enjoyable.</p>
                            </div>
                            <div class="testi_pic_title tpt_two">
                                <div class="pic">
                                    <img src="{{ asset('assets/frontend/images/t1.png') }}" alt="image">
                                </div>
                                <h4>Devid max</h4>
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
                @foreach($blogs as $blog)
                    @if($loop->iteration == 3) @break @endif
                    <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                        data-wow-offset="0">
                        <div class="single_blog">
                            <img src="{{ asset('uploads/blogs/'.$blog->image) }}" class="img-fluid" alt="image">
                            <div class="content_box">
                                <span>{{$blog->blog_created_at}}</span>
                                <h2><a href="{{ route('blogDetail',['slug'=>$blog->slug]) }}">{{\Illuminate\Support\Str::words($blog->title, 10, '...') }}</a></h2>
                                <a href="{{ route('blogDetail',['slug'=>$blog->slug]) }}" class="cta"><span>READ MORE</span>
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
                    @foreach($blogs as $blog)
                        @if($loop->iteration <= 2) @continue @endif
                        @if($loop->iteration == 5) @break @endif
                        <div class="single_blog">
                            <div class="content_box">
                                <span>{{$blog->blog_created_at}}</span>
                                <h2><a href="{{ route('blogDetail',['slug'=>$blog->slug]) }}">{{\Illuminate\Support\Str::words($blog->title, 10, '...') }}</a></h2>
                                <a href="{{ route('blogDetail',['slug'=>$blog->slug]) }}" class="cta"><span>READ MORE</span>
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

    <!-- START FOOTER -->
@endsection
