@extends('frontend.layouts.master')
@section('meta_title', $blog->title)
@section('meta_description', $blog->description)
@section('meta_keywords', $blog->meta_keywords)
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>{{ $blog->title }}</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li> / Blog Detail</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!-- START BLOG -->
    <section class="blog-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12 col-xs-12">
                    <div class="arti_single">
                        <div class="arti_img_two">
                            <img src="{{ asset('uploads/blogs/' . $blog->image) }}" class="img-fluid" alt="Blog image">
                        </div>
                        <div class="arti_content ">
                            <p>{{ $blog->description }}</p>
                        </div>
                        <div class="arti_sp">
                            {!! $blog->content !!}
                        </div>
                        <div class="share_sp">
                            <h4>Share</h4>
                            <ul>
                                <li><a href="#"><span class="ti-facebook"></span> Facebook</a></li>
                                <li><a href="#"><span class="ti-twitter"></span> Twitter</a></li>
                                <li><a href="#"><span class="ti-instagram"></span> Instagram</a></li>
                                <li><a href="#"><span class="ti-linkedin"></span> Linkedin</a></li>
                            </ul>
                        </div>
                    </div><!-- END ARTI SINGLE  -->

                </div><!-- END COL-->
                <div class="col-lg-5 col-sm-12 col-xs-12">
                    <div class="sidebar-post">
                        <div class="sidebar_title">
                            <h4>Popular Blogs</h4>
                        </div>
                        @foreach($otherBlogs as $otherBlog)
                            <div class="single_popular">
                                <a href="{{ route('blogDetail',['slug'=>$otherBlog->slug]) }}"><img src="{{ asset('uploads/blogs/' . $otherBlog->image) }}" alt=""></a>
                                <h5><a href="{{ route('blogDetail',['slug'=>$otherBlog->slug]) }}">{{ $otherBlog->title }}</a></h5>
                            </div><!-- END SINGLE POPULAR POST -->
                        @endforeach
                    </div><!-- END SIDEBAR POST -->
                    <div class="sidebar-post">
                        <div class="sidebar_title">
                            <h4>Follow us</h4>
                        </div>
                        <div class="single_social">
                            <ul>
                                <li>
                                    <div class="social_item b_facebook"><a href="#" title="facebook"><i
                                                class="fa fa-facebook"></i><span class="item-list">150K Likes</span></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="social_item b_twitter"><a href="#" title="twitter"><i
                                                class="fa fa-twitter"></i><span class="item-list">138K
                                                Followers</span></a></div>
                                </li>

                                <li>
                                    <div class="social_item b_youtube"><a href="#" title="youtube"><i
                                                class="fa fa-youtube"></i><span class="item-list">90K
                                                Subscribers</span></a></div>
                                </li>

                                <li>
                                    <div class="social_item b_pinterest"><a href="#" title="pinterest"><i
                                                class="fa fa-pinterest"></i><span class="item-list">350K
                                                Followers</span></a></div>
                                </li>

                                <li>
                                    <div class="social_item b_tumblr"><a href="#" title="rss"><i
                                                class="fa fa-tumblr"></i><span class="item-list">901 Followers</span></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="social_item b_rss"><a href="#" title="rss"><i
                                                class="fa fa-rss"></i><span class="item-list">411 Followers</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- END SOCIAL MEDIA POST -->
                    </div><!-- END SIDEBAR POST -->


                </div><!--- END COL -->
            </div><!-- END ROW-->
        </div><!-- END CONTAINER-->
    </section>
    <!-- END BLOG -->
@endsection
