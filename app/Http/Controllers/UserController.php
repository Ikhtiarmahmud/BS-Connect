<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('frontend.user.create');
    }

    public function showUpdatePasswordForm($id){
        $user = User::findorfail($id);
        return view('auth.passwordForm',compact('user'));
    }
    public function dashboard(){
        $contact_count = Contact::all()->count();
        $user_count     = User::all()->count();
        return view('frontend.index',compact('contact_count','user_count'));
    }
}
