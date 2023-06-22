@extends('admin.admin_master')
@section('site_title')
    Add New Skill | Devland
@endsection
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add New Skill</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Devland</a></li>
                                <li class="breadcrumb-item active">Add New Skill</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form id="myForm" class="card-body" method="POST" action="{{ route('store.skill') }}">
                            @csrf
                            <p class="card-title-desc">Add New Skill from here</p>
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Skill name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="title" name="title"
                                        value="{{ old('title', $title ?? '') }}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="percentage" class="col-sm-2 col-form-label">Percentage</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" maxlength="3" id="percentage"
                                        placeholder="Max length 3" name="percentage"
                                        value="{{ old('percentage', $percentage ?? '') }}">
                                </div>
                            </div>
                            <!-- end row -->
                            <button type="submit" class="btn btn-info waves-effect waves-light px-4 rounded mt-3">Add new
                                Skill</button>
                        </form>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    title: 'required',
                    percentage: 'required',
                },
                messages: {
                    title: 'Please enter skill name',
                    percentage: 'Please enter your skill percentage',
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
