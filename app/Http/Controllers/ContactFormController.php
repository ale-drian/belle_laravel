<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;//Email de Comprobante
use Illuminate\Support\Facades\Mail;


class ContactFormController extends Controller
{
    public function getContact(){
        
        return view('livewire.contact-us-component')->layout('layouts.base');
    }
    public function postContact(Request $request){
        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=> 'min:3',
            'body'=> 'min:10',
        ]);
        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=> $request->subject,
            'body'=> $request->body,
        );
       
        $to_name = 'Belle Admin';
        $to_email = 'belle.moda.circular@gmail.com';
        
             
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->from('belle.moda.circular@gmail.com','Artisans Web');
            $message->to($to_email, $to_name)
                    ->subject('Artisans Web Testing Mail');
           
        });
        return redirect('contact');
        
    }
   /*  public function store(){
        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=> 'required',
            'message'=> 'required',
        ]);

        Mail::to('belle.moda.circular@gmail.com')->send(new ContactEmail($data));
        return redirect('home');
        
    } */

}
/* 
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;//Email de Comprobante
use Illuminate\Support\Facades\Mail;


class ContactFormController extends Controller
{
    public function getContact(){
        return view('livewire.contact-us-component')->layout('layouts.base');
    }
    public function postContact(Request $request){
        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=> 'min:3',
            'body'=> 'min:10',
        ]);
        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=> $request->subject,
            'body'=> $request->body,
        );
        Mail::send('emails.contactEmail', $data , function($message) use($data){
        
            $message->to('belle.moda.circular@gmail.com');
            $message->subject('Nuevo mensaje de Belle App!');
            dd($data);
        });
        
        return redirect('home');
    }
   /*  public function store(){
        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=> 'required',
            'message'=> 'required',
        ]);

        Mail::to('belle.moda.circular@gmail.com')->send(new ContactEmail($data));
        return redirect('home');
        
    } */

