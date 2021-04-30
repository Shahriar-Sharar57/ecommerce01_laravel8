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
                        <div class="col-md-6 text-left "><i class="fa fa-gg-circle">Outlet Details</i></div>
                        <div class="col-md-6 text-right">
                            <a href="{{url('admin/outlet')}}" class="btn btn-sm btn-success">All Outlets</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <hr>
                                        <form action="{{url('admin/outlet/submit')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group text-center">
                                            </div>
                                            <div class="form-group{{$errors->has('name') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                @if ($errors->has('name'))
                                                 <span class="validtext">{{ $errors->first('name') }}</span>
                                                 @endif
                                                <input name="name" type="text" class="form-control" placeholder="Please enter the Outlet name" value="{{old('name')}}">
                                            </div>
                                            <div class="form-group{{$errors->has('title') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Title</label>
                                                @if ($errors->has('title'))
                                                 <span class="validtext">{{ $errors->first('title') }}</span>
                                                 @endif
                                                <input name="title" type="text" class="form-control" placeholder="Please enter the Outlet title" value="{{old('title')}}">
                                            </div>
                                            <div class="form-group{{$errors->has('address') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Title</label>
                                                @if ($errors->has('address'))
                                                 <span class="validtext">{{ $errors->first('address') }}</span>
                                                 @endif
                                                <input name="address" type="text" class="form-control" placeholder="Please enter the Outlet address" value="{{old('address')}}">
                                            </div>
                                            <div class="form-group{{$errors->has('phone') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Phone</label>
                                                @if ($errors->has('phone'))
                                                 <span class="validtext">{{ $errors->first('phone') }}</span>
                                                 @endif
                                                <input name="phone" type="text" class="form-control" placeholder="Please enter the Outlet phone" value="{{old('phone')}}">
                                            </div>
                                            <div class="form-group {{$errors->has('company') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Select company </label>
                                                <?php
                                                $allCompany = App\Models\Company::where('company_status',1)->orderBy('company_id','ASC')->get();
                                                 ?>
                                                <select class="form-control" name="company">
                                                  <option value="">Select company</option>
                                                  @foreach($allCompany as $data)
                                                  <option value="{{$data->company_id}}">{{$data->company_name}}</option>
                                                  @endforeach
                                                </select>
                                                @if ($errors->has('company'))
                                                <span class="validtext">{{ $errors->first('company') }}</span>
                                               @endif
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
