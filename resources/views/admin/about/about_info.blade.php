@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">About Page</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                                <li class="breadcrumb-item active">About Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form class="card-body" method="POST" action="{{ route('update.about', $aboutData->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <p class="card-title-desc">Update your about page information.</p>
                            <div class="row mb-3">
                                <label for="title_info" class="col-sm-2 col-form-label">Title Info</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="title_info" name="title_info"
                                        value="{{ $aboutData->title_info }}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="title" name="title"
                                        value="{{ $aboutData->title }}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="short_title" class="col-sm-2 col-form-label">Short Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="short_title" name="short_title"
                                        value="{{ $aboutData->short_title }}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="short_desc" class="col-sm-2 col-form-label">Short Description</label>
                                <div class="col-sm-10">
                                    <textarea id="short_desc" name="short_desc" class="form-control" maxlength="225" rows="3"
                                        placeholder="This textarea has a limit of 225 chars.">{{ $aboutData->short_desc }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="elm1" class="col-sm-2 col-form-label">Long Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="long_desc">{{ $aboutData->short_desc }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="about_image" class="col-sm-2 col-form-label">About Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="about_image" name="about_image">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img class="rounded avatar-lg"
                                        src="{{ !empty($aboutData->about_image) ? url('upload/about/' . $aboutData->about_image) : url('upload/no_image.jpg') }}"
                                        alt="{{ $aboutData->about_image }}" id="showAboutImage">
                                </div>
                            </div>
                            <!-- end row -->
                            <button type="submit" class="btn btn-info waves-effect waves-light px-4 rounded mt-3">Update
                                About Info</button>
                        </form>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#about_image").change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showAboutImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
