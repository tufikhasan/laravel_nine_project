@extends('admin.admin_master')
@section('site_title')
    Add New Blog | Devland
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
                        <h4 class="mb-sm-0">Add New Blog</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Devland</a></li>
                                <li class="breadcrumb-item active">Add New Blog</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form class="card-body" method="POST" action="{{ route('store.blog') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <p class="card-title-desc">Add New Blog from here</p>
                            <div class="row mb-3">
                                <label for="blog_title" class="col-sm-2 col-form-label">Blog Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="blog_title" name="blog_title"
                                        value="{{ old('blog_title', $blog_title ?? '') }}">
                                    @error('blog_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Blog Category</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Blog Category select" name="blog_category_id">
                                        <option>Open this select menu</option>
                                        @foreach ($blogCategories as $category)
                                            <option value={{ $category->id }}
                                                {{ old('blog_category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->blog_category }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="blog_tags" class="col-sm-2 col-form-label">Blog Tags</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="blog_tags" name="blog_tags"
                                        value="{{ old('blog_tags', $blog_tags ?? 'laravel,vue') }}" data-role="tagsinput">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="elm1" class="col-sm-2 col-form-label">Blog Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="blog_description">{{ old('blog_description', $blog_description ?? '') }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="blog_image" class="col-sm-2 col-form-label">Blog Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="blog_image" name="blog_image">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}"
                                        alt="Protfolio Image" id="showAboutImage">
                                </div>
                            </div>
                            <!-- end row -->
                            <button type="submit" class="btn btn-info waves-effect waves-light px-4 rounded mt-3">Add new
                                Blog</button>
                        </form>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#blog_image").change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showAboutImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
