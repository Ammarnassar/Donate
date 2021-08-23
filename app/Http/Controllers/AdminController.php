<?php

namespace App\Http\Controllers;


use App\Models\Donation;
use App\Models\Post;
use App\Models\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function dashboardHome()
    {

        return view('admin.index');
    }

    public function index()
    {
        return view('admin.admins.index');
    }

    public function create()
    {
        return view('admin.admins.create');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required',
        ]);


        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => 1,
            'password' => bcrypt($data['password']),
        ]);

        Alert::success(__('Admin Created successfully!'));

        return redirect()->route('admin.admin.create');
    }
}
