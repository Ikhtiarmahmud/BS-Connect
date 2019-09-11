<?php

namespace App\Http\Controllers\API;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function data()
    {
        $contact = Contact::all();
        return response()->json($contact);
    }

    public function store(Request $request)
    {
        try {
            $rules = array(
                "name" => 'required',
                "email" => 'required|unique:contacts',
                "designation" => 'required',
                "phone"  => 'required'

            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $json = [
                    'success' => false,
                    'errors'  => $validator->messages()
                ];
                return response()->json($json, 400);
            }
            $contact = Contact::create($request->all());

            return response()->json($contact);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }


    public function update(Request $request, $id)
    {
        try {
            $rules = array(
                "name" => 'required',
                "email" => 'required',
                "designation" => 'required',
                "phone"  => 'required'
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $json = [
                    'success' => false,
                    'errors'  => $validator->messages()
                ];
                return response()->json($json, 400);
            }
            $contact = Contact::find($id);

            $contact->name = $request->input('name');
            $contact->email = $request->input('email');
            $contact->designation = $request->input('designation');
            $contact->phone = $request->input('phone');
            $contact->save();

            return response()->json($contact);
        } catch (Exception $e) {

            return response()->json($e->getMessage(), 500);
        }
    }

    public function destroy($id)
    {
        try {

            $contact = Contact::find($id);
            $contact->delete();
            return response()->json($contact);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
