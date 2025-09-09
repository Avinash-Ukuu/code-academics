@extends('cms.layouts.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('gallery-category.index') }}">Gallery Category List</a></li>
                        <li class="breadcrumb-item active">Gallery Category Form</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Gallery Category Form</h3>
            </div>

            {!! Form::model($object, [
                'method' => $method,
                'url' => $url,
                'onSubmit' => "document.getElementById('submit').disabled=true;",
                'files' => true,
            ]) !!}
            <input type="hidden" name="id" value="{{ $object->id ?? '' }}">
            <div class="card-body">
                <div class="row ml-0"><b>Note :- </b>&nbsp;<p class="text-danger">Name field should only contain
                        alphabetical characters.</p>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        {{ Form::label('name', 'Name', []) }}<span style="color: red;"> *</span>
                        {{ Form::text('name', null, ['class' => 'form-control name', 'placeholder' => 'Enter Name', 'required']) }}
                    </div>
                    <div class="form-group col-6">
                        {!! Form::label('description', 'Description') !!}<span style="color: red;"> *</span>
                        {!! Form::textArea('description', null, [
                            'class' => 'form-control description',
                            'placeholder' => 'Enter Description'
                        ]) !!}
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
