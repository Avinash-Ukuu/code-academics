@extends('cms.layouts.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('course.index') }}">Course List</a></li>
                        <li class="breadcrumb-item active">Course Form</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Course Form</h3>
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

                    <div class="form-check col-6">
                        <input id="is_active" class="form-check-input" type="checkbox" name="is_active"
                            value="1" @if ($object->is_active == 1) checked @endif>
                        <label for="is_active" class="form-check-label">Is Active</label>
                    </div>
                </div>

                <div id="durationContainer">
                    <h5>Course Durations <button type="button" class="btn btn-success btn-sm" id="addDuration">+ Add
                            Duration</button></h5>

                    @php $index = 0; @endphp
                    @if (!empty($object->id))
                        @foreach ($object->durations as $duration)
                            <div class="row duration-group">
                                <div class="form-group col-4">
                                    {{ Form::label("durations[$index][duration]", 'Duration (in months)') }}<span style="color: red;"> *</span>
                                    {{ Form::number("durations[$index][duration]", $duration->duration, ['class' => 'form-control duration', 'placeholder' => 'Enter Duration', 'required', 'min' => '1']) }}
                                </div>
                                <div class="form-group col-4">
                                    {{ Form::label("durations[$index][mrp]", 'MRP') }}<span style="color: red;"> *</span>
                                    {{ Form::number("durations[$index][mrp]", $duration->mrp, ['class' => 'form-control mrp', 'placeholder' => 'Enter MRP', 'required', 'min' => '0']) }}
                                </div>
                                <div class="form-group col-3">
                                    {{ Form::label("durations[$index][fix_price]", 'Sale Price') }}<span style="color: red;"> *</span>
                                    {{ Form::number("durations[$index][fix_price]", $duration->fix_price, ['class' => 'form-control fix_price', 'placeholder' => 'Enter Sale Price', 'required', 'min' => '0']) }}
                                </div>
                                <div class="form-group col-1">
                                    <button type="button" class="btn btn-danger removeDuration">X</button>
                                </div>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    @else
                        <div class="row duration-group">
                            <div class="form-group col-4">
                                {{ Form::label("durations[0][duration]", 'Duration (in months)') }}<span style="color: red;"> *</span>
                                {{ Form::number("durations[0][duration]", null, ['class' => 'form-control duration', 'placeholder' => 'Enter Duration', 'required', 'min' => '1']) }}
                            </div>
                            <div class="form-group col-4">
                                {{ Form::label("durations[0][mrp]", 'MRP') }}<span style="color: red;"> *</span>
                                {{ Form::number("durations[0][mrp]", null, ['class' => 'form-control mrp', 'placeholder' => 'Enter MRP', 'required', 'min' => '0']) }}
                            </div>
                            <div class="form-group col-3">
                                {{ Form::label("durations[0][fix_price]", 'Sale Price') }}<span style="color: red;"> *</span>
                                {{ Form::number("durations[0][fix_price]", null, ['class' => 'form-control fix_price', 'placeholder' => 'Enter Sale Price', 'required', 'min' => '0']) }}
                            </div>
                            <div class="form-group col-1">
                                <button type="button" class="btn btn-danger removeDuration">X</button>
                            </div>
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
            let index = {{ $index ?? 1 }};
            $("#addDuration").click(function() {
                $("#durationContainer").append(`
                    <div class="row duration-group">
                        <div class="form-group col-4">
                            <input type="number" name="durations[${index}][duration]" class="form-control duration" placeholder="Enter Duration" required min="1">
                        </div>
                        <div class="form-group col-4">
                            <input type="number" name="durations[${index}][mrp]" class="form-control mrp" placeholder="Enter MRP" required min="0">
                        </div>
                        <div class="form-group col-3">
                            <input type="number" name="durations[${index}][fix_price]" class="form-control fix_price" placeholder="Enter Sale Price" required min="0">
                        </div>
                        <div class="form-group col-1">
                            <button type="button" class="btn btn-danger removeDuration">X</button>
                        </div>
                    </div>
                `);
                index++;
            });

            $(document).on("click", ".removeDuration", function() {
                $(this).closest(".duration-group").remove();
            });

            $(document).on("change", ".duration, .mrp, .fix_price", function() {
                let durations = [];
                let valid = true;

                $(".duration-group").each(function() {
                    let duration = $(this).find(".duration").val();
                    let mrp = parseFloat($(this).find(".mrp").val()) || 0;
                    let fix_price = $(this).find(".fix_price").val();

                    if (durations.includes(duration)) {
                        alert("Duplicate duration values are not allowed.");
                        $(this).find(".duration").val('');
                        valid = false;
                    } else {
                        durations.push(duration);
                    }

                    if (fix_price !== "") {
                        fix_price = parseFloat(fix_price);
                        if (fix_price >= mrp) {
                            alert("Sale price must be less than MRP.");
                            $(this).find(".fix_price").val('');
                            valid = false;
                        }
                    }
                });

                return valid;
            });
        });
    </script>
@endsection
