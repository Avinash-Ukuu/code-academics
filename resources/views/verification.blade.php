@extends('frontend.layouts.master')
@section('meta_title', 'Get in Touch - Code Academics')
@section('meta_description', 'Get in touch with us for inquiries, support, and collaboration. We’re here to help!')
@section('headerLinks')
    <style>
        #codeEmail {
            color: rgb(10, 104, 166) !important;
            ;
            /* Set your desired color */
            text-decoration: none;
        }

        #codeEmail:hover {
            color: rgb(10, 104, 166) !important;
            /* Prevent color change on hover */
        }
    </style>
@endsection
@section('content')
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Verification Page</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li> / Verification</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!-- Certificate Verification Form -->
    <div id="contact" class="contact_area section-padding">
        <div class="container">
            <div class="section-title-two">
                <h2>Please Verify Your Details.</h2>
            </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-10 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.2s" data-wow-offset="0">
                    <div class="contact">
                        <form class="form" name="enq" id="certificateVerificationForm">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">Roll Number</label>
                                    <input type="text" name="roll_number" id="rollNumber" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Father Name</label>
                                    <input type="text" name="father_name" id="fatherName" class="form-control" required>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit" value="Send message" name="submit" id="submitButton"
                                        class="btn_one" title="Submit Your Details!">Submit</button>
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
@section('footerScript')
<script src="{{asset('assets/frontend/js/sweetalert2.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#certificateVerificationForm').on('submit', function(e) {
                e.preventDefault(); // Prevent normal form submit

                let formData = $(this).serialize(); // Serialize form data

                $.ajax({
                    url: "{{ route('verifyStudentCertificate') }}",
                    type: "POST",
                    data: formData,
                    beforeSend: function() {
                        $("#submitButton").prop("disabled", true).text("Checking...");
                    },
                    success: function(response) {
                        $("#submitButton").prop("disabled", false).text("Submit");

                        if (response.status === "success") {
                            // Display student details
                            let student = response.data;
                            Swal.fire({
                                icon: 'success',
                                title: 'Student Verified!',
                                html: `
                            <b>Name:</b> ${student.name} <br>
                            <b>Course:</b> ${student.course_name} <br>
                            <b>Status:</b> ${student.status}
                        `
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'No Record Found',
                                text: 'Please check your details and try again.'
                            });
                        }
                        $('#rollNumber').val('');
                        $('#fatherName').val('');
                    },
                    error: function(xhr) {
                        $("#submitButton").prop("disabled", false).text("Submit");
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Something went wrong. Please try again.'
                        });
                    }
                });
            });
        });
    </script>


@endsection
