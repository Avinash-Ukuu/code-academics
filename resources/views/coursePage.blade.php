@extends('frontend.layouts.master')
@section('meta_title', 'Explore Our Courses - Code Academics')
@section('meta_description', 'Explore a variety of professional courses in web development, design, and more. Start learning today!')
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>All Course</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li> / Course</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!--START COURSE -->
    <div class="best-cpurse section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Popular Courses</h2>
                <p>Choose Our <span><u>Top Courses</u></span></p>
            </div>
            <div class="row">

                @foreach($courses as $course)
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
            </div><!--END ROW -->
        </div><!--END CONTAINER -->
    </div>
    <!--END COURSE -->
@endsection
