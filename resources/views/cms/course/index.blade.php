@extends('cms.layouts.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Course List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    <div class="col-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Course List</h3>
            </div>
            <div class="table-responsive">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Is Active</th>
                                @if(auth()->user()->hasRole('admin'))
                                    <th>Added By</th>
                                @endif
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row"></div>
@endsection
@section('footerScript')
    <script>
        $(document).ready(function() {

            var table = $('#example1').DataTable({
                processing: true,
                serverSide: true,
                order: [],
                ajax: "{{ route('course.index') }}",
                columns: [
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'slug',
                        name: 'slug'
                    },
                    {
                        data: 'is_active',
                        name: 'is_active'
                    },
                    @if(auth()->user()->hasRole('admin'))
                        {
                            data: 'added_by',
                            name: 'added_by'
                    },@endif
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },

                ]
            });
        });
    </script>
@endsection
