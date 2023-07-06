@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action=" {{ route('update.footer') }} ">
                            @csrf

                            <input type="hidden" name="id" value="{{ $allfooter->id }}">
                            <h4 class="card-title">Footer Page</h4>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Number</label>
                                <div class="col-sm-10">
                                    <input name="number" class="form-control" value="{{ $allfooter->number }}" type="text" id="example-text-input">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                                <div class="col-sm-10">
                                    <textarea required="" name="short_description" class="form-control" rows="5">{{$allfooter->short_description}}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input name="address" class="form-control" value="{{ $allfooter->address }}" type="text" id="example-text-input">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" class="form-control" value="{{ $allfooter->email }}" type="email" id="example-text-input">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-10">
                                    <input name="facebook" class="form-control" value="{{ $allfooter->facebook }}" type="text" id="example-text-input">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                    <input name="twitter" class="form-control" value="{{ $allfooter->twitter }}" type="text" id="example-text-input">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Copyright</label>
                                <div class="col-sm-10">
                                    <input name="copyright" class="form-control" value="{{ $allfooter->copyright }}" type="text" id="example-text-input">
                                </div>
                            </div>


                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Footer Page">
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>


    </div>
</div>


@endsection