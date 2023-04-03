<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactModel;
class contactController extends Controller
{
    public function Contact(){


        return view('contact');
    } 
    public function savedata(Request $request){
        $contact= new contactModel();
        //dd($request);
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->subject=$request->input('subject');
        $contact->message=$request->input('message');

        $contact->save();

        return redirect('/contact')->with('success','Message sent successfully');
    }
}
