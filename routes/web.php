<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
    Route::view('/' , 'home')->name('home');
    Route::view('about' , 'about')->name('about');
    Route::view('contact' , 'contact')->name('contact');
    Route::view('donate' , 'donate')->name('donate');

    Route::group(['as' => 'case.' , 'prefix' => 'case'] , function (){
        Route::get('all' , [RequestController::class , 'allCauses'])->name('all');
        Route::get('show/{case}' , [RequestController::class , 'show'])->name('show');
    });

    Route::group(['as' => 'blog.' , 'prefix' => 'blog'] , function (){
        Route::get('' , [PostController::class , 'index'])->name('index');
        Route::get('{post:title}' , [PostController::class , 'show'])->name('show');
    });

//Protected Routes

    Route::group(['middleware' => 'auth'] , function () {
        Route::get('/logout' , [AuthController::class , 'logout'])->name('logout');
    });

//Admin Routes
    Route::group(['as' => 'admin.' , 'prefix' => 'admin' , 'middleware' => ['auth' , 'admin']] , function (){
        Route::get('/' , [AdminController::class , 'index'])->name('index');
        Route::resource('/post' , PostController::class);
        Route::resource('/request' , RequestController::class);
    });
});


