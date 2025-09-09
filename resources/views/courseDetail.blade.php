@extends('frontend.layouts.master')
@section('meta_title', $course->name . '- Code Academics')
@section('meta_description', $course->meta_description)
@section('meta_keywords', $course->meta_keywords)

@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>{{ $course->name }}</h1>
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
                            @if ($course->image && file_exists('uploads/courses/' . $course->image))
                                <img src="{{ asset('uploads/courses/' . $course->image) }}" class="img-fluid" alt="{{ $course->name }}">
                            @else
                                <img src="{{ asset('assets/frontend/images/c1.png') }}" alt="courseImage">
                            @endif
                        </div>
                        {{-- <div class="arti_content ">
                            <p>{{ $course->meta_description }}</p>
                        </div> --}}
                        <div class="arti_sp blog-content">
                            {!! $course->description !!}
                        </div>
                    </div><!-- END ARTI SINGLE  -->

                </div><!-- END COL-->
                <div class="col-lg-5 col-sm-12 col-xs-12">
                    <div class="sidebar-post">
                        <div class="sidebar_title">
                            <h4>Popular Courses</h4>
                        </div>
                        @foreach($otherCourses as $otherCourse)
                            <div class="single_popular">
                                <a href="{{ route('courseDetail',['slug'=>$otherCourse->slug]) }}">
                                    @if ($otherCourse->image && file_exists('uploads/courses/' . $otherCourse->image))
                                        <img src="{{ asset('uploads/courses/' . $course->image) }}" alt="{{$otherCourse->name}}">
                                    @else
                                        <img src="{{ asset('assets/frontend/images/c1.png') }}" alt="courseImage">
                                    @endif
                                </a>
                                <h5><a href="{{ route('courseDetail',['slug'=>$otherCourse->slug]) }}">{{ $otherCourse->name }}</a></h5>
                            </div><!-- END Other Courses -->
                        @endforeach
                    </div><!-- END SIDEBAR POST -->
                </div><!--- END COL -->
            </div><!-- END ROW-->
        </div><!-- END CONTAINER-->
    </section>
    <!-- END BLOG -->
@endsection
