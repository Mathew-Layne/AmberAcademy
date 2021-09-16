<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    function contact(){
        return view('contact');
    }

    function sendmail(Request $req){
        $details = [
            'name' => $req->name,   
            'email' => $req->email,
            'subject' => $req->subject,
            'msg' => $req->msg
        ];
        Mail::to('akeemolayne@gmail.com')->send(new ContactUs($details));
        return redirect('/');
    }

    
}
