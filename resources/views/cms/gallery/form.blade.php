@extends('cms.layouts.master')
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
                'id'=>'galleryForm'
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

                    @if (empty($object->url))
                        <div class="form-group">
                            {!! Form::label('media', 'Upload Image/Video') !!}
                            {!! Form::file('media[]', [
                                'class' => 'form-control-file',
                                'id' => 'media',
                                'multiple',
                                'accept' => '.jpg,.jpeg,.png,.mp4,.mov',
                            ]) !!}
                            <small class="form-text text-muted">
                                Allowed types: jpg, jpeg, png, mp4, mov
                            </small>
                        </div>
                    @else
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
                    @endif



                    <div class="form-group" id="preview"></div>

                    @if (!empty($object->url) && file_exists("uploads/gallery/" . $object->url))
                        <div class="image-preview mt-2  ml-2">
                            {{ Form::label('image', 'Uploaded Image',['class'=>'mr-2']) }}
                                <img style="background:thistle;max-height: 150px;"
                                    src={{ asset('uploads/gallery/' . $object->url) }} />
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
    <script>
        $(document).ready(function() {
            $("#media").on("change", function(e) {
                $("#preview").html(""); // clear old previews
                let validExtensions = ["jpg", "jpeg", "png", "mp4", "mov"];
                let files = e.target.files;
                let isValid = true;

                $.each(files, function(i, file) {
                    let fileExt = file.name.split(".").pop().toLowerCase();
                    if ($.inArray(fileExt, validExtensions) === -1) {
                        alert("Invalid file type: " + file.name);
                        isValid = false;
                        return false; // stop loop
                    }

                    // Preview for images
                    if (file.type.match("image.*")) {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            $("#preview").append(
                                `<img src="${e.target.result}" class="m-2" width="150" style="border:1px solid #ddd; border-radius:8px;">`
                            );
                        };
                        reader.readAsDataURL(file);
                    }

                    // Preview for videos
                    if (file.type.match("video.*")) {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            $("#preview").append(
                                `<video width="250" class="m-2" controls>
                            <source src="${e.target.result}" type="${file.type}">
                            Your browser does not support the video tag.
                        </video>`
                            );
                        };
                        reader.readAsDataURL(file);
                    }
                });

                if (!isValid) {
                    $(this).val(""); // reset file input
                    $("#preview").html("");
                }
            });

            // Form validation before submit
            $("#galleryForm").on("submit", function() {
                if ($("#media")[0].files.length === 0) {
                    alert("Please select at least one file (image/video).");
                    return false;
                }
                return true;
            });
        });
    </script>
@endsection
