@extends('frontend.layouts.master')
@section('content')
    <main>
        <!--theme-banner-one start-->
        <div class="theme-banner-one pt-205 pb-35 pt-lg-120 pt-md-80 pt-xs-60">
            <div class="shadow-text">Code</div>
            <img class="banner-shape shape-one" src="{{ asset('assets/frontend/images/line-1.svg') }}" alt="shape">
            <img class="banner-shape shape-two d-none d-lg-inline-block"
                src="{{ asset('assets/frontend/images/star-1.svg') }}" alt="shape">
            <img class="banner-shape shape-three d-none d-lg-inline-block"
                src="{{ asset('assets/frontend/images/star-2.svg') }}" alt="shape">
            <img class="banner-shape shape-four" src="{{ asset('assets/frontend/images/line-round-1.svg') }}"
                alt="shape">
            <div class="container">
                <div class="row gx-4 gx-xxl-5 align-items-center justify-content-center">
                    <div class="col-11">
                        <div class="theme__content text-center">
                            <h1 class="main-title-one">
                                <span>Code Academics</span>
                                <span>innovative IT</span>
                                <span>Solutions</span>
                            </h1>
                            <a class="theme_btn" href="contact.html">Get a Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--theme-banner-one end-->
        <!--marque start-->
        <div class="marquee-line pt-75 pb-130 pb-lg-60">
            <div class="marquee">
                <div id="supermarquee" class="marquee-wrapper"></div>
            </div>
        </div>
        <!--marque end-->
        <!--brand-area start-->
        <section class="brand-area pt-100 pb-125 pt-lg-60 pb-lg-90">
            <div class="container">
                <div class="row gx-4 gx-xxl-5">
                    <div class="brand-slider-one">
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('assets/frontend/images/brand-1.svg') }}"
                                    alt="brand"></a>
                        </div>
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('assets/frontend/images/brand-2.svg') }}"
                                    alt="brand"></a>
                        </div>
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('assets/frontend/images/brand-3.svg') }}"
                                    alt="brand"></a>
                        </div>
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('assets/frontend/images/brand-4.svg') }}"
                                    alt="brand"></a>
                        </div>
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('assets/frontend/images/brand-5.svg') }}"
                                    alt="brand"></a>
                        </div>
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('assets/frontend/images/brand-6.svg') }}"
                                    alt="brand"></a>
                        </div>
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('assets/frontend/images/brand-2.svg') }}"
                                    alt="brand"></a>
                        </div>
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('assets/frontend/images/brand-4.svg') }}"
                                    alt="brand"></a>
                        </div>
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('assets/frontend/images/brand-1.svg') }}"
                                    alt="brand"></a>
                        </div>
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('assets/frontend/images/brand-3.svg') }}"
                                    alt="brand"></a>
                        </div>
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('assets/frontend/images/brand-5.svg') }}"
                                    alt="brand"></a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--brand-area end-->
        <!--about-Code Academics start-->

        <section class="about-techy position-realtive pt-115 pb-15">
            <div class="container">
                <div class="row gx-4 gx-xxl-5 align-items-center">
                    <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                        <div class="logo-animated-block">
                            <img class="rotate-img" src="{{ asset('assets/frontend/images/mask-text.svg') }}"
                                alt="Text Img">
                            <div class="mark-icon">
                                <img src="{{ asset('assets/frontend/images/star-11a.svg') }}" alt="Star Icon">
                            </div>
                        </div>
                        <div class="about-img-wrapper position-relative mb-45">
                            <img class="main-img" src="{{ asset('assets/frontend/images/about-1.png') }}" alt="img">
                            <img class="shape-one" src="{{ asset('assets/frontend/images/line-round-2a.svg') }}"
                                alt="shape">
                        </div>
                    </div>
                    <div class="col-lg-5" data-aos="fade-left" data-aos-delay="100">
                        <div class="block-style-one pt-10 mb-45">
                            <h2 class="mb-15">About Our<br /> Code Academics – Empowering Future Innovators with
                                &amp; IT Education
                            </h2>
                            <p>Code Academics was founded with a mission to empower individuals with top-notch IT
                                education and skills. With a passionate team of industry experts, we specialize in
                                providing hands-on training in coding, graphic design, web development, and other IT
                                disciplines, ensuring our students are equipped for success in the digital world.
                            </p>
                            <ul class="block-box list-none">
                                <li>
                                    <a href="contact.html">
                                        <span class="img-bg"><img src="{{ asset('assets/frontend/images/icon-1a.svg') }}"
                                                alt="icon"></span>
                                        <span>Live Projects</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <span class="img-bg"><img src="{{ asset('assets/frontend/images/icon-2a.svg') }}"
                                                alt="icon"></span>
                                        <span>Worldwide Placemets</span>
                                    </a>
                                </li>
                            </ul>
                            <a class="theme_btn mt-60" href="about.html">Enqure Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about-techy end-->
        <!--our-services start-->
        <section class="our-services pt-80 pb-105 pt-lg-45 pb-lg-15">
            <div class="container">
                <div class="row gx-4 gx-xxl-5 justify-content-lg-start justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section-title text-center text-lg-start mb-55">
                            <h3 class="sect-title mb-20" data-aos="fade-upt">Our Courses</h3>
                            <p data-aos="fade-right" data-aos-delay="100">Dramatically supply transparent
                                backward deliverables before caward comp internal or "organic" sources.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-4 gx-xxl-5">

                    @foreach($courses as $index => $course)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                            <div class="feature-style-one mb-45">
                                <a class="top-arrow" href="#">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                                <img class="front-icon" src="{{ asset('assets/frontend/images/icon-3a.png') }}"
                                    alt="icon">
                                <img class="back-icon" src="{{ asset('assets/frontend/images/icon-3w.png') }}"
                                    alt="icon">
                                <h2>
                                    <a href="services-details.html">{{$course->name}}</a>
                                </h2>
                                <p>"{{ $course->description }}"</p>
                                <a href="javascript:void(0)">Connect Now</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!--our-services end-->
        <!--feature-work start-->
        <section class="feature-work pt-90 pb-95 pt-lg-50 pb-lg-60">
            <div class="container">
                <div class="row gx-4 gx-xxl-5 align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section-title text-center text-md-start mb-55">
                            <h3 class="sect-title mb-25" data-aos="fade-up">Projects Crafted by Code Academics
                            </h3>
                            <p data-aos="fade-up" data-aos-delay="100">Take a closer look at the exceptional
                                projects we’ve designed and developed to empower businesses worldwide.</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-4 d-flex justify-content-md-end justify-content-center pb-40">
                        <div class="slick-nav">
                            <div class="prev_f1 mr-20">
                                <i class="bi bi-chevron-left"></i>
                            </div>
                            <div class="next_f1">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-slider-one slick-nav">
                <div class="container custom-container">
                    <div class="row feature-slider-active" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4">
                            <div class="feature-item">
                                <a class="back-bg" href="project-details.html"><img class="w-100"
                                        src="{{ asset('assets/frontend/images/projectone.png') }}" alt="img"></a>
                                <h5>
                                    <a href="project-details.html">The Visa Engineers</a>
                                </h5>
                                <h3><a href="project-details.html">Dashboard Design and Development</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-item">
                                <a class="back-bg" href="project-details.html"><img class="w-100"
                                        src="{{ asset('assets/frontend/images/projecttwo.png') }}" alt="img"></a>
                                <h5>
                                    <a href="project-details.html">Exponent Institute</a>
                                </h5>
                                <h3><a href="project-details.html">Website Designing with CRM Potal</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-item">
                                <a class="back-bg" href="project-details.html"><img class="w-100"
                                        src="{{ asset('assets/frontend/images/projectthree.png') }}" alt="img"></a>
                                <h5>
                                    <a href="project-details.html">LearnTribe</a>
                                </h5>
                                <h3><a href="project-details.html">E-commerce Website</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-item">
                                <a class="back-bg" href="project-details.html"><img class="w-100"
                                        src="{{ asset('assets/frontend/images/projectfour.png') }}" alt="img"></a>
                                <h5>
                                    <a href="project-details.html">Voltcart canada</a>
                                </h5>
                                <h3><a href="project-details.html">Battry E-commerce Website</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-item">
                                <a class="back-bg" href="project-details.html"><img class="w-100"
                                        src="{{ asset('assets/frontend/images/projectseventh.png') }}"
                                        alt="img"></a>
                                <h5>
                                    <a href="project-details.html">Manohar Backrey Canada</a>
                                </h5>
                                <h3><a href="project-details.html">Mobile App Development</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature-work end-->
        <!--feature-work start-->
        {{-- <section class="feature-two pt-135 pb-30 pt-lg-60 pb-lg-15">
            <div class="container">
                <div class="row gx-4 gx-xxl-5 justify-content-lg-start justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section-title text-lg-start text-center mb-60">
                            <h3 class="sect-title mb-25" data-aos="fade-up">How It Works</h3>
                            <p data-aos="fade-up" data-aos-delay="100">Dramatically supply transparent
                                backward deliverables before caward comp internal or "organic" sources.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-4 gx-xxl-5">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="feature-style-two mb-45">
                            <div class="icon"><img src="{{ asset('assets/frontend/images/icon-9a.png') }}"
                                    alt="icon"></div>
                            <h3>
                                <a href="signup.html">Contact Us</a>
                            </h3>
                            <p>Reach out to us via our contact form, email, or phone to discuss your requirements.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-style-two mb-45">
                            <div class="icon"><img src="{{ asset('assets/frontend/images/icon-10a.png') }}"
                                    alt="icon"></div>
                            <h3>
                                <a href="faq.html">Understand Requirements</a>
                            </h3>
                            <p>Share your business goals and ideas, and let us analyze your specific needs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-style-two mb-45">
                            <div class="icon"><img src="{{ asset('assets/frontend/images/icon-11a.png') }}"
                                    alt="icon"></div>
                            <h3>
                                <a href="faq.html">Collaborate & Plan</a>
                            </h3>
                            <p>Work closely with our team to develop a strategic roadmap tailored to your project.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-style-two mb-45">
                            <div class="icon"><img src="{{ asset('assets/frontend/images/icon-12a.png') }}"
                                    alt="icon"></div>
                            <h3>
                                <a href="faq.html">Development & Execution</a>
                            </h3>
                            <p>"Our experts build and implement solutions with precision and creativity.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-style-two mb-45">
                            <div class="icon"><img src="{{ asset('assets/frontend/images/icon-10a.png') }}"
                                    alt="icon"></div>
                            <h3>
                                <a href="faq.html">Deliver & Support</a>
                            </h3>
                            <p>Receive high-quality results backed by ongoing support to ensure your success.</p>
                        </div>
                    </div>
                </div>
            </div>
            <img class="shape-one" src="{{ asset('assets/frontend/images/line-round-1.svg') }}" alt="">
        </section> --}}
        <!--feature-work end-->
        <!--counter-area end-->
        <section class="counter-area pt-75 pt-lg-30 pt-lg-35 pb-lg-10">
            <div class="container custom-contianer-one theme-bg">
                <div class="row gx-4 gx-xxl-5">
                    <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                        <div class="counter-style-one mb-30">
                            <h3>
                                <span class="counter">100</span>+
                            </h3>
                            <h4>Worldwide Clients</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-style-one mb-30" data-aos="fade-up" data-aos-delay="200">
                            <h3>
                                <span class="counter">8</span>+
                            </h3>
                            <h4>Years Experience</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-style-one mb-30" data-aos="fade-up" data-aos-delay="300">
                            <h3>
                                <span class="counter">180</span>+
                            </h3>
                            <h4>Projects Done</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-style-one mb-30" data-aos="fade-up" data-aos-delay="400">
                            <h3>
                                <span class="counter">1.2</span>K
                            </h3>
                            <h4>Beautiful Review</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--counter-area start-->
        <!--client-feedback start-->
        <section class="client-feedback pt-140 pb-150 pt-lg-55 pb-lg-60">
            <div class="container">
                <div class="row gx-4 gx-xxl-5 justify-content-center" data-aos="fade-up">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section-title text-center mb-55">
                            <h3 class="sect-title mb-25">Testimonials</h3>
                            <p>Dramatically supply transparent backward deliverables before caward comp
                                internal or "organic" sources.</p>
                        </div>
                    </div>
                </div>
                <div class="row feedback-active-one" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-11">
                        <div class="feedback-style-one text-center">
                            <div class="rating mb-40">
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-star-half"></i>
                                </a>
                                <span class="fs-18 text-white">4.5</span>
                            </div>
                            <p>"Code Academics truly understands the value of client satisfaction. Their seamless
                                communication and cutting-edge solutions helped us scale our operations and achieve
                                incredible results."</p>
                            <div class="author d-flex align-items-center justify-content-center mt-45">
                                <!-- <img src="images/author-1.jpg" alt="author"> -->
                                <div class="author-info">
                                    <h3>Rajesh Kumar</h3>
                                    <h5>Managing Director, Global Connect Services</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-11">
                        <div class="feedback-style-one text-center">
                            <div class="rating mb-40">
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <span class="fs-18 text-white">5</span>
                            </div>
                            <p>"The team at Code Academics transformed our vision into a stunning reality. From web
                                development to digital marketing, they handled every aspect of our project with
                                professionalism and expertise."</p>
                            <div class="author d-flex align-items-center justify-content-center mt-45">
                                <!-- <img src="images/author-2.jpg" alt="author"> -->
                                <div class="author-info">
                                    <h3>Sarah Mitchell</h3>
                                    <h5>CEO, Evolve Brands</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-11">
                        <div class="feedback-style-one text-center">
                            <div class="rating mb-40">
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-star-fill"></i>
                                </a>
                                <span class="fs-18 text-white">5</span>
                            </div>
                            <p>"Code Academics brought our e-commerce dream to life! Their team not only delivered a
                                user-friendly platform but also guided us in scaling our business online. Truly a
                                reliable partner for IT solutions."</p>
                            <div class="author d-flex align-items-center justify-content-center mt-45">
                                <!-- <img src="images/author-3.jpg" alt="author"> -->
                                <div class="author-info">
                                    <h3>Priya Sharma </h3>
                                    <h5>Owner, Elegant Crafts</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--client-feedback end-->
        <!--blog-area start-->
        <section class="blog-area slick-nav pt-100 pb-100 pt-lg-55 pb-lg-60">
            <div class="container">
                <div class="row gx-4 gx-xxl-5 align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-8" data-aos="fade-up">
                        <div class="section-title text-center text-md-start mb-60">
                            <h3 class="sect-title mb-25">Latest Blogs</h3>
                            <p>Dramatically supply transparent backward deliverables before caward comp
                                internal or "organic" sources.</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-4 d-flex justify-content-md-end justify-content-center pb-40">
                        <div class="slick-nav">
                            <div class="prev_b1 mr-20">
                                <i class="bi bi-chevron-left"></i>
                            </div>
                            <div class="next_b1">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row blog-active-one" data-aos="fade-up" data-aos-delay="100">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4">
                            <div class="blog-style-one">
                                <div class="blog-thumb">
                                    <img class="w-100" src="{{ asset('uploads/blogs/'.$blog->image) }}"
                                        alt="img">
                                </div>
                                <div class="blog-content">
                                    <h4>
                                        <a class="blog-title" href="blog-details.html">{{ $blog->title }}</a>
                                    </h4>
                                    <p>{{ Str::words($blog->description, 20, '...') }}</p>
                                    <div class="blog-meta">
                                        <a href="#">
                                            <i class="bi bi-person-plus"></i>
                                            Code Academics</a>
                                        <a href="#">
                                            <i class="bi bi-clock"></i>
                                            {{ $blog->blog_created_at }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-4">
                        <div class="blog-style-one">
                            <div class="blog-thumb">
                                <img class="w-100" src="{{ asset('assets/frontend/images/blog-02.jpg') }}"
                                    alt="img">
                                <a href="#" class="tag tag-02">Cyber Security</a>
                            </div>
                            <div class="blog-content">

                                <h4>
                                    <a class="blog-title" href="blog-details.html">Google is removing the Movies
                                        &amp;
                                        TV section from the Play Store</a>
                                </h4>
                                <p>Dramatically supply transparent backward deliverables before caward comp
                                    internal or "organic" sources.</p>
                                <div class="blog-meta">
                                    <a href="#">
                                        <i class="bi bi-person-plus"></i>
                                        Samir Jam</a>
                                    <a href="#">
                                        <i class="bi bi-clock"></i>
                                        21 Jan 2022</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-style-one">
                            <div class="blog-thumb">
                                <img class="w-100" src="{{ asset('assets/frontend/images/blog-01.jpg') }}"
                                    alt="img">
                                <a href="#" class="tag tag-03">Cyber Security</a>
                            </div>
                            <div class="blog-content">

                                <h4>
                                    <a class="blog-title" href="blog-details.html">Google Photos makes it easier
                                        to
                                        import and organize your pics</a>
                                </h4>
                                <p>Dramatically supply transparent backward deliverables before caward comp
                                    internal or "organic" sources.</p>
                                <div class="blog-meta">
                                    <a href="#">
                                        <i class="bi bi-person-plus"></i>
                                        Hamina Hasan</a>
                                    <a href="#">
                                        <i class="bi bi-clock"></i>
                                        21 Jan 2022</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-style-one">
                            <div class="blog-thumb">
                                <img class="w-100" src="{{ asset('assets/frontend/images/blog-02.jpg') }}"
                                    alt="img">
                                <a href="#" class="tag">Cyber Security</a>
                            </div>
                            <div class="blog-content">

                                <h4>
                                    <a class="blog-title" href="blog-details.html">Cybersecurity researchers trace
                                        Lapsus$ attacks to a teenager from England</a>
                                </h4>
                                <p>Dramatically supply transparent backward deliverables before caward comp
                                    internal or "organic" sources.</p>
                                <div class="blog-meta">
                                    <a href="#">
                                        <i class="bi bi-person-plus"></i>
                                        Paul Teru</a>
                                    <a href="#">
                                        <i class="bi bi-clock"></i>
                                        21 Jan 2022</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-style-one">
                            <div class="blog-thumb">
                                <img class="w-100" src="{{ asset('assets/frontend/images/blog-01.jpg') }}"
                                    alt="img">
                                <a href="#" class="tag tag-02">Cyber Security</a>
                            </div>
                            <div class="blog-content">

                                <h4>
                                    <a class="blog-title" href="blog-details.html">Google is removing the Movies
                                        &amp;
                                        TV section from the Play Store</a>
                                </h4>
                                <p>Dramatically supply transparent backward deliverables before caward comp
                                    internal or "organic" sources.</p>
                                <div class="blog-meta">
                                    <a href="#">
                                        <i class="bi bi-person-plus"></i>
                                        Samir Jam</a>
                                    <a href="#">
                                        <i class="bi bi-clock"></i>
                                        21 Jan 2022</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-style-one">
                            <div class="blog-thumb">
                                <img class="w-100" src="{{ asset('assets/frontend/images/blog-02.jpg') }}"
                                    alt="img">
                                <a href="#" class="tag tag-03">Cyber Security</a>
                            </div>
                            <div class="blog-content">

                                <h4>
                                    <a class="blog-title" href="blog-details.html">Google Photos makes it easier
                                        to
                                        import and organize your pics</a>
                                </h4>
                                <p>Dramatically supply transparent backward deliverables before caward comp
                                    internal or "organic" sources.</p>
                                <div class="blog-meta">
                                    <a href="#">
                                        <i class="bi bi-person-plus"></i>
                                        Hamina Hasan</a>
                                    <a href="#">
                                        <i class="bi bi-clock"></i>
                                        21 Jan 2022</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!--blog-area end-->
        <!--techy-newsletter start-->
        <section class="techy-newsletter pt-120 pt-lg-60">
            <div class="container">
                <div class="row gx-4 gx-xxl-5 align-items-center justify-content-center borders">
                    <div class="col-lg-8">
                        <div class="block-style-two text-center pb-90">
                            <img class="news-shape-one d-none d-xl-block"
                                src="{{ asset('assets/frontend/images/line-round-3a.svg') }}" alt="shape">
                            <h3>Have a project in mind? Let’s get to work.</h3>
                            <a href="contact.html" class="theme_btn">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--techy-newsletter end-->

    </main>
@endsection
