<?php

namespace App\Http\Controllers;
use  App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function CONTACTS(Request $req)
    {
        
        $req->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'subject'=> 'required',
            'message'=> 'required'
        ]);
        
       


        $CONTACTS=new contact;
        $CONTACTS->name =$req-> name;
        $CONTACTS->email=$req->email;
        $CONTACTS->subject=$req-> subject;
        $CONTACTS->message=$req->message;
        $CONTACTS->save();
        return view('index');
}
}
