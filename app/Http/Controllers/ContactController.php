<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'case_details' => 'required',
        ]);


        Contact::create($data);

        Alert::success(__('Successfully Send Your Case !') , __('We will contact with you as soon possible'));

        return redirect()->back();

    }
}
