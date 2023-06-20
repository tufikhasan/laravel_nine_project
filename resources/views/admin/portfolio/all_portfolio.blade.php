@extends('admin.admin_master')
@section('site_title')
    Portfolios | Devland
@endsection
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Portfolios</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                                <li class="breadcrumb-item active">All Portfolios</li>
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
                                        <th>Portfolio Name</th>
                                        <th>Portfolio Title</th>
                                        <th>Portfolio Description</th>
                                        <th>Portfolio link</th>
                                        <th>Portfolio image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($portfolios as $key => $value)
                                        <tr>
                                            <td style="width: 20px">{{ $key + 1 }}
                                            </td>
                                            <td>{{ $value->portfolio_name }}</td>
                                            <td>{{ $value->portfolio_title }}</td>
                                            <td>{!! $value->portfolio_description !!}</td>
                                            <td>{{ $value->portfolio_link }}</td>
                                            <td><img src="{{ !empty($value->portfolio_image) ? url('upload/portfolio/' . $value->portfolio_image) : url('upload/no_image.jpg') }}"
                                                    alt="{{ $key }}" class="rounded avatar-sm"></td>
                                            <td>
                                                <a href="{{ route('edit.portfolio', $value->id) }}"
                                                    class="btn btn-info sm waves-effect waves-light mr-2"
                                                    title="Edit Portfolio"><i class="fas fa-edit"></i></a>
                                                <a id="delete_data_alert" href="{{ route('delete.portfolio', $value->id) }}"
                                                    class="btn btn-danger sm waves-effect waves-light mr-2"
                                                    title="Delete Portfolio"><i class=" fas fa-trash-alt"></i></a>

                                                {{-- <form action="{{ route('delete.portfolio', $value->id) }}" method="POST"
                                                    style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" id="delete_data_alert"
                                                        class="btn btn-danger sm waves-effect waves-light mr-2"
                                                        title="Delete Image">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form> --}}
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
