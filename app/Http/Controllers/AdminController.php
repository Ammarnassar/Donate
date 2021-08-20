<?php

namespace App\Http\Controllers;


use App\Models\Request;

class AdminController extends Controller
{
    public function index()
    {
        $causesCount = Request::count();

        return view('admin.index' , compact('causesCount'));
    }
}
