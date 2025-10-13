@extends('frontend.layouts.master')
@php
    $meta_title = 'Explore Our Courses | Code Academics Jalandhar';
    $meta_description = 'Explore professional courses in coding, web development, digital marketing, and more at Code Academics.';
    $meta_keywords = 'coding courses, web development course, web design course, mobile application course, basic computer course, video editing course, digital marketing course, laravel course , php course, python course, react js course';
    $meta_image = url('uploads/courses/' . $courses[0]->image);
@endphp
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ItemList",
            "name": "Code Academics Courses",
            "url": "{{route('coursePage')}}",
            "numberOfItems": {{$courses->count()}},
            "itemListElement": [
                @foreach($courses as $course)
                    {
                        "@type": "ListItem",
                        "position": {{$loop->iteration}},
                        "url": "{{ route('courseDetail',['slug'=>$course->slug]) }}"
                    }@if(!$loop->last),@endif
                @endforeach
            ]
        }
    </script>
@endsection
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

                @foreach ($courses as $course)
                    <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                        data-wow-offset="0">
                        <div class="course-slide">
                            <div class="course-img">
                                @if ($course->image && file_exists('uploads/courses/' . $course->image))
                                    <img src="{{ asset('uploads/courses/' . $course->image) }}" alt="{{ $course->name }} course in Jalandhar">
                                @else
                                    <img src="{{ asset('assets/frontend/images/c1.png') }}" alt="{{ $course->name }} course in Jalandhar">
                                @endif
                            </div>
                            <div class="course-content">
                                <h3><a  href="{{ route('courseDetail',['slug'=>$course->slug]) }}">{{ $course->name }}</a></h3>
                            </div>
                        </div><!--END COURSE SLIDE -->
                    </div><!--END COL -->
                @endforeach
            </div><!--END ROW -->
        </div><!--END CONTAINER -->
    </div>
    <!--END COURSE -->
@endsection
