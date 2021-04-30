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
                            <a href="{{url('admin/category/add')}}" class="btn btn-sm btn-success">Add Category </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#Id</th>
                                <th>Name</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allCategory as $data)
                            <tr>
                                <td>{{$data->category_id}}</td>
                                <td>{{$data->category_name}}</td>
                                
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
