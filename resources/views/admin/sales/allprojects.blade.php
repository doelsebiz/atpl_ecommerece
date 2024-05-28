@extends('admin.layouts.main-layout')
@section('title','All Projects')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid mb-5">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
                <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                    <div class="d-flex align-items-center flex-wrap mr-1">
                        <div class="d-flex align-items-baseline flex-wrap mr-5">
                            <h5 class="text-dark font-weight-bold my-1 mr-5">Projects</h5>
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('admin/dashboard') }}" class="text-muted">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript::void(0)" class="text-muted">Manage Projects</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ url('admin/projects/allprojects') }}" class="text-muted">All Projects</a>
                                </li>
                                @if(isset($_GET['category_id']))
                                <li class="breadcrumb-item">
                                    <a href="javscript::void(0)" class="text-danger">Update Project : {{ DB::table('projects')->where('id' , $_GET['category_id'])->first()->name }}</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--begin::Card-->
            @include('alerts.index')
            <div class="row">
                <div class="col-md-7">
                    <div class="card card-custom mt-5">
                        <div class="card-header flex-wrap py-5">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Projects
                                    <div class="text-muted pt-2 font-size-sm">Manage Projects</div>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $r)
                                        <tr>                                
                                            <td>
                                                <img style="height:100px;width: 100px;" src="{{ url('public/images') }}/{{ $r->image }}" class="img-thumbnail">
                                            </td>
                                            <td class="text-center">
                                                {{ $r->name }}
                                            </td>
                                           <td class="text-center">
                                               <a class="btn btn-primary btn-sm" href="{{ url('admin/projects/allprojects') }}?category_id={{ $r->id }}"><i class="fa fa-edit"></i>Edit</a>
                                               <a  data-toggle="modal" data-target="#deleteModal{{ $r->id }}" href="javascript:;" title="Delete" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i>Delete</a>
                                           </td>
                                        </tr>
                                        <div class="modal fade" id="deleteModal{{ $r->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Are you Sure?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p style="color:red;">Are you Sure You want to delete this Project</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                                        <a href="{{ url('admin/projects/deleteproject') }}/{{ $r->id }}" class="btn btn-danger font-weight-bold">Yes, Delete it</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                            <div style="margin-top:10px;" class="row">
                                {!! $data->links('frontend.pagination') !!}
                            </div>
                        </div>
                    </div>
                </div>
                @if(isset($_GET['category_id']))
                <div class="col-md-5">
                    <div class="card card-custom mt-5">
                        <div class="card-header flex-wrap py-5">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Update Job Category
                                    <div class="text-muted pt-2 font-size-sm">Update Job Category</div>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{ url('admin/projects/updateproject') }}" id="editForm" method="POST">
                              @csrf
                              <input type="hidden" value="{{ $_GET['category_id'] }}" name="id">
                                <div class="mb-3">
                                  <label for="name" class="col-form-label text-secondary">Project Name</label>
                                  <input type="text" name="name" class="form-control" value="{{ DB::table('projects')->where('id' , $_GET['category_id'])->first()->name }}" required autofocus />
                                </div>
                                <div class="mb-3">
                                  <label for="name" class="col-form-label text-secondary">Project Image</label>
                                  <input type="file" name="image" class="form-control"  autofocus />
                                </div>
                                
                                <div class="mb-3">
                                  <label for="description" class="col-form-label text-secondary">Description</label>
                                  <textarea name="description" class="summernote">{{ DB::table('projects')->where('id' , $_GET['category_id'])->first()->description }}</textarea>
                                </div>
                                <button id="editBtn" type="submit" class="btn btn-primary">Update Project
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-md-5">
                    <div class="card card-custom mt-5">
                        <div class="card-header flex-wrap py-5">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Add New Project
                                    <div class="text-muted pt-2 font-size-sm">Add New Project</div>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{ url('admin/projects/createproject') }}" id="editForm" method="POST">
                              @csrf
                                <div class="mb-3">
                                  <label for="name" class="col-form-label text-secondary">Project Name</label>
                                  <input type="text" name="name" class="form-control" required autofocus />
                                </div>
                                <div class="mb-3">
                                  <label for="name" class="col-form-label text-secondary">Project Image</label>
                                  <input type="file" name="image" class="form-control" required autofocus />
                                </div>
                                
                                <div class="mb-3">
                                  <label for="description" class="col-form-label text-secondary">Description</label>
                                  <textarea name="description" class="summernote"></textarea>
                                </div>
                                <button id="editBtn" type="submit" class="btn btn-primary">Add Project
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection