@extends('admin.admin_master')
@section('site_title')
    Home Banner | Devland
@endsection
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Home Slide</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Devland</a></li>
                                <li class="breadcrumb-item active">Home Slide</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form class="card-body" method="POST" action="{{ route('update.slide', $homeSlide->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <p class="card-title-desc">Update your home slides information</p>
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="title" name="title"
                                        value="{{ $homeSlide->title }}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="short_title" class="col-sm-2 col-form-label">Short title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="short_title" name="short_title"
                                        value="{{ $homeSlide->short_title }}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="video_url" class="col-sm-2 col-form-label">Video URL</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="video_url" name="video_url"
                                        value="{{ $homeSlide->video_url }}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="p_image" class="col-sm-2 col-form-label">Home Slide</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="p_image" name="home_slide">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img class="rounded avatar-lg"
                                        src="{{ !empty($homeSlide->home_slide) ? url('upload/home_slide/' . $homeSlide->home_slide) : url('upload/no_image.jpg') }}"
                                        alt="{{ $homeSlide->title }}" id="showImage">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info waves-effect waves-light px-4 rounded mt-3">Update
                                Home
                                Slide</button>
                        </form>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#p_image").change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
