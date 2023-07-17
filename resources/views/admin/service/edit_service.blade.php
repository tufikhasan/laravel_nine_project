@extends('admin.admin_master')
@section('site_title')
    Add New Service | Devland
@endsection
@section('admin')
    <style type="text/css">
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #00808e;
            font-weight: 700px;
        }
    </style>
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add New Service</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Devland</a></li>
                                <li class="breadcrumb-item active">Add New Service</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form id="addServiceForm" class="card-body" method="POST"
                            action="{{ route('update.service', $service->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <p class="card-title-desc">Add New Service from here</p>
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="title" name="title"
                                        value="{{ old('title', $service->title ?? '') }}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="description" name="description">{{ old('description', $service->description ?? '') }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="service_list" class="col-sm-2 col-form-label">Service List</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="service_list" name="service_list"
                                        value="{{ old('service_list', $service->service_list ?? 'User Research & Testing,UX Design,Visual Design,Information Architecture') }}"
                                        data-role="tagsinput">
                                </div>
                            </div>
                            <!-- end row -->
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="icon" name="icon">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img class="rounded avatar-lg"
                                        src="{{ !empty($service->icon) ? url('upload/service/' . $service->icon) : url('upload/no_image.jpg') }}"
                                        id="showIconImage">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="image" name="image">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img class="rounded avatar-lg"
                                        src="{{ !empty($service->image) ? url('upload/service/' . $service->image) : url('upload/no_image.jpg') }}"
                                        id="showServiceImage">
                                </div>
                            </div>
                            <!-- end row -->
                            <button type="submit" class="btn btn-info waves-effect waves-light px-4 rounded mt-3">Update
                                Service</button>
                        </form>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            //icon image preview
            $("#icon").change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showIconImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            //image preview
            $("#image").change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showServiceImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            //form validation
            $('#addServiceForm').validate({
                rules: {
                    title: 'required',
                    description: 'required',
                },
                messages: {
                    title: 'Please enter title',
                    description: 'Please enter description',
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    error.insertAfter(element);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid').removeClass('is-valid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid').addClass('is-valid');
                }
            });
        });
    </script>
@endsection
