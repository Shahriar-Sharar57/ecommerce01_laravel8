@extends('layouts.admin')
@section('content')

<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                    <div class="row"  style='padding-top:20px;'>
                        <div class="col-md-6 text-left "><i class="fa fa-gg-circle">All User information</i></div>
                        <div class="col-md-6 text-right">
                            <a href="{{url('admin/user/add')}}" class="btn btn-sm btn-success">Add User</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Photo</th>
                                <th>Role</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allUser as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td> @if($data->user_image !='')
                                    <img width="50" height="50" src="{{asset('uploads/'.$data->user_image)}}" alt="">
                                    @else
                                    <img width="50" height="50"src="{{asset('uploads/avatar.jpg')}}" alt="">
                                    @endif</td>
                                <td>{{$data->userRole->role_name}}</td>
                                <td><a href="{{url('admin/user/view/'.$data->id)}}"><i class="fa-lg fa fa-plus-square text-success"></i></a>
                                    <a href="{{url('admin/user/edit/'.$data->id)}}"><i class="fa-lg fa fa-pencil-square text-info"></i></a>
                                    <a href="{{url('admin/user/softdelete/'.$data->id)}}"><i class="fa-lg fa fa-trash text-danger"></i></a></td>
                            </tr>
                            @endforeach
                    </table>
                    {{ $allUser->links() }}
                </div>
                <div class="card-footer">
                    <div>
                        <a href="" onclick="window.print()" class="btn btn-success">Print</a>
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
