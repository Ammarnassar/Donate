<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

//Auth Routes
    Route::view('/login' , 'auth.login')->name('login');
    Route::post('/login' , [AuthController::class , 'login']);

//Public Routes
    Route::get('/' , [HomeController::class , 'home'])->name('home');
    Route::view('about' , 'about')->name('about');
    Route::view('contact' , 'contact')->name('contact');
    Route::post('contact' , [ContactController::class , 'contact'])->name('contact.case');

    Route::group(['as' => 'case.' , 'prefix' => 'case'] , function (){
        Route::get('all' , [RequestController::class , 'allCauses'])->name('all');
        Route::get('show/{case}' , [RequestController::class , 'show'])->name('show');
    });

    Route::group(['as' => 'blog.' , 'prefix' => 'blog'] , function (){
        Route::get('' , [PostController::class , 'addPosts'])->name('index');
        Route::get('{post:title}' , [PostController::class , 'show'])->name('show');
    });

//Protected Routes

    Route::group(['middleware' => 'auth'] , function () {
        Route::get('/logout' , [AuthController::class , 'logout'])->name('logout');
    });

//Admin Routes
    Route::group(['as' => 'admin.' , 'prefix' => 'admin' , 'middleware' => ['auth' , 'admin']] , function (){
        Route::get('/' , [AdminController::class , 'dashboardHome'])->name('index');
        Route::resource('/post' , PostController::class);
        Route::resource('/request' , RequestController::class);
        Route::view('contacts' , 'admin.cases.contact-cases')->name('contact');
        Route::resource('/admin' , AdminController::class);
        Route::get('/donations' , [DonationController::class , 'index' ])->name('donations.index');
    });
});


