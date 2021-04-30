<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Session;
use Auth;
use Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function __construct()
    {
      
      $this->middleware('auth');
      $this->middleware('admin');
      
    }
    public function dashboard()
    {
        return view('admin/dashboard/index');
    }
    public function index()
    {
      if(Auth::user()->user_role!=1){
        return redirect('admin/dashboard');
      }
        $allUser = User::where('user_status',1)->orderBy('id','DESC')->paginate(10);
        return view('admin.user.index',compact('allUser'));
        
        
    }
    public function add()
    {
      if(Auth::user()->user_role!=1){
        return redirect('admin/dashboard');
      }
        return view('admin.user.add');
    }
    
    public function view($id)
    {
      $data = User::where('id',$id)->firstOrFail();
      return view('admin.user.view',compact('data'));
    }
    public function edit($id)
    {
      $data = User::where('user_status',1)->where('id',$id)->firstOrFail();
      return view('admin.user.edit',compact('data'));
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'name'=>'required| min:1|max:40',
            'email'=>'required|email|unique:users',
            'password'=>'min:3|required_with:password_confirmation|same:password_confirmation',

        ],[
            'name.required'=>'Please enter the name',
            'email.required'=>'Please enter the email',
            'password.required'=>'Please enter the password',
        ]);
        $image = $request->file('pic');
          $imageName = 'User_'.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(200,300)->save('uploads/'.$imageName);

        $insert = User::insert([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>Hash::make($request['password']),
            'user_role'=>($request['role']),
            'user_image'=>$imageName,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
    
        
        if($insert){
          return redirect('admin/user');
        }else {
          return redirect('admin/user/add');
        }
    }
    public function update(Request $request)
    {
      $id = $request['id'];
      $insert = User::where('user_status',1)->where('id',$id)->update([
        'name'=>$request['name'],
        'email'=>$request['email'],
        'password'=>$request['password'],
        'updated_at'=>Carbon::now()->toDateTimeString(),

      ]);
      if($request->hasFile('pic')){
        $image = $request->file('pic');
        $imageName = 'User_'.$id.'_'.time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(200,300)->save('uploads/'.$imageName);

        User::where('id',$id)->update([
          'user_image'=>$imageName,
        ]);
    }
    if($insert){
      Session::flash('success','value');
      return redirect('admin/user/view/'.$id);
    }else{
      return redirect('admin/user/edit/'.$id);
      Session::flash('error','value');
    }
  }
    public function softdelete($id)
    {
      $soft = User::where('user_status',1)->where('id',$id)->update([
        'user_status'=> 0,
        'updated_at'=> Carbon::now()->toDateTimeString(),
      ]);
      if($soft){
        Session::flash('success_soft','value');
        return redirect('admin/user');
      }else{
        return redirect('admin/user');
        Session::flash('error_soft','value');
      }
    }
    public function restore()
    {

    }
}
