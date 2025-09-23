@extends('cms.layouts.master')
@section('headerLinks')
    <link href="{{ asset('assets/adminlte/dist/css/cropper.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('gallery.index') }}">Gallery List</a></li>
                        <li class="breadcrumb-item active">Gallery Form</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Gallery Form</h3>
            </div>

            {!! Form::model($object, [
                'method' => $method,
                'url' => $url,
                'onSubmit' => "document.getElementById('submit').disabled=true;",
                'files' => true,
                'id' => 'galleryForm',
            ]) !!}
            <input type="hidden" name="id" value="{{ $object->id ?? '' }}">
            <div class="card-body">
                <div class="row ml-0"><b>Note :- </b>&nbsp;<p class="text-danger">Name field should only contain
                        alphabetical characters.</p>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        {{ Form::label('gallery_category_id', 'Select Gallery Category', []) }}<span style="color: red;">
                            *</span>
                        {{ Form::select('gallery_category_id', $galleryCategories, $object->gallery_category_id ?? null, ['class' => 'form-control select2', 'placeholder' => 'Select Gallery Category', 'data-placeholder' => 'Select Gallery Category', 'required']) }}
                    </div>

                    <div class="form-group col-6">
                        {{ Form::label('title', 'Title', []) }}<span style="color: red;"> *</span>
                        {{ Form::text('title', null, ['class' => 'form-control title', 'placeholder' => 'Enter Title', 'required']) }}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        {!! Form::label('media', 'Upload Image/Video') !!}
                        {!! Form::file('media', [
                            'class' => 'form-control-file',
                            'id' => 'media',
                            'accept' => '.jpg,.jpeg,.png,.mp4,.mov',
                        ]) !!}
                        <small class="form-text text-muted">
                            Allowed types: jpg, jpeg, png, mp4, mov
                        </small>
                    </div>

                    <!-- Cropper Modal -->
                    <div class="modal fade" id="cropperModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Crop Image</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body text-center">
                                    <img id="imageToCrop" style="max-width:100%;" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="cropImageBtn" class="btn btn-primary">Crop & Save</button>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="form-group" id="preview"></div>

                    @if (!empty($object->url) && file_exists('uploads/gallery/' . $object->url))
                        @php
                            $extension = pathinfo($object->url, PATHINFO_EXTENSION);
                        @endphp
                        <div class="image-preview mt-2  ml-2">
                            {{ Form::label('image', 'Uploaded Media', ['class' => 'mr-2']) }}
                            @if (in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'gif']))
                                <img style="background:thistle;max-height: 150px;"
                                    src={{ asset('uploads/gallery/' . $object->url) }} />
                            @else
                                <video style="background:thistle;max-height: 150px;" class="card-img-top img-fluid"
                                    controls>
                                    <source src="{{ asset('uploads/gallery/' . $object->url) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                        </div>
                    @endif

                </div>

            </div>

            <div class="card-footer">
                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('footerScript')
    <script src="{{ asset('assets/adminlte/dist/js/cropper.min.js') }}"></script>
    <script>
        let cropper;
        let selectedFile;
        let cropDone = false; // track if crop finished
        $(document).ready(function() {
            $("#media").on("change", function(e) {
                $("#preview").html("");
                cropDone = false;
                let file = e.target.files[0];
                if (!file) return;

                let validExtensions = ["jpg", "jpeg", "png"];
                let fileExt = file.name.split(".").pop().toLowerCase();
                if ($.inArray(fileExt, validExtensions) === -1) {
                    alert("Only images (jpg, jpeg, png) are allowed.");
                    $(this).val("");
                    return;
                }

                selectedFile = file;

                // Check image dimensions
                let img = new Image();
                img.onload = function() {
                    if (img.width > 304 || img.height > 304) {
                        // Must crop
                        let reader = new FileReader();
                        reader.onload = function(event) {
                            $("#imageToCrop").attr("src", event.target.result);
                            $("#cropperModal").modal("show");
                        };
                        reader.readAsDataURL(file);
                    } else {
                        // Already small enough, accept directly
                        let reader = new FileReader();
                        reader.onload = function(event) {
                            $("#preview").html(
                                `<img src="${event.target.result}" class="m-2" width="150" style="border:1px solid #ddd; border-radius:8px;">`
                                );
                        };
                        reader.readAsDataURL(file);
                    }
                };
                img.src = URL.createObjectURL(file);
            });

            // Init cropper
            $('#cropperModal').on('shown.bs.modal', function() {
                cropper = new Cropper(document.getElementById('imageToCrop'), {
                    aspectRatio: 1,
                    viewMode: 1,
                    responsive: true,
                    zoomable: true
                });
            }).on('hidden.bs.modal', function() {
                cropper.destroy();
                cropper = null;

                // If user closed without cropping → reset input
                if (!cropDone) {
                    $("#media").val("");
                    $("#preview").html("");
                }
            });

            // Crop & save
            $("#cropImageBtn").on("click", function() {
                let canvas = cropper.getCroppedCanvas({
                    width: 304,
                    height: 304
                });

                canvas.toBlob(function(blob) {
                    cropDone = true; // mark as cropped
                    let fileInput = $("#media");
                    let file = new File([blob], selectedFile.name, {
                        type: "image/jpeg",
                        lastModified: new Date().getTime()
                    });

                    let dataTransfer = new DataTransfer();
                    dataTransfer.items.add(file);
                    fileInput[0].files = dataTransfer.files;

                    $("#preview").html(
                        `<img src="${canvas.toDataURL()}" class="m-2" width="150" style="border:1px solid #ddd; border-radius:8px;">`
                        );
                    $("#cropperModal").modal("hide");
                }, 'image/jpeg');
            });
            // Form validation before submit
            $("#galleryForm").on("submit", function() {
                let objectId = $("input[name='id']").val(); // get hidden id
                let fileCount = $("#media")[0].files.length;

                if ((objectId === "" || objectId === "0") && fileCount === 0) {
                    alert("Please select at least one file (image).");
                    return false;
                }
                return true;
            });
        });
    </script>
@endsection
