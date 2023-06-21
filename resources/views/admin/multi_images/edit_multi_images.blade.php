@extends('admin.admin_master')
@section('site_title')
    Edit Multi Image | Devland
@endsection
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Image</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                                <li class="breadcrumb-item active">Edit Image</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form class="card-body" method="post"
                            action="{{ route('update.multi.image', $editMultiImage->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Image Type</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Multi Image Select Type" name="image_type">
                                        <option value="default"
                                            {{ old('image_type', isset($editMultiImage->image_type) && $editMultiImage->image_type == 'default' ? 'selected' : '') }}>
                                            Select Image type</option>
                                        <option value="about"
                                            {{ old('image_type', isset($editMultiImage->image_type) && $editMultiImage->image_type == 'about' ? 'selected' : '') }}>
                                            About
                                        </option>
                                        <option value="partners"
                                            {{ old('image_type', isset($editMultiImage->image_type) && $editMultiImage->image_type == 'partners' ? 'selected' : '') }}>
                                            Partners
                                        </option>
                                        <option value="testimonial"
                                            {{ old('image_type', isset($editMultiImage->image_type) && $editMultiImage->image_type == 'testimonial' ? 'selected' : '') }}>
                                            Testimonial
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="p_image" class="col-sm-2 col-form-label">Update image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="p_image" name="image">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img class="rounded avatar-lg" src="{{ url('upload/multi/' . $editMultiImage->image) }}"
                                        alt="Update Images" id="showImage">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info waves-effect waves-light px-4 rounded mt-3">Update
                                image</button>
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
