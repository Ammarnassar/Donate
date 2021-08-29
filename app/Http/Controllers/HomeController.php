<?php

namespace App\Http\Controllers;


use App\Models\Request;

class HomeController extends Controller
{
    public function home()
    {
        $cases = Request::latest()->take(3)->get();

        return view('home' , compact('cases'));
    }

}
