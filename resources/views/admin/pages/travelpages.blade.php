@extends('admin.layouts.main-layout')
@section('title','Manage Super Visa')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            <div class="row">
                <div class="col-md-12">
                    @include('alerts.index')
                   <div class="card  my-4">
                    <form enctype="multipart/form-data" action="{{ url('admin/pages/updatedynamicpage') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $data->id }}" name="id">
                       <!-- navigation in .card-header -->
                       <div class="card-header">
                         <ul class="nav nav-tabs card-header-tabs">
                              <li class="nav-item">
                               <a class="nav-link active" data-toggle="tab" href="#tab1">General</a>
                             </li>
                             <li class="nav-item">
                               <a class="nav-link" data-toggle="tab" href="#tab11">Blogs</a>
                             </li>
                             <li class="nav-item">
                               <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                             </li>
                           </ul>
                       </div>
                       <!-- .card-body.tab-content  -->
                       <div class="card-body tab-content">
                         @include('admin.pages.tabone')
                         @include('admin.pages.tabsix')
                         @include('admin.pages.tabeleven')
                          </div><!--/.card-body -->
                          <div class="card-footer">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary"  value="Update">
                                </div>
                            </div>
                          
                      </form>
                      </div>
                      </div><!--/.card-->
                </div>                
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!-- modal section 3 -->
<!-- card 1 -->
@endsection