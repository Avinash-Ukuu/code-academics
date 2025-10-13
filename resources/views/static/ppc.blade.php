@extends('frontend.layouts.master')
@php
    $meta_title = 'Best PPC Course in Jalandhar | Code Academics';
    $meta_description = 'Maximize ROI with professional PPC advertising. Get targeted traffic, leads, and conversions with our pay-per-click marketing services.';
    $meta_keywords = 'PPC advertising, pay-per-click marketing, Google Ads, Facebook Ads, targeted traffic, online advertising, paid search, PPC campaigns';
    $meta_image = url('assets/frontend/images/c1.png');
@endphp

@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Course",
            "name": "PPC Course",
            "description": "Maximize ROI with professional PPC advertising. Get targeted traffic, leads, and conversions with our pay-per-click marketing services.",
            "provider": {
                "@type": "EducationalOrganization",
                "name": "Code Academics",
                "sameAs": "{{route('home')}}"
            },
            "url": "{{ route('ppcDetail') }}"
        }
    </script>
@endsection
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>PPC Course in Jalandhar – Code Academics</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li> / Course Detail</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!-- START Course -->
    <section class="blog-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12 col-xs-12">
                    <div class="arti_single">
                        <div class="arti_img_two">
                            <img src="{{ asset('assets/frontend/images/c1.png') }}" alt="ppc course in Jalandhar">
                        </div>
                        <div class="arti_sp blog-content">
                            <p>Our PPC Marketing Course is tailored to equip students, entrepreneurs, and professionals with
                                skills to excel in executing effective paid ad campaigns. Learning with our course, you will
                                understand how to set up, manage, and optimize PPC campaigns on Google Ads, Bing Ads, and
                                social media platforms.</p>
                            <p>From learning keyword research to crafting effective ad copies and reporting on campaign
                                performance, this course offers functional knowledge and experiential training to drive
                                leads, boost conversions, and amplify ROI.</p>
                            &nbsp;<h4>What You'll Learn</h4>&nbsp;
                            <ul>
                                <li>PPC and digital advertising fundamentals</li>
                                <li>Google Ads configuration (Search, Display, Video & Shopping campaigns)</li>
                                <li>Bing Ads and other ad networks</li>
                                <li>Keyword research and targeting techniques</li>
                                <li>Crafting high-performing ad copies</li>
                                <li>Quality Score and Ad Rank optimization</li>
                                <li>Audience targeting & remarketing strategies</li>
                                <li>Budgeting and bidding strategies</li>
                                <li>Conversion tracking and analysis</li>
                                <li>A/B testing and campaign optimization</li>
                                <li>Reporting and performance monitoring</li>
                            </ul>

                            &nbsp;<h4>Who Can Join</h4>
                            &nbsp;<ul>
                                <li>Students seeking to establish a career in digital marketing</li>
                                <li>Business owners seeking to market their brand online</li>
                                <li>Marketing professionals seeking to upskill</li>
                                <li>Freelancers seeking to provide PPC services</li>
                            </ul>

                            &nbsp;<h4>Career Opportunities After the Course</h4>&nbsp;
                            <ul>
                                <li>PPC Specialist</li>
                                <li>Google Ads Manager</li>
                                <li>Digital Marketing Executive</li>
                                <li>SEM (Search Engine Marketing) Expert</li>
                                <li>Freelance PPC Consultant</li>
                            </ul>
                        </div>
                    </div><!-- END ARTI SINGLE  -->

                </div><!-- END COL-->
                <div class="col-lg-5 col-sm-12 col-xs-12">
                    <div class="sidebar-post">
                        <div class="sidebar_title">
                            <h4>Popular Courses</h4>
                        </div>
                        @foreach ($otherCourses as $otherCourse)
                            <div class="single_popular">
                                <a href="{{ route('courseDetail', ['slug' => $otherCourse->slug]) }}">
                                    @if ($otherCourse->image && file_exists('uploads/courses/' . $otherCourse->image))
                                        <img src="{{ asset('uploads/courses/' . $otherCourse->image) }}"
                                            alt="{{ $otherCourse->name }} course in Jalandhar">
                                    @else
                                        <img src="{{ asset('assets/frontend/images/c1.png') }}"
                                            alt="{{ $otherCourse->name }} course in Jalandhar">
                                    @endif
                                </a>
                                <h5><a
                                        href="{{ route('courseDetail', ['slug' => $otherCourse->slug]) }}">{{ $otherCourse->name }}</a>
                                </h5>
                            </div><!-- END Other Courses -->
                        @endforeach
                    </div><!-- END SIDEBAR POST -->
                </div><!--- END COL -->
            </div><!-- END ROW-->
        </div><!-- END CONTAINER-->
    </section>
    <!-- END BLOG -->
@endsection
