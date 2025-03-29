@extends('cms.layouts.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog List</a></li>
                        <li class="breadcrumb-item active">Blog Form</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Blog Form</h3>
            </div>

            {!! Form::model($object, [
                'method' => $method,
                'url' => $url,
                'onSubmit' => "document.getElementById('submit').disabled=true;",
                'files' => true,
            ]) !!}
            <div class="card-body">

                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}<span style="color: red;"> *</span>
                    {!! Form::text('title', null, ['class' => 'form-control title', 'placeholder' => 'Enter Title', 'required']) !!}
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        {!! Form::label('description', 'Description') !!}<span style="color: red;"> *</span>
                        {!! Form::textArea('description', null, ['class' => 'form-control description', 'placeholder' => 'Enter Description', 'required']) !!}
                    </div>
                    <div class="form-group col-6">
                        {!! Form::label('meta_keywords', 'Meta Keywords') !!}<span style="color: red;"> *</span>
                        {!! Form::textArea('meta_keywords', null, ['class' => 'form-control meta_keywords', 'placeholder' => 'Enter Meta Keywords', 'required']) !!}
                    </div>
                </div>

                <div class="form-group ">
                    {!! Form::label('content', 'Content') !!}<span style="color: red;"> *</span>
                    {!! Form::textArea('content', null, [
                        'class' => 'form-control content',
                        'placeholder' => 'Enter Content',
                        'required',"id"=>"summernote"
                    ]) !!}
                </div>


                <div class="form-group" id="image">
                    {{ Form::label('image', 'Image') }}
                    {{ Form::file('image', ['class' => 'file-upload-default','id'=>'blogImage', 'accept' => 'image/jpg, image/jpeg, image/png']) }}
                    
                    <div class="row">
                        <div class="file-preview mb-2 mt-2 mr-2 ml-2" id="blog_preview"></div>
                        <div class="image-preview mt-2  ml-2">
                            @if (!empty($object->image) && file_exists("uploads/blogs/" . $object->image))
                            {{ Form::label('image', 'Image',['class'=>'mr-2']) }}
                                <img style="background:thistle;max-height: 150px;"
                                    src={{ asset('uploads/blogs/' . $object->image) }} />
                            @endif
                        </div>
                    </div>
                </div>

                @if (!empty($object->id))
                    <div class="form-group ">
                        {!! Form::label('publish_type', 'Publish Type') !!}
                        {!! Form::select('publish_type', ['unpublish' => 'Unpublish', 'publish' => 'Publish'], $object->publish_type ?? null, [
                                'class' => 'form-control',
                                'required',
                                'placeholder' => 'Select Publish Type',
                            ]) !!}
                    </div>
                @endif



            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-md-6 text-right">
                        <div>
                            <span class="text-danger"><b>Note:-</b></span>
                            <span> <b>*</b> Fields are Required</span>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('footerScript')
    <script>
       $(document).ready(function() {
            $('#blogImage').on('change', function() {
                validateFile(this, ['image/jpeg', 'image/jpg'], 2 * 1024 * 1024, '#blog_preview');
            });

            function updateFileLabel(input, previewElement) {
                var fileName = $(input).val().split('\\').pop();
                $(input).next('.file-upload-default').html(fileName);

                var file = input.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var previewHtml = '';
                        if (file.type.startsWith('image')) {
                            previewHtml = '<label>Preview:</label><img style="background:thistle;max-height: 150px;" src="' + e.target.result + '" class="img-fluid">';
                        }
                        $(previewElement).html(previewHtml);
                    };
                    reader.readAsDataURL(file);
                } else {
                    $(previewElement).html('');
                }
            }

            function validateFile(input, allowedTypes, maxSize, previewElement) {
                var file = input.files[0];
                if (file) {
                    var fileType = file.type;
                    var fileSize = file.size;
                    var isValidType = allowedTypes.includes(fileType);
                    var isValidSize = fileSize <= maxSize;

                    if (!isValidType) {
                        alert('Invalid file type. Please select a valid file.');
                        $(input).val('');
                        $(input).next('.file-upload-default').html('Choose file');
                        $(previewElement).html('');
                        return false;
                    }

                    if (!isValidSize) {
                        alert('File size exceeds 2 MB. Please select a smaller file.');
                        $(input).val('');
                        $(input).next('.file-upload-default').html('Choose file');
                        $(previewElement).html('');
                        return false;
                    }

                    updateFileLabel(input, previewElement);
                    return true;
                }
                return false;
            }
        });
    </script>
@endsection
