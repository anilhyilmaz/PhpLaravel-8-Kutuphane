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


//Admin
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,"index"])->name("adminhome");

Route::get('/admin/login',[\App\Http\Controllers\HomeController::class,'login'])->name('admin');

Route::post('/admin/logincheck',[\App\Http\Controllers\HomeController::class,"logincheck"])->name("admin_logincheck");




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
