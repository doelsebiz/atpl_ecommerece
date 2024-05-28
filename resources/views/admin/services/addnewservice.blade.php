@extends('admin.layouts.main-layout')
@section('title','Add Service')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Card-->
            @include('alerts.index')
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add Service
                            <div class="text-muted pt-2 font-size-sm">Add Service</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ url('admin/services/addnewservices') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Name</label>
                                <input name="name" required type="text" id="emailfield" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Short Description</label>
                                <textarea class="form-control" name="short_description" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Bullet Points <small style="color:red;">(Seprated With Comma ",")</small> </label>
                                <textarea class="form-control" name="bullet_points" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Main Image</label>
                                <input name="main_image" type="file" id="emailfield" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Second Image</label>
                                <input name="second_image" type="file" id="emailfield" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Description</label>
                                <textarea rows="10" class="summernote" name="description"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Show on Homepage</label>
                                <select class="form-control" name="homepage">
                                    <option value="2">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
                </form>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection