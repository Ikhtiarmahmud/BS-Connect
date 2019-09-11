<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('frontend.contact.index',compact('contacts'));
    }

    public function create(){
        return view('frontend.contact.create');
    }
    
    public function edit($id){
        $contact = Contact::findorfail($id);
        return view('frontend.contact.edit',compact('contact'));
    }
}
