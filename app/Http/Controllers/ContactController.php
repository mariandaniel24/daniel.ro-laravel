<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class ContactController extends Controller
{

    public function sendContact(Request $request)
    {

        $validate = Validator::make(request()->all(),
            [
                'name' => 'required|min:3',
                'email' => 'required',
                'message' => 'required|min:10',

            ]);

        if ($validate->passes()) {

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ];

            Contact::create($data);


            // send confirmation email to user
            Mail::to($request->email)->send(new ContactMail($data));


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
