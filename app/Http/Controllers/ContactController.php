<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    
    public function __construct(Contact $contact)
    {
        $this->contacts = $contact;

    }


    public function index(){

        $contacts = $this->contacts->all();

        return view('admin.contacts.index' ,compact('contacts'));
    }


    public function formMail(){


        return view('admin.contacts.formmail');

    }

    public function sendMail(Request $request){

        $data  = [
            'name'=>$request->name,
            'email' =>$request->email,
            'contact' =>$request->contact
        ];
        Mail::send('admin.contacts.emailcontent', $data, function ($message ){
            $message->from('sonldph11925@fpt.edu.vn', 'Lê Duy Sơn1');
            $message->to('leduyson2kk@gmail.com', 'Lê Duy Sơn1');
            $message->subject('Subject');
        });



    }


}
