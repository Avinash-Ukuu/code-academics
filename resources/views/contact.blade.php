@extends('frontend.layouts.master')
@section('meta_title', 'Get in Touch - Code Academics')
@section('meta_description', 'Get in touch with us for inquiries, support, and collaboration. We’re here to help!')
@section('headerLinks')
<style>
  #codeEmail {
    color: rgb(10, 104, 166) !important;; /* Set your desired color */
    text-decoration: none;
  }

  #codeEmail:hover {
    color: rgb(10, 104, 166) !important; /* Prevent color change on hover */
  }
</style>
@endsection
@section('content')
<section class="section-top">
    <div class="container">
        <div class="col-lg-10 offset-lg-1 text-center">
            <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <h1>Get In Touch</h1>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> / Contact</li>
                </ul>
            </div><!-- //.HERO-TEXT -->
        </div><!--- END COL -->
    </div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->

    <!-- START ADDRESS -->
    <section class="address_area section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                    <div class="single_address">
                        <i class="ti-map"></i>
                        <h4>Our Location</h4>
                        <p>SCO - 207, First Floor Badwal Complex,<br> Near Narinder Cinema, Jalandhar City.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                    <div class="single_address sabr">
                        <i class="ti-mobile"></i>
                        <h4>Telephone</h4>
                        <p>+91 9592 258 369</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <div class="single_address">
                        <i class="ti-email"></i>
                        <h4>Send email</h4>
                        <p><a href="mailto:codeacademicss@gmail.com" id="codeEmail">codeacademicss@gmail.com</a></p>
                    </div>
                </div><!-- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END ADDRESS -->

    <!-- CONTACT -->
    <div id="contact" class="contact_area section-padding">
        <div class="container">
            <div class="section-title-two">
                <h2>Send your message.</h2>
            </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-10 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                    <div class="contact">
                        <form class="form" name="enq" id="enquiryForm">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Your Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Your Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Your Message</label>
                                    <textarea rows="6" name="message" class="form-control"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" value="Send message" name="submit" id="submitButton" class="btn_one" title="Submit Your Message!">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- END COL  -->
            </div><!-- END ROW -->
        </div><!--- END CONTAINER -->
    </div>
    <!-- END CONTACT -->
@endsection
