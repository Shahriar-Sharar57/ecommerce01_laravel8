@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                    <div class="row"  style='padding-top:20px;'>
                        <div class="col-md-6 text-left "><i class="fa fa-gg-circle">View User information</i></div>
                        <div class="col-md-6 text-right">
                            <a href="{{url('admin/user/add')}}" class="btn btn-sm btn-success">Add User</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                      <table class="table table-bordered table-striped table-hover view-custom-table">
                        <tr>
                          <td class="text-bold">Name</td>
                          <td>:</td>
                          <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                          <td>email</td>
                          <td>:</td>
                          <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                          <td>Registration</td>
                          <td>:</td>
                          <td>{{$data->created_at->format('d:m:Y | h:i:s A')}}</td>
                        </tr>
                        <tr>
                          <td>Role</td>
                          <td>:</td>
                          <td>{{$data->userRole->role_name}}</td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-md-2">

                    </div>
                  </div>
                </div>
                <div class="card-footer">
                    <div>
                        <a href="" class="btn btn-success">Print</a>
                        <a href="" class="btn btn-info">Excel</a>
                        <a href="" class="btn btn-danger">Pdf</a>
                        <a href="" class="btn btn-primary">Csf</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div><!-- .animated -->
@endsection
