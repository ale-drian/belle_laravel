<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use App\Mail\BelleMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    //
    public function sendEmail()
    {
        $details = [
            'title' => 'Bienvenido a Belle Laravel',
            'body' => 'Bienvenido a nuestra aplicación.'
        ];
        $user = auth()->user();
        //dd($user->email);
        Mail::to($user->email)->send(new BelleMail($details));
        return "Email sent!";
    }
    //
    public function sendContactMessage()
    {
        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=> 'required',
            'message'=> 'required',
        ]);
        $user = auth()->user();
        //dd($user->email);
        Mail::to('belle.moda.circular@gmail.com')->send(new ContactMail($details));
        return redirect('contact');
    }
}
