@extends('cms.layouts.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quiz Question List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    <div class="col-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Quiz Question List</h3>
                <div class="card-tools"><a href="{{ route('quiz-questions.create') }}"><span class="btn btn-sm btn-info">Add
                    &nbsp;<span class="fa fa-plus"></span></span></a></div>
            </div>
            <div class="table-responsive">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Question Sub Category</th>
                                <th>Difficulty Level</th>
                                <th>Question</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($questions as $quizQuestion)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $quizQuestion->subCategory->name ?? 'N/A' }}</td>
                                    <td>{{ $quizQuestion->difficulty_level }}</td>
                                    <td>{{ $quizQuestion->question }}</td>
                                    <td>
                                        <div class="row">
                                            <a href="{{ route('quiz-questions.edit', ['quiz_question' => $quizQuestion->id]) }}"><i
                                                    class="fa fa-edit"></i></a>
                                            {{-- <form action="{{ route('quiz-questions.destroy', ['quiz_question' => $quizQuestion->id]) }}"
                                                method="post">
                                                @csrf
                                                @method('Delete')
                                                <button type="button" onclick="confirmBox(this)"
                                                    style="border: 0px;background-color:transparent;"><i
                                                        class="fa fa-trash text-red"></i></button>
                                            </form> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footerScript')
    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
        });
    </script>
@endsection
