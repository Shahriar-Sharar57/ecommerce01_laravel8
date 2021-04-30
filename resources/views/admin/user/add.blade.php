@extends('layouts.admin')
@section('content')
@if (Auth::user()->user_role==1)
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-2">My Future is unpredictable!</div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                    <div class="row"  style='padding-top:20px;'>
                        <div class="col-md-6 text-left "><i class="fa fa-gg-circle">All User information</i></div>
                        <div class="col-md-6 text-right">
                            <a href="{{url('/admin/user/')}}" class="btn btn-sm btn-success">All User</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <hr>
                                        <form action="{{url('admin/user/submit')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group text-center">
                                            </div>
                                            @if(Session::has('success'))
                                            <script type="text/javascript">
                                            swal({
                                              title: "Good job!",
                                              text: "User uploaded successfully!",
                                              icon: "success",
                                            });
                                            </script>
                                              @endif
                                              @if(Session::has('error'))
                                            <script type="text/javascript">
                                            swal({
                                              title: "opps!",
                                              text: "User was not uploaded!",
                                              icon: "error",
                                            });
                                            </script>
                                              @endif
                                            <div class="form-group{{$errors->has('name') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                @if ($errors->has('name'))
                                                 <span class="validtext">{{ $errors->first('name') }}</span>
                                                @endif
                                                <input name="name" type="text" class="form-control" placeholder="Please enter your name" value="{{old('name')}}">
                                            </div>
                                            <div class="form-group{{$errors->has('email') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">email</label>
                                                @if ($errors->has('email'))
                                                 <span class="validtext">{{ $errors->first('email') }}</span>
                                                @endif
                                                <input name="email" type="email" class="form-control" placeholder="Please enter your email">
                                            </div>
                                            <div class="form-group{{$errors->has('pass') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">password</label>
                                                <input name="password" type="password" class="form-control password" placeholder="Please enter your password">
                                                @if ($errors->has('password'))
                                                 <span class="validtext">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group {{$errors->has('repass') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Confirm password</label>
                                                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Please confirm your password">
                                                @if ($errors->has('repass'))
                                                <span class="validtext">{{ $errors->first('repass') }}</span>
                                               @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="">Photo</label>
                                                <input name="pic" type="file" class="form-control" required>
                                            </div>
                                            <div class="form-group {{$errors->has('role') ? ' has:error':''}}">
                                                <label for="cc-payment" class="control-label mb-1">Select Role </label>
                                                <?php
                                                $allRole = App\Models\UserRole::where('role_status',1)->orderBy('role_id','ASC')->get();
                                                 ?>
                                                <select class="form-control" name="role">
                                                  <option value="">Select Role</option>
                                                  @foreach($allRole as $data)
                                                  <option value="{{$data->role_id}}">{{$data->role_name}}</option>
                                                  @endforeach
                                                </select>
                                                @if ($errors->has('role'))
                                                <span class="validtext">{{ $errors->first('role') }}</span>
                                               @endif
                                            </div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                                                    <i class="fa fa-key fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Registration</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                </div>

                <div class="card-footer">
                    <div>
                        <a href="#" onclick="window.print()" class="btn btn-success">Print</a>
                        <a href="" class="btn btn-info">Excel</a>
                        <a href="" class="btn btn-danger">Pdf</a>
                        <a href="" class="btn btn-primary">Csf</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">But still I am chill !</div>
        </div>


    </div>
</div><!-- .animated -->
@endif
@endsection
