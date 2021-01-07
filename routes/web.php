<?php

use Illuminate\Support\Facades\Route;

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
    return view('home.index');
});
Route::get('/aboutus',[\App\Http\Controllers\HomeController::class,"aboutus"])->name("aboutus");

//Route::redirect("/anasayfa","/home")->name("anasayfa");

//Route::redirect("/test","/home")->name("anasayfa");

//Route::get('/home',[\App\Http\Controllers\HomeController::class,"index"])->name("home");

//Route::get('/test/{id}/{name}',[\App\Http\Controllers\HomeController::class,"test"])->where(["id"=>'[0-9]+',"name"=>"[A-Za-z]+"]);

//Route::get('/test/{id}/{name}',[\App\Http\Controllers\HomeController::class,"test"])->whereNumber("id")->whereAlpha("name")->name("test");


//Category
Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_home');

    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');


});




//Admin
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,"index"])->name("adminhome")->middleware("auth");

Route::get('/admin/login',[\App\Http\Controllers\HomeController::class,'login'])->name('admin_login');

Route::post('/admin/logincheck',[\App\Http\Controllers\HomeController::class,"logincheck"])->name("admin_logincheck");

Route::get("/admin/logout",[\App\Http\Controllers\HomeController::class,'logout'])->name('admin_logout');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
