@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                    <div class="row"  style='padding-top:20px;'>
                        <div class="col-md-6 text-left "><i class="fa fa-gg-circle">All Outlet information</i></div>
                        <div class="col-md-6 text-right">
                            <a href="{{url('admin/outlet/add')}}" class="btn btn-sm btn-success">Add Outlet </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#Id</th>
                                <th>Outlet Name</th>
                                <th>Outlet Title</th>
                                <th>Company Name</th>
                                <th>Outlet Tin</th>
                                <th>Outlet Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allOutlet as $data)
                            <tr>
                                <td>{{$data->outlet_id}}</td>
                                <td>{{$data->outlet_name}}</td>
                                <td>{{$data->outlet_title}}</td>
                                <td>{{$data->outlet_company}}</td>
                                <td>{{$data->outlet_address}}</td>
                                <td>{{$data->outlet_phone}}</td>
                            </tr>
                            @endforeach
                    </table>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div><!-- .animated -->
@endsection
