<?php

use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

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


Route::get('/',[FrontPageController::class,'index'])->name('front.home');
Route::get('/about',[FrontPageController::class,'about'])->name('front.about');
Route::get('/service',[FrontPageController::class,'service'])->name('front.service');
Route::get('/package',[FrontPageController::class,'package'])->name('front.package');
Route::get('/destination',[FrontPageController::class,'destination'])->name('front.destination');
Route::get('/guide',[FrontPageController::class,'guide'])->name('front.guide');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

