<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ShopcartController;
use App\Http\Controllers\UserController;
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

//Route::get('/', function () {
//    return view('home.index');
//});

Route::get('/', [\App\Http\Controllers\HomeController::class, "index"])->name("home");

Route::get('/home', [\App\Http\Controllers\HomeController::class, "index"])->name("homepage");
Route::get('/aboutus', [\App\Http\Controllers\HomeController::class, "aboutus"])->name("aboutus");
Route::get('/references', [\App\Http\Controllers\HomeController::class, "references"])->name("references");
Route::get('/faq', [\App\Http\Controllers\HomeController::class, "faq"])->name("faq");
Route::get('/contact', [\App\Http\Controllers\HomeController::class, "contact"])->name("contact");
Route::post('/sendmessage', [\App\Http\Controllers\HomeController::class, "sendmessage"])->name("sendmessage");
Route::get('/product/{id}/{slug}', [\App\Http\Controllers\HomeController::class, "product"])->name("product");
Route::get('/categoryproducts/{id}/{slug}', [\App\Http\Controllers\HomeController::class, "categoryproducts"])->name("categoryproducts");
Route::post('/getproduct', [\App\Http\Controllers\HomeController::class, "getproduct"])->name("getproduct");
Route::get('/productlist/{search}/', [\App\Http\Controllers\HomeController::class, "productlist"])->name("productlist");


//Route::redirect("/anasayfa","/home")->name("anasayfa");

//Route::redirect("/test","/home")->name("anasayfa");

//Route::get('/home',[\App\Http\Controllers\HomeController::class,"index"])->name("home");

//Route::get('/test/{id}/{name}',[\App\Http\Controllers\HomeController::class,"test"])->where(["id"=>'[0-9]+',"name"=>"[A-Za-z]+"]);

//Route::get('/test/{id}/{name}',[\App\Http\Controllers\HomeController::class,"test"])->whereNumber("id")->whereAlpha("name")->name("test");


//Admin
Route::middleware('auth')->prefix('admin')->group(function () {
    #Admin Role
    Route::middleware('admin')->group(function () {

        #Category
        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
        //Category
        Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');


//Product
        Route::prefix('product')->group(function () {
            //Route assigned name "admin.users"...
            Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_products');
            Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
            Route::post('store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');
        });


        #messages
        Route::prefix('messages')->group(function () {
            Route::get('/', [MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [MessageController::class, 'show'])->name('admin_product_show');
        });


//Product Image Gallery
        Route::prefix('image')->group(function () {
            Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });


//Review
        Route::prefix('review')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
        });

        #Setting
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

        //Faq
        Route::prefix('faq')->group(function () {
            //Route assigned name "admin.users"...
            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show', [FaqController::class, 'show'])->name('admin_faq_show');
        });

        //Admin Reservation
        Route::prefix('reservation')->group(function () {
            //Route assigned name "admin.users"...
            Route::get('/', [\App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('admin_reservations');
            Route::get('list/{status}', [\App\Http\Controllers\Admin\ReservationController::class, 'list'])->name('admin_reservation_list');
            Route::post('create', [\App\Http\Controllers\Admin\ReservationController::class, 'create'])->name('admin_reservation_add');
            Route::post('store', [\App\Http\Controllers\Admin\ReservationController::class, 'store'])->name('admin_reservation_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'edit'])->name('admin_reservation_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'update'])->name('admin_reservation_update');
            Route::post('itemupdate/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'itemupdate'])->name('admin_reservation_item_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'destroy'])->name('admin_reservation_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'show'])->name('admin_reservation_show');
        });
        //User Roles
        Route::prefix('user')->group(function () {
            //Route assigned name "admin.users"...
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::post('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });
    });#admin
});#auth


Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreviews/{id}', [UserController::class, 'destroymyreview'])->name('user_review_delete');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('userprofile');

    //Reservation
    Route::prefix('reservation')->group(function () {
        //Route assigned name "admin.users"...
        Route::get('/', [ReservationController::class, 'index'])->name('user_reservations');
        Route::post('create', [ReservationController::class, 'create'])->name('user_reservation_add');
        Route::post('store', [ReservationController::class, 'store'])->name('user_reservation_store');
        Route::get('edit/{id}', [ReservationController::class, 'edit'])->name('user_reservation_edit');
        Route::post('update/{id}', [ReservationController::class, 'update'])->name('user_reservation_update');
        Route::get('delete/{id}', [ReservationController::class, 'destroy'])->name('user_reservation_delete');
        Route::get('show/{id}', [ReservationController::class, 'show'])->name('user_reservation_show');
    });


    //Shopcart
    Route::prefix('shopcart')->group(function () {
        Route::get('/', [ShopcartController::class, 'index'])->name('user_shopcart');
        Route::post('store/{id}', [ShopcartController::class, 'store'])->name('user_shopcart_add');
        Route::post('update/{id}', [ShopcartController::class, 'update'])->name('user_shopcart_update');
        Route::get('delete/{id}', [ShopcartController::class, 'destroy'])->name('user_shopcart_delete');
    });

});


//Admin
Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, "index"])->name("adminhome")->middleware("auth");

Route::get('/admin/login', [\App\Http\Controllers\HomeController::class, 'login'])->name('admin_login');

Route::post('/admin/logincheck', [\App\Http\Controllers\HomeController::class, "logincheck"])->name("admin_logincheck");

Route::get("/logout", [\App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
