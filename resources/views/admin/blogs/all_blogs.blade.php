@extends('admin.admin_master')
@section('site_title')
    Blogs | Devland
@endsection
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Blogs</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                                <li class="breadcrumb-item active">All Blogs</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>SL NO:</th>
                                        <th>Blog Category Id</th>
                                        <th>Blog Title</th>
                                        <th>Blog tags</th>
                                        <th>Blog image</th>
                                        <th>Blog Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $key => $value)
                                        <tr>
                                            <td style="width: 20px">{{ $key + 1 }}
                                            </td>
                                            <td>{{ $value['categoryFun']['blog_category'] }}</td>
                                            <td>{{ $value->blog_title }}</td>
                                            <td>{{ $value->blog_tags }}</td>
                                            <td><img src="{{ !empty($value->blog_image) ? url('upload/blog/' . $value->blog_image) : url('upload/no_image.jpg') }}"
                                                    alt="{{ $key }}" class="rounded avatar-sm"></td>
                                            <td>{!! $value->portfolio_description !!}</td>
                                            <td>
                                                <a href="{{ route('edit.blog', $value->id) }}"
                                                    class="btn btn-info sm waves-effect waves-light mr-2"
                                                    title="Edit Blog"><i class="fas fa-edit"></i></a>
                                                <a id="delete_data_alert" href="{{ route('delete.blog', $value->id) }}"
                                                    class="btn btn-danger sm waves-effect waves-light mr-2"
                                                    title="Delete Blog"><i class=" fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
@endsection
