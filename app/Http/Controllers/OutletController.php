<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function index()
    {
        $allOutlet = Outlet::where('outlet_status',1)->orderBy('outlet_id','DESC')->paginate(10);
        return view('admin.outlet.index',compact('allOutlet'));
    }
    public function add()
    {
        return view('admin.outlet.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'name'=>'required| min:1|max:40',
            'title'=>'required| min:1|max:40',
            'tin'=>'required| min:1|max:40',
            'phone'=>'required| min:1|max:40',
        ],[
            'name.required'=>'Please enter outlet name',
            'title.required'=>'Please enter the title',
            'tin.required'=>'Please enter the tin',
            'phone.required'=>'Please enter the phone',
        ]);
        
        $insert = Comany::insert([
            'outlet_name'=>$request['name'],
            'outlet_address'=>$request['address'],
            'outlet_title'=>$request['title'],
            'outlet_phone'=>$request['phone'],
            'outlet_company'=>$request['company'],
            'created_at'=>Carbon::now()->toDateTimeString(),   
        ]);
        if($insert){
            return redirect('admin/outlet/add');
          }else {
            return redirect('admin/company/add');
          }
    }
    public function softdelete()
    {
        
    }
}
