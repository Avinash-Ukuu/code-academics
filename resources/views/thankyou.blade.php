@extends('frontend.layouts.master')
@section('content')
	<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
					<h1>Thank You</h1>
					<ul>
						<li><a href="{{ route('home') }}">Home</a></li>
						<li> / Thank You</li>
					</ul>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END SECTION TOP -->

	<!-- START 404 -->
	<section class="zero_area section-padding">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
					<div class="error_page">
						<h2>Thank you for submitting the form.</h2>
						<div class="home_btn">
							<a href="{{ route('home') }}" class="btn_one">Back to Home</a>
						</div>
					</div>
			  </div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END 404 -->
@endsection
