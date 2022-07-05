<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\EnquiryMail;

class EmailController extends Controller
{
    public function index(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'message' => 'required',
            'sku' => 'required',
            'qty' => 'required',
        ]);
         
        Mail::to('sales@artemirate.com')->send(new EnquiryMail($request));
           
        return redirect()->route('enquiry')
                        ->with('success','Enquiry has been sent successfully! Thank you for your message and our team will reach out you shortly.');
    }
}
