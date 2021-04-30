@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                    <div class="row"  style='padding-top:20px;'>
                        <div class="col-md-6 text-left "><i class="fa fa-gg-circle">Product Category</i></div>
                        <div class="col-md-6 text-right">
                            <a href="{{url('admin/category')}}" class="btn btn-sm btn-success">All Categories</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <hr>
                                        <form action="{{url('admin/category/submit')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group text-center">
                                            </div>
                                            <div class="form-group{{$errors->has('name') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                @if ($errors->has('name'))
                                                 <span class="validtext">{{ $errors->first('name') }}</span>
                                                 @endif
                                                <input name="name" type="text" class="form-control" placeholder="Please enter the Category name" value="{{old('name')}}">
                                            </div>
                                            <div>
                                                
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
            <div class="col-md-2"></div>
        </div>


    </div>
</div><!-- .animated -->
@endsection
