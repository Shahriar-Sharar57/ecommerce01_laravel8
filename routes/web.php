<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\OutletController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//UserController routes
Route::get('admin/user',[UserController::class, 'index']);
Route::get('admin/dashboard',[UserController::class, 'dashboard']);
Route::get('admin/user/add',[UserController::class, 'add']);
Route::post('admin/user/submit',[UserController::class, 'insert']);
Route::get('admin/user/edit/{id}',[UserController::class, 'edit']);
Route::post('admin/user/update',[UserController::class, 'update']);
Route::get('admin/user/view/{id}',[UserController::class, 'view']);
Route::get('admin/user/softdelete/{id}',[UserController::class, 'softdelete']);
//CategoryController routes
Route::get('admin/category',[CategoryController::class, 'index']);
Route::get('admin/category/add',[CategoryController::class, 'add']);
Route::post('admin/category/submit',[CategoryController::class, 'insert']);
Route::get('admin/category/view/{id}',[CategoryController::class, 'view']);
Route::get('admin/category/softdelete/{id}',[CategoryController::class, 'softdelete']);
//ProductController routes
Route::get('admin/product',[ProductController::class, 'index']);
Route::get('admin/product/add',[ProductController::class, 'add']);
Route::post('admin/product/submit',[ProductController::class, 'insert']);
Route::get('admin/product/view/{id}',[ProductController::class, 'view']);
Route::get('admin/product/softdelete/{id}',[ProductController::class, 'softdelete']);
//CompanytController routes
Route::get('admin/company',[CompanyController::class, 'index']);
Route::get('admin/company/add',[CompanyController::class, 'add']);
Route::post('admin/company/submit',[CompanyController::class, 'insert']);
Route::get('admin/outlet',[OutletController::class, 'index']);
Route::get('admin/outlet/add',[OutletController::class, 'add']);
Route::post('admin/outlet/submit',[OutletController::class, 'insert']);
//websiteCOntroller routes
Route::get('admin/user',[UserController::class, 'index']);