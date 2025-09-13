@extends('frontend.layouts.master')
@section('meta_title', 'Gallery - Code Academics')
@section('meta_description', 'Photos and Videos of students work, review and infrastructure!')
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Gallery</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li> / Gallery</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!-- START GALLERY SECTION  -->
    <section class="blog_area_bg section-padding">
        <div class="container">
            <!-- Category Tabs -->
            <ul class="nav nav-pills justify-content-center mb-4" id="gallery-tabs">
                @if ($categories->isNotEmpty())
                    <li class="nav-item">
                        <button class="nav-link active filter-btn" data-category="all">All</button>
                    </li>
                    @foreach ($categories as $category)
                        <li class="nav-item">
                            <button class="nav-link filter-btn" data-category="cat-{{ $category->id }}">
                                {{ ucfirst($category->name) }}
                            </button>
                        </li>
                    @endforeach
                @endif
            </ul>

            <!-- Gallery Grid -->
            <div class="row gallery">
                @if ($allGalleries->isNotEmpty())
                    @foreach ($allGalleries as $gallery)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4 gallery-item"
                            data-category="cat-{{ $gallery->gallery_category_id }}">
                            <div class="card shadow-sm">
                                @php
                                    $extension = pathinfo($gallery->url, PATHINFO_EXTENSION);
                                @endphp
                                @if (in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'gif']))
                                    <img src="{{ asset('uploads/gallery/' . $gallery->url) }}"
                                        class="card-img-top img-fluid" alt="{{ $gallery->title }}">
                                @else
                                    <!-- If you store uploaded video -->
                                    <video class="card-img-top img-fluid" controls>
                                        <source src="{{ asset('uploads/gallery/' . $gallery->url) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                            <div class="error_page">
                                <h2>Oops! Data not found</h2>
                                <div class="home_btn">
                                    <a href="{{ route('home') }}" class="btn_one">Back to Home</a>
                                </div>
                            </div>
                        </div><!--- END COL -->
                    </div><!--- END ROW -->
                @endif
            </div>
        </div><!-- END CONTAINER  -->
    </section>
    <!-- END GALLERY SECTION  -->
@endsection
@section('footerScript')
    <script>
        $(document).ready(function() {
            $(".filter-btn").click(function() {
                var category = $(this).attr("data-category");

                $(".filter-btn").removeClass("active");
                $(this).addClass("active");

                if (category === "all") {
                    $(".gallery-item").show();
                } else {
                    $(".gallery-item").hide();
                    $(".gallery-item[data-category='" + category + "']").show();
                }
            });
        });
    </script>
@endsection
