<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use Session;
use Auth;

class CategoryController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
      }
      public function index(){
        $allCategory = Category::where('category_status',1)->get();
        return view('admin.category.index',compact('allCategory'));
      }
      public function add(){
        return view('admin.category.add');
      }
      
      public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required| min:1|max:40',
        ],[
            'name.required'=>'Please enter the category name',
            
        ]);
        $insert = Category::insert([
            'category_name'=>$request['name'],
        ]);
        if($insert){
          return redirect('admin/category');
        }else {
          return redirect('admin/category/add');
        }
      }
}
