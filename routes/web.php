<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BannerController;

use App\Http\Controllers\PlanCOntroller;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\BankDetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/team',[HomeController::class,'team'])->name('team');
Route::get('/testimonial',[HomeController::class,'testimonial'])->name('testimonial');
Route::get('/price',[HomeController::class,'price'])->name('price');
Route::get('/appointment',[HomeController::class,'appointment'])->name('appointment');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/blog/{blog}',[HomeController::class,'blogDetails'])->name('blog-details');

Route::get('login-form',[AuthController::class,'index'])->name('login-form');
Route::get('registration',[AuthController::class,'registration'])->name('registration');
//Route::post('store', [AuthController::class, 'store'])->name('auth.store');
Route::post('auth-store', [AuthController::class, 'store'])->name('auth-store');
Route::post('login',[AuthController::class,'login'])->name('auth.login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('forget',[AuthController::class,'forget'])->name('auth.forget');
Route::post('forget',[AuthController::class,'forget_pass'])->name('auth.forget_pass');
Route::get('reset-password',[AuthController::class,'reset_password'])->name('reset-password');
Route::post('store-password',[AuthController::class,'store_password'])->name('store-password');

Route::post('appointment/store',[AppointmentController::class,'store'])->name('appointment.store');


Route::get('dashboard', [AuthController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('auth.dashboard');

Route::group(['middleware' => ['auth']],function (){
    Route::get('index',[BannerController::class,'index'])->name('banner.index');
    Route::get('create',[BannerController::class,'create'])->name('banner.create');
    Route::post('store',[BannerController::class,'store'])->name('banner.store');
    Route::get('edit/{banner}',[BannerController::class,'edit'])->name('banner.edit');
    Route::get('delete/{banner}',[BannerController::class,'delete'])->name('banner.delete');
    Route::get('duplicate/{banner}',[BannerController::class,'duplicate'])->name('banner.duplicate');
    Route::post('update/{banner}',[BannerController::class,'update'])->name('banner.update');

    //  about

    // Appointment


    //services



    Route::get('blogs/index',[\App\Http\Controllers\BlogController::class,'index'])->name('blogs.index');
    Route::get('blogs/create',[\App\Http\Controllers\BlogController::class,'create'])->name('blogs.create');
    Route::post('blogs/store',[\App\Http\Controllers\BlogController::class,'store'])->name('blogs.store');
    Route::get('blogs/edit/{blog}',[\App\Http\Controllers\BlogController::class,'edit'])->name('blogs.edit');
    Route::post('blogs/update/{blog}',[\App\Http\Controllers\BlogController::class,'update'])->name('blogs.update');
    Route::get('blogs/delete/{blog}',[\App\Http\Controllers\BlogController::class,'delete'])->name('blogs.delete');
    Route::get('blogs/duplicate/{blog}',[\App\Http\Controllers\BlogController::class,'duplicate'])->name('blogs.duplicate');

    Route::prefix('product')->name('product.')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::get('edit/{product}', [ProductController::class, 'edit'])->name('edit');
        Route::get('delete/{product}', [ProductController::class, 'delete'])->name('delete');
        Route::post('store', [ProductController::class, 'store'])->name('store');
        Route::post('update/{product}', [ProductController::class, 'update'])->name('update');
    });

    Route::prefix('update')->name('update.')->group(function(){
        Route::get('/', [UpdateController::class, 'index'])->name('index');
        Route::get('create', [UpdateController::class, 'create'])->name('create');
        Route::get('edit/{update}', [UpdateController::class, 'edit'])->name('edit');
        Route::get('delete/{update}', [UpdateController::class, 'delete'])->name('delete');
        Route::post('update/{update}', [UpdateController::class, 'update'])->name('update');
        Route::any('store', [UpdateController::class, 'store'])->name('store');
    });

    Route::prefix('bank')->name('bank.')->group(function(){
        Route::get('/', [BankDetailController::class, 'index'])->name('index');
        Route::get('create', [BankDetailController::class, 'create'])->name('create');
        Route::get('edit/{bank}', [BankDetailController::class, 'edit'])->name('edit');
        Route::get('delete/{bank}', [BankDetailController::class, 'delete'])->name('delete');
        Route::post('update/{bank}', [BankDetailController::class, 'update'])->name('update');
        Route::post('store', [BankDetailController::class, 'store'])->name('store');
    });





});




