<?php

namespace App\Http\Controllers\API;

use App\User;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Notifications\UserNotification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;

class UserController extends Controller
{
    public function store(Request $request)
    {
        try {
            $rules = array(
                "email" => 'required'
            );
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $json = [
                    'success' => false,
                    'errors'  => $validator->message()
                ];
                return response()->json($json, 400);
            }

            $pass = Str::random(5);
            session()->put('key', $pass);
            $user = User::create([
                'email'    => $request->email,
                'status'   => 1,
                'password' => Hash::make($pass),
            ]);

            $userid = User::where('id', $user->id)->get();
            Notification::send($userid, new UserNotification($user));

            return response()->json($user);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
    public function updatePassword(Request $request, $id)
    {
        try {
            $user = User::find($id);
            $hashedpassword = $user->password;
            if (Hash::check($request->old_password, $hashedpassword)) {
                $pass = $request->new_password;
                $user->password = Hash::make($pass);
                $user->save();
                return response()->json($user);
            } else {
                return redirect()->back();
            }
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
