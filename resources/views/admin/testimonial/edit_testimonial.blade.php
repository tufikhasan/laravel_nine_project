@extends('admin.admin_master')
@section('site_title')
    Edit Testimonial | Devland
@endsection
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Testimonial</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Devland</a></li>
                                <li class="breadcrumb-item active">Edit Testimonial</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form id="myForm" class="card-body" method="POST"
                            action="{{ route('update.testimonial', $testimonal->id) }}">
                            @csrf
                            @method('patch')
                            <p class="card-title-desc">Edit Testimonial from here</p>
                            <div class="row mb-3">
                                <label for="user" class="col-sm-2 col-form-label">Testimonial User</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="user" name="user"
                                        value="{{ old('user', $testimonal->user ?? '') }}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="feedback" class="col-sm-2 col-form-label">Users Feedback</label>
                                <div class="col-sm-10">
                                    <textarea id="feedback" name="feedback" class="form-control" maxlength="225" rows="3">{{ old('user', $testimonal->feedback ?? '') }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <button type="submit" class="btn btn-info waves-effect waves-light px-4 rounded mt-3">Update
                                Testimonial</button>
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
                    user: 'required',
                    feedback: 'required',
                },
                messages: {
                    user: 'Please enter user name',
                    feedback: 'Please enter user feedback',
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
