@extends('frontend.layouts.master')
@section('meta_title', 'Latest Tech & Coding Blogs - Code Academics')
@section('meta_description', 'Read the latest tech blogs on web development, programming, and AI trends. Stay updated!')
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Latest Blog</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li> / Blog</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!-- START BLOG -->
    <section class="blog_area_bg section-padding">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                        data-wow-offset="0">
                        <div class="single_blog">
                            <img src="{{ asset('uploads/blogs/'.$blog->image) }}" class="img-fluid" alt="image">
                            <div class="content_box">
                                <span>{{$blog->blog_created_at}}</span>
                                <h2><a href="{{ route('blogDetail',['slug'=>$blog->slug]) }}">{{\Illuminate\Support\Str::words($blog->title, 15, '...') }}</a></h2>
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
            </div><!-- / END ROW -->
        </div><!-- END CONTAINER  -->
    </section>
    <!-- END BLOG -->
@endsection
