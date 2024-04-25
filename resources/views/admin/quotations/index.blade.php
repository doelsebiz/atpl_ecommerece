@extends('admin.layouts.main-layout')
@section('title','All Quotes')
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
                            All Quotes
                            <div class="text-muted pt-2 font-size-sm">Manage All Quotes</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-head-custom" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>                       
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phonenumber</th>
                                <th>Date</th>
                                <th>Time Ago</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <style type="text/css">
                                .modal-body .col-md-3{
                                    border: 1px solid #ddd;
                                    padding: 4px;
                                }
                                .modal-body .col-md-9{
                                    border: 1px solid #ddd;
                                    padding: 4px;
                                }
                            </style>
                            @foreach($data as $r)
                            <div class="modal" id="myModal{{ $r->id }}">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    Name
                                                </div>
                                                <div class="col-md-9">
                                                    {{ $r->name }}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    Email
                                                </div>
                                                <div class="col-md-9">
                                                    {{ $r->email }}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    Phonenumber
                                                </div>
                                                <div class="col-md-9">
                                                    {{ $r->phonenumber }}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    Message
                                                </div>
                                                <div class="col-md-9">
                                                    {{ $r->message }}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    Date
                                                </div>
                                                <div class="col-md-9">
                                                    {{ Cmf::date_format($r->created_at) }}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    Time Ago
                                                </div>
                                                <div class="col-md-9">
                                                    {{ Cmf::create_time_ago($r->created_at) }}
                                                </div>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <tr>
                                   <td>{{ $r->id }}</td>
                                   <td>{{ $r->name }}</td>
                                   <td>{{ $r->email }}</td>
                                   <td>{{ $r->phonenumber }}</td>
                                   <td>{{ Cmf::create_time_ago($r->created_at) }}</td>
                                   <td>{{ Cmf::date_format($r->created_at) }}</td>
                                   <td>
                                       <a data-toggle="modal" data-target="#myModal{{ $r->id }}" class="btn btn-primary btn-sm" href="javascript:vodi(0)"><i class="fa fa-eye"></i> View Quote</a>
                                       <a onClick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm" href="{{ url('admin/quotation/deletequotations') }}/{{ $r->id }}"><i class="fa fa-trash"></i> Delete Quote</a>
                                   </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                    <div style="margin-top:10px;" class="row">
                        {!! $data->links('frontend.pagination') !!}
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection