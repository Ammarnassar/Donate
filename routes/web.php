<?php

use App\Http\Controllers\AuthController;
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
    Route::view('/register' , 'auth.register')->name('register');
    Route::post('/register' , [AuthController::class , 'register']);

//Public Routes
    Route::view('/' , 'home')->name('home');
    Route::view('/about' , 'about')->name('about');
    Route::view('/contact' , 'contact')->name('contact');

    Route::group(['as' => 'causes.' , 'prefix' => 'causes'] , function (){
        Route::view('/index' , 'causes.index')->name('index');
    });

    Route::group(['as' => 'blog.' , 'prefix' => 'blog'] , function (){
        Route::view('/index' , 'blog.index')->name('index');
        Route::view('/show' , 'blog.show')->name('show');
    });

//Protected Routes

    Route::group(['middleware' => 'auth'] , function () {
        Route::view('/donate' , 'donate')->name('donate');
        Route::get('/logout' , [AuthController::class , 'logout'])->name('logout');

    });


//Admin Routes
    Route::group(['as' => 'admin.' , 'prefix' => 'admin' , 'middleware' => ['auth' , 'admin']] , function (){
        Route::view('/index' , 'admin.index')->name('index');
    });
});
