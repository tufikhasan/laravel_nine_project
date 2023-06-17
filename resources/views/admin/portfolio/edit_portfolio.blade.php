@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Portfolio</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                                <li class="breadcrumb-item active">Edit Portfolio</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form class="card-body" method="POST" action="{{ route('update.portfolio', $portfolio->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <p class="card-title-desc">Edit portfolio from here</p>
                            <div class="row mb-3">
                                <label for="title_info" class="col-sm-2 col-form-label">Protfolio Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="title_info" name="portfolio_name"
                                        value="{{ old('portfolio_name', $portfolio->portfolio_name ?? '') }}">
                                    @error('portfolio_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Protfolio Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="title"
                                        name="portfolio_title"value="{{ old('portfolio_title', $portfolio->portfolio_title ?? '') }}">
                                    @error('portfolio_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="elm1" class="col-sm-2 col-form-label">Protfolio Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="portfolio_description">{{ old('portfolio_description', $portfolio->portfolio_description ?? '') }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="portfolio_link" class="col-sm-2 col-form-label">Protfolio link</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="url" id="portfolio_link" name="portfolio_link"
                                        value="{{ old('portfolio_link', $portfolio->portfolio_link ?? '') }}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="portfolio_image" class="col-sm-2 col-form-label">Protfolio Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="portfolio_image" name="portfolio_image">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img class="rounded avatar-lg"
                                        src="{{ !empty($portfolio->portfolio_image) ? url('upload/portfolio/' . $portfolio->portfolio_image) : url('upload/no_image.jpg') }}"
                                        alt="Protfolio Image" id="showAboutImage">
                                </div>
                            </div>
                            <!-- end row -->
                            <button type="submit" class="btn btn-info waves-effect waves-light px-4 rounded mt-3">Update
                                Portfolio</button>
                        </form>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#portfolio_image").change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showAboutImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
