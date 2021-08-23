<?php

namespace App\Http\Controllers;


use App\Models\Request;

class HomeController extends Controller
{
    public function home()
    {
        $cases = Request::with('image')->latest()->take(3)->get();

//        dd($cases);
        return view('home' , compact('cases'));
    }
}
