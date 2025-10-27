@extends('cms.layouts.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('quiz-questions.index') }}">Quiz Question List</a></li>
                        <li class="breadcrumb-item active">Quiz Question Form</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quiz Question Form</h3>
                <div class="card-tools"><span class="text-danger"><b>Note:-</b> </span><b>*</b> Fields are Required</div>
            </div>

            {!! Form::model($object,['method'=>$method, 'url'=>$url,  'onSubmit' => "document.getElementById('submit').disabled=true;"]) !!}
                <input type="hidden" name="id" value="{{ $object->id }}">
                <div class="card-body">
                    <div class="row ml-0"><b>Note :- </b>&nbsp;<p class="text-danger">Name field should only contain
                            alphabetical characters.</p>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            {{ Form::label('quiz_subcategory_id', 'Select Quiz Sub Category', []) }}<span style="color: red;"> *</span>
                            {{ Form::select('quiz_subcategory_id',$quizSubCategories, $object->subCategory->id ?? null, ['class' => 'form-control select2','placeholder' => 'Select Quiz Sub Category', 'data-placeholder' => 'Select Quiz Sub Category','required']) }}
                        </div>
                        <div class="form-group col-6">
                            {{ Form::label('difficulty_level', 'Select Difficulty Level', []) }}<span style="color: red;"> *</span>
                            {{ Form::select('difficulty_level',$difficultyLevels, $object->difficulty_level ?? null, ['class' => 'form-control select2','placeholder' => 'Select Difficulty Level', 'data-placeholder' => 'Select Difficulty Level','required']) }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12">
                            {{ Form::label('question', 'Question', []) }}<span style="color: red;"> *</span>
                            {{ Form::text('question', null, ['class' => 'form-control question', 'placeholder' => 'Enter question', 'required']) }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            {{ Form::label('option_a', 'Option A', []) }}<span style="color: red;"> *</span>
                            {{ Form::text('option_a', null, ['class' => 'form-control question', 'placeholder' => 'Enter Option A', 'required']) }}
                        </div>
                        <div class="form-group col-6">
                            {{ Form::label('option_b', 'Option B', []) }}<span style="color: red;"> *</span>
                            {{ Form::text('option_b', null, ['class' => 'form-control question', 'placeholder' => 'Enter Option B', 'required']) }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            {{ Form::label('option_c', 'Option C', []) }}<span style="color: red;"> *</span>
                            {{ Form::text('option_c', null, ['class' => 'form-control question', 'placeholder' => 'Enter Option C', 'required']) }}
                        </div>
                        <div class="form-group col-6">
                            {{ Form::label('option_d', 'Option D', []) }}<span style="color: red;"> *</span>
                            {{ Form::text('option_d', null, ['class' => 'form-control question', 'placeholder' => 'Enter Option D', 'required']) }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            {{ Form::label('correct_option', 'Select Correct Option', []) }}<span style="color: red;"> *</span>
                            {{ Form::select('correct_option',['a'=>'A','b'=>'B','c'=>'C','d'=>'D'], $object->correct_option ?? null, ['class' => 'form-control select2','placeholder' => 'Select Correct Option', 'data-placeholder' => 'Select Correct Option','required']) }}
                        </div>

                        <div class="form-group col-6">
                            {{ Form::label('explanation', 'Explanation', []) }}<span style="color: red;"> *</span>
                            {{ Form::text('explanation', null, ['class' => 'form-control','placeholder' => 'Enter Explanation','required']) }}
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

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
           

        });
    </script>
@endsection
