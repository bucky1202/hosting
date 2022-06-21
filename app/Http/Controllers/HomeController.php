<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function service()
    {
        return view('service');
    }


    public function about_us()
    {
        return view('about-us');
    }


    public function feedback(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'message'=>'required',
            'subject'=>'required',

        ]);

        $feedback = new Feedback();
        $feedback ->name = $request->name;
        $feedback ->email = $request->email;
        $feedback ->phone_number = $request->phone_number;
        $feedback ->subject = $request->subject;
        $feedback ->message = $request->message;

        $feedback->save();
        return back();

    }}
