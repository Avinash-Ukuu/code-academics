@extends('cms.layouts.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Gallery Category</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    <div class="col-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Gallery Category</h3>
                <div class="card-tools"><a href="{{ route('gallery-category.create') }}"><span class="btn btn-sm btn-info">Add
                &nbsp;<span class="fa fa-plus"></span></span></a></div>
            </div>
            <div class="table-responsive">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>description</th>
                                @can('admin', new App\Models\User())
                                    <th>Action</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleryCategories as $galleryCategory)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $galleryCategory->name }}</td>
                                    <td>{{ $galleryCategory->slug }}</td>
                                    <td>{{ $galleryCategory->description }}</td>
                                    @can('admin', new App\Models\User())
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('gallery-category.edit', ['gallery_category' => $galleryCategory->id]) }}"><i
                                                        class="fa fa-edit"></i></a>
                                                @can('superAdmin', new App\Models\User())
                                                    <form action="{{ route('gallery-category.destroy', ['gallery_category' => $galleryCategory->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('Delete')
                                                        <button type="button" onclick="confirmBox(this)"
                                                            style="border: 0px;background-color:transparent;"><i
                                                                class="fa fa-trash text-red"></i></button>
                                                    </form>
                                                @endcan
                                            </div>
                                        </td>
                                    @endcan
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
