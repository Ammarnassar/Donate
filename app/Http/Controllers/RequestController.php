<?php

namespace App\Http\Controllers;


use App\Http\Requests\Case\NewCaseRequest;
use App\Models\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RequestController extends Controller
{
    public function allCauses()
    {
        $causes = Request::with('image')->latest()->paginate(6);

        return view('cases.index', compact('causes'));
    }

    public function index()
    {
        return view('admin.cases.index');
    }

    public function create()
    {
        return view('admin.cases.new');
    }

    public function store(NewCaseRequest $request)
    {
        $data = $request->validated();

        Request::create($data);

        Alert::success(__('Request Created successfully!'));

        return redirect()->route('admin.request.create');
    }

    public function show(Request $case)
    {
        return view('cases.show', compact('case'));
    }
}
