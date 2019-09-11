<?php

namespace App\Http\Controllers;

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
}
