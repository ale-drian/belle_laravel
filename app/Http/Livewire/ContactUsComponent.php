<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use App\Mail\ContactEmail;//Email de Comprobante
use Illuminate\Support\Facades\Mail;

use Livewire\Component;

class ContactUsComponent extends Component
{
    public function render()
    {
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
        
             
        Mail::send('emails.contactEmail', $data, function($message) use ($to_name, $to_email) {
            $message->from('belle.moda.circular@gmail.com','Belle App Soporte');
            $message->to($to_email, $to_name)
                    ->subject('Nuevo Mensaje de Soporte');
           
        });
        return redirect('contact-us');
        
    }
}
