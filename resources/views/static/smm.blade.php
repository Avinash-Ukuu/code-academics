@extends('frontend.layouts.master')
@section('meta_title','Best SMM Course in Jalandhar | Code Academics')
@section('meta_description', 'Grow your brand on social media with expert SMM services. Engage your audience, increase followers, and drive conversions.')
@section('meta_keywords', 'social media marketing, SMM services, Facebook marketing, Instagram marketing, Twitter marketing, social media strategy, brand engagement, digital marketing')

@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Course",
            "name": "SMM Course",
            "description": "Grow your brand on social media with expert SMM services. Engage your audience, increase followers, and drive conversions.",
            "provider": {
                "@type": "EducationalOrganization",
                "name": "Code Academics",
                "sameAs": "{{route('home')}}"
            },
            "url": "{{ route('smmDetail') }}"
        }
    </script>
@endsection
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>SMM Course in Jalandhar – Code Academics</h1>
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
                            <img src="{{ asset('assets/frontend/images/c1.png') }}" alt="smm course in Jalandhar">
                        </div>
                        <div class="arti_sp blog-content">
                            <p>Grow your brand on social media with expert SMM services. Engage your audience, increase followers, and drive conversions.</p>
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
                                        <img src="{{ asset('uploads/courses/' . $otherCourse->image) }}" alt="{{ $otherCourse->name }} course in Jalandhar">
                                    @else
                                        <img src="{{ asset('assets/frontend/images/c1.png') }}" alt="{{ $otherCourse->name }} course in Jalandhar">
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
