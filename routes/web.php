<?php

use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\GuideController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\PackageController;

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

//for switching language route
Route::get('/lang/{locale}', function ($locale) {
	Session::put('locale', $locale);
	return redirect()->back();
});

Route::get('/auth-test', function () {
    return view('layouts.auth_app');
});

Route::get('/admin-test', function () {
    return view('admin.package.list');
    // return view('layouts.master_admin');
    // return view('layouts.master_app');
	// return view('admin.services.index');
});



Route::get('/',[FrontPageController::class,'index'])->name('front.home');
Route::get('/about',[FrontPageController::class,'about'])->name('front.about');
Route::get('/service',[FrontPageController::class,'service'])->name('front.service');
Route::get('/package',[FrontPageController::class,'package'])->name('front.package');
Route::get('/destination',[FrontPageController::class,'destination'])->name('front.destination');
Route::get('/guide',[FrontPageController::class,'guide'])->name('front.guide');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('/admin/services',[App\Http\Controllers\Admin\ServiceController::class]);
Route::get('admin/services',[ServiceController::class,'index'])->name('admin.services');
Route::get('admin/services/create',[ServiceController::class,'create'])->name('admin.services.create');
Route::post('admin/services/store',[ServiceController::class,'store'])->name('admin.services.store');
Route::get('admin/services/edit/{id}',[ServiceController::class,'edit'])->name('admin.services.edit');
Route::get('admin/services/show/{id}',[ServiceController::class,'show'])->name('admin.services.show');
Route::put('admin/services/update/{id}',[ServiceController::class,'update'])->name('admin.services.update');
Route::post('admin/services/destroy/{id}',[ServiceController::class,'destroy'])->name('admin.services.destroy');



Route::get('admin/packages',[PackageController::class,'index'])->name('admin.packages');
Route::get('admin/destinations',[DestinationController::class,'index'])->name('admin.destinations');
Route::get('admin/bookings',[BookingController::class,'index'])->name('admin.bookings');
Route::get('admin/guides',[GuideController::class,'index'])->name('admin.guides');
Route::get('admin/clients',[ClientController::class,'index'])->name('admin.clients');

