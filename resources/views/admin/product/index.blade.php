@extends('layouts.admin')
@section('content')

<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                    <div class="row"  style='padding-top:20px;'>
                        <div class="col-md-6 text-left "><i class="fa fa-gg-circle">All Product information</i></div>
                        <div class="col-md-6 text-right">
                            <a href="{{url('admin/product/add')}}" class="btn btn-sm btn-success">Add product</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th>Product Title</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Product Image</th>
                                <th>Product Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allProduct as $data)
                            <tr>
                                <td>{{$data->product_code}}</td>
                                <td>{{$data->product_name}}</td>
                                <td>{{$data->product_title}}</td>
                                <td>{{$data->product_price}}</td>
                                <td>{{$data->product_quantity}}</td>
                                <td> @if($data->product_image !='')
                                    <img width="50" height="50" src="{{asset('uploads/'.$data->product_image)}}" alt="">
                                    @else
                                    <img width="50" height="50"src="{{asset('uploads/avatar.jpg')}}" alt="">
                                    @endif</td>
                                <td><a href="{{url('admin/product/view/'.$data->product_id)}}"><i class="fa-lg fa fa-plus-square text-success"></i></a>
                                    <a href="{{url('admin/product/update/'.$data->product_id)}}"><i class="fa-lg fa fa-pencil-square text-info"></i></a>
                                    <a href="{{url('admin/product/softdelete/'.$data->product_id)}}"><i class="fa-lg fa fa-trash text-danger"></i></a></td>
                            </tr>
                            @endforeach
                    </table>
                    {{ $allProduct->links() }}
                </div>
                <div class="card-footer">
                    <div>
                        <a href="" onclick="window.print()" class="btn btn-success">Print</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div><!-- .animated -->


@endsection
