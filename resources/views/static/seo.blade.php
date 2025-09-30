@extends('frontend.layouts.master')
@section('meta_title', 'Best SEO Course in Jalandhar | Code Academics')
@section('meta_description',
    'Boost your websites visibility with expert SEO services. Increase traffic, improve
    rankings, and grow your business online.')
@section('meta_keywords',
    'SEO course in jalandhar, search engine optimization, website ranking, organic traffic,
    digital marketing, on-page SEO, off-page SEO, keyword research')

@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Course",
            "name": "SEO Course",
            "description": "Boost your website's visibility with expert SEO services. Increase traffic, improve rankings, and grow your business online.",
            "provider": {
                "@type": "EducationalOrganization",
                "name": "Code Academics",
                "sameAs": "{{route('home')}}"
            },
            "url": "{{ route('seoDetail') }}"
        }
    </script>
@endsection
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>SEO Course in Jalandhar – Code Academics</h1>
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
                            <img src="{{ asset('assets/frontend/images/c1.png') }}" alt="seo course in Jalandhar">
                        </div>
                        <div class="arti_sp blog-content">
                            <p>Grow your online business and become a search engine marketing expert with the SEO (Search
                                Engine Optimization) Course at Code Academics, Jalandhar. The course is ideal for beginners,
                                entrepreneurs, and marketing managers who wish to learn the art of placing websites higher
                                on Google and other search engines.</p>

                            &nbsp;<h4>What You Will Learn:</h4>&nbsp;
                            <ul>
                                <li><b>Keyword Research & Analysis:</b> Find profitable keywords and optimize content to
                                    reach the target audience.</li>
                                <li><b>On-Page SEO:</b> Optimize meta tags, headings, images, URLs, and website content to
                                    improve search engine visibility.</li>
                                <li><b>Off-Page SEO:</b> Learn methods to acquire backlinks, enhance domain authority, and
                                    generate traffic from external sources.</li>
                                <li><b>Technical SEO:</b> Understand website structure, mobile optimization, page speed,
                                    sitemap, robots.txt, and schema markup.</li>
                                <li><b>Content Optimization & Marketing:</b> Develop SEO-friendly content that interacts
                                    with users and converts.</li>
                                <li><b>Analytics & Reporting:</b> Utilize tools such as Google Analytics and Google Search
                                    Console to monitor website performance and refine strategies.</li>
                            </ul>

                            &nbsp;<h4>Why Choose Code Academics:</h4>&nbsp;
                            <ul>
                                <li><b>Hands-on Projects:</b> Practical experience working on live websites and actual SEO campaigns.</li>
                                <li><b>Expert Trainers:</b> Instruction from expert practitioners with decades of SEO and digital marketing expertise.</li>
                                <li><b>Career Opportunities:</b> Support for SEO internships, freelance work, and full-time digital marketing careers.</li>
                                <li><b>Flexible Learning:</b> Flexibility of online or classroom training to accommodate your needs.</li>
                            </ul>&nbsp;

                            <p>You will be able to execute full SEO strategies, enhance web rankings, boost organic traffic, and contribute well to any digital marketing team by the end of the course.</p>&nbsp;
                            <p>Enroll now in Jalandhar's top-rated SEO course at Code Academics and get certified as an SEO expert!</p>
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
