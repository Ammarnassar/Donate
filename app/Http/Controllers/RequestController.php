<?php

namespace App\Http\Controllers;


use App\Models\Request;

class RequestController extends Controller
{
    public function allCauses()
    {
        $causes = Request::paginate(6);

        return view('causes.index' , compact('causes'));
    }
}
