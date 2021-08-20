<?php

namespace App\Http\Controllers;


use App\Http\Requests\Case\NewCaseRequest;
use App\Models\Post;
use App\Models\Request;

class RequestController extends Controller
{
    public function allCauses()
    {
        $causes = Request::paginate(6);

        return view('causes.index' , compact('causes'));
    }

    public function index()
    {
        return view('admin.causes.index');
    }

    public function create()
    {
        return view('admin.causes.new');
    }
    public function store(NewCaseRequest $request)
    {
        $data = $request->validated();
    }

    public function show(Request $case)
    {
        $latest_posts = Post::with('image')->latest()->take(4)->get();


        return view('causes.show' , compact('case' , 'latest_posts'));
    }
}
