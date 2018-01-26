<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

use App\Mail\ContactMail;
use Validator;

class ContactController extends Controller
{


    public function sendContact(Request $request)
    {
        $fail = json_encode(["type" => "error",
            "message" => "An error occured, please try again later!",
        ]);

        $validate = Validator::make(request()->all(),
            [
                'name' => 'required|min:3',
                'email' => 'required',
                'message' => 'required|min:10',

            ]);

        if ($validate->passes()) {

            Contact::create(request(['name', 'email', 'message']));

            $data =  [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ];
            
            \Mail::to($request->email)->send(new ContactMail($data));


            return response()->json([
                'type' => 'success',
                'message' => \Lang::get('contact.message_sent'),
            ]);
        }


        return response()->json([
            'type' => 'error',
            'message' => $validate->errors()->all(),
        ]);

    }
}
