<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $validated = $request->validate([
            'fullName' => 'required|string|max:70',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'nullable|string|max:15',
            'message' => 'required|string',
        ]);
        
        $contact = new Contact;
        $contact->fullName = $request->fullName;
        $contact->email = $request->email;
        $contact->phoneNumber = $request->phoneNumber;
        $contact->message = $request->message;
        $contact->save();
        
        return redirect('/contact')->with('status', 'Thanks for contacting me. I\'ll be in touch soon!');
    }
}
