@extends('layouts.admin')
@section('content')
@if (Auth::user()->user_role==1)
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                    <div class="row"  style='padding-top:20px;'>
                        <div class="col-md-6 text-left "><i class="fa fa-gg-circle">All Product information</i></div>
                        <div class="col-md-6 text-right">
                            <a href="{{url('/admin/product')}}" class="btn btn-sm btn-success">All Products</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <hr>
                                        <form action="{{url('admin/product/submit')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group text-center">
                                            </div>
                                            <div class="form-group{{$errors->has('name') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Product Name</label>
                                                @if ($errors->has('name'))
                                                 <span class="validtext">{{ $errors->first('name') }}</span>
                                                @endif
                                                <input name="name" type="text" class="form-control" placeholder="Please enter product name" value="{{old('name')}}">
                                            </div>
                                            <div class="form-group{{$errors->has('title') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Product Title</label>
                                                @if ($errors->has('title'))
                                                 <span class="validtext">{{ $errors->first('title') }}</span>
                                                @endif
                                                <input name="title" type="text" class="form-control" placeholder="Please enter product title" value="{{old('title')}}">
                                            </div>
                                            <div class="form-group{{$errors->has('description') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Product description</label>
                                                @if ($errors->has('description'))
                                                 <span class="validtext">{{ $errors->first('description') }}</span>
                                                @endif
                                                <input name="description" type="text" class="form-control" placeholder="Please enter product description" value="{{old('description')}}">
                                            </div>
                                            <div class="form-group{{$errors->has('price') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Product price</label>
                                                @if ($errors->has('price'))
                                                 <span class="validtext">{{ $errors->first('price') }}</span>
                                                @endif
                                                <input name="price" type="number" class="form-control" placeholder="Please enter product price" value="{{old('price')}}">
                                            </div>
                                            <div class="form-group{{$errors->has('quantity') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Product quantity</label>
                                                @if ($errors->has('quantity'))
                                                 <span class="validtext">{{ $errors->first('quantity') }}</span>
                                                @endif
                                                <input name="quantity" type="number" class="form-control" placeholder="Please enter product quantity" value="{{old('quantity')}}">
                                            </div>
                                            <div class="form-group{{$errors->has('code') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Product code</label>
                                                @if ($errors->has('code'))
                                                 <span class="validtext">{{ $errors->first('code') }}</span>
                                                @endif
                                                <input name="code" type="text" class="form-control" placeholder="Please enter product code" value="{{old('code')}}">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="">Photo</label>
                                                <input name="pic" type="file" class="form-control" required>
                                            </div>
                                            <div class="form-group {{$errors->has('category') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Select Product Category </label>
                                                <?php
                                                $allcategory = App\Models\Category::where('category_status',1)->orderBy('category_id','ASC')->get();
                                                 ?>
                                                <select class="form-control" name="category">
                                                  <option value="">Select Category</option>
                                                  @foreach($allcategory as $data)
                                                  <option value="{{$data->category_id}}">{{$data->category_name}}</option>
                                                  @endforeach
                                                </select>
                                                @if ($errors->has('category'))
                                                <span class="validtext">{{ $errors->first('category') }}</span>
                                               @endif
                                            </div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                                                    <i class="fa fa-key fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Upload</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                </div>

                <div class="card-footer">
                    
                </div>
            </div>
            <div class="col-md-2">But still I am chill !</div>
        </div>


    </div>
</div><!-- .animated -->
@endif
@endsection
