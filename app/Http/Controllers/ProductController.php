<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Carbon\Carbon;
use Session;
use Auth;
use Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
      $allProduct = Product::where('product_status',1)->orderBy('product_id','DESC')->paginate(10);
        return view('admin.product.index',compact('allProduct'));
        
    }
    public function add(){
        if(Auth::user()->user_role!=1){
            return redirect('admin/dashboard');
          }
            return view('admin.product.add');
    }

    public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required| min:1|max:40',
            

        ],[
            'name.required'=>'Please enter the name',
            
        ]);
        $image = $request->file('pic');
          $imageName = 'Product'.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(200,300)->save('uploads/'.$imageName);

        $insert = Product::insert([
            'product_name'=>$request['name'],
            'product_title'=>$request['title'],
            'product_quantity'=>$request['quantity'],
            
            'product_category'=>$request['category'],
            'product_desc'=>$request['description'],
            'product_code'=>$request['code'],
            'product_category'=>$request['category'],
            'product_image'=>$imageName,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
    
        
        if($insert){
          return redirect('admin/product/add');
        }else {
          return redirect('admin/product/add');
        }
    }
    public function view(){
      $data = Pruduct::where('product_status',1)->firstOrFail();
      return view('welcome',compact('data'));
    }
    public function softdelete(){

    }
    
    public function edit($product_id){
      $data = User::where('product_status',1)->orderBy('product_id','ASC')->firstOrFail();
      return view('admin.product.edit',compact('data'));
    }

    public function update(){

    }
}
