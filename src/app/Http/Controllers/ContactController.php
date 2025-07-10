<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    public function profile()
    {
        return view('mypage');
    }

    public function contactform()
    {
        return view('contactform');
    }


    public function confirm(ContactRequest $request)
    {
        $user_item = $request->only(['name', 'email', 'tel', 'message']);
        return view('/confirm', ['user_item' => $user_item]);
    }

    public function store(ContactRequest $request)
    {
        $user_item = $request->only(['name', 'email', 'tel', 'message']);
        Contact::create($user_item);
        return view('/thanks');
    }
}
