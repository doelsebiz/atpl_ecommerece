@extends('admin.layouts.main-layout')
@section('title','Edit Service')
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
                            Edit Service : {{ $data->name }}
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ url('admin/services/updateservice') }}">
                    @csrf
                    <input type="hidden" value="{{ $data->id }}" name="id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Name</label>
                                <input value="{{ $data->name }}" name="name" required type="text" id="emailfield" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Short Description</label>
                                <textarea class="form-control" name="short_description" rows="3">{{ $data->short_description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Bullet Points <small style="color:red;">(Seprated With Comma ",")</small> </label>
                                <textarea class="form-control" name="bullet_points" rows="3">{{ $data->bullet_points }}</textarea>
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
                                <textarea rows="10" class="summernote" name="description">{{ $data->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Show on Homepage</label>
                                <select class="form-control" name="homepage">
                                    <option @if($data->homepage == 2) selected @endif value="2">No</option>
                                    <option @if($data->homepage == 1) selected @endif value="1">Yes</option>
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