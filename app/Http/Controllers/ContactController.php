<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:70',
            'email' => 'required|email|max:255',
            'phone_number' => 'nullable|regex:^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$^',
            'reason' => 'required|string',
            'message' => 'required|string|min:50',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $contact = new Contact;
        $contact->full_name = $request->full_name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->reason = $request->reason;
        $contact->message = $request->message;
        $contact->save();
        
        return redirect('/contact')->with('status', 'Thanks for contacting me. I\'ll be in touch soon!');
    }
}
