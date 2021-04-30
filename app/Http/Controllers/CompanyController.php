<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Outlet;
use Carbon\Carbon;
use Session;
use Auth;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $allCompany = Company::where('company_status',1)->orderBy('company_id','DESC')->paginate(10);
        return view('admin.company.index',compact('allCompany'));
    }
    public function add()
    {
        return view('admin.company.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'name'=>'required| min:1|max:40',
            'title'=>'required| min:1|max:40',
            'tin'=>'required| min:1|max:40',
            'phone'=>'required| min:1|max:40',
        ],[
            'name.required'=>'Please enter the name',
            'title.required'=>'Please enter the title',
            'tin.required'=>'Please enter the tin',
            'phone.required'=>'Please enter the phone',
        ]);
        
        $insert = Company::insert([
            'company_name'=>$request['name'],
            'company_tin'=>$request['tin'],
            'company_title'=>$request['title'],
            'company_phone'=>$request['phone'],
            'created_at'=>Carbon::now()->toDateTimeString(),   
        ]);

        if($insert){
            return redirect('admin/company/add');
          }else {
            return redirect('admin/company/add');
          }
    }
    public function softdelete()
    {
        
    }

    public function Oindex()
    {
        $allOutlet = Outlet::where('outlet_status',1)->orderBy('outlet_id','DESC')->paginate(10);
        return view('admin.outlet.index',compact('allOutlet'));
    }
    public function Oadd()
    {
        return view('admin.outlet.add');
    }
    public function Oinsert(Request $request)
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
        
    }
    public function Osoftdelete()
    {
        
    }
}
