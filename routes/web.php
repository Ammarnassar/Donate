<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::view('/' , 'home')->name('home');
    Route::view('/about' , 'about')->name('about');
    Route::view('/contact' , 'contact')->name('contact');
    Route::view('/login' , 'auth.login')->name('login');
    Route::view('/register' , 'auth.register')->name('register');

    Route::group(['as' => 'causes.' , 'prefix' => 'causes'] , function (){
        Route::view('/index' , 'causes.index')->name('index');
    });

    Route::group(['as' => 'blog.' , 'prefix' => 'blog'] , function (){
        Route::view('/index' , 'blog.index')->name('index');
        Route::view('/show' , 'blog.show')->name('show');
    });

    Route::group(['as' => 'dashboard.' , 'prefix' => 'dashboard'] , function (){
        Route::view('/index' , 'dashboard.index')->name('index');

    });

});
