<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMails;

class ContactMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'company_name' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'company_name' => $request->company_name,
            'message' => $request->message,
        ];
    
        Mail::to('nirajbyanju1234@gmail.com')->send(new ContactMails($data));
    
         return redirect()->back()->with('success', 'Email sent successfully!'); 
    }
}
