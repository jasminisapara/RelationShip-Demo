<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Jobs\TestEmailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    
    public function testmail()
    {
        // $mail = 'jasmin.arsenaltech@gmail.com';
	    // Mail::to($mail)->send(new TestMail);

        // return [
        //     'message' => 'Mail Send Successfully !!'
        // ];

        // $details['email'] = 'jasmin.arsenaltech@gmail.com';

        $data['name'] = "jasmin"; //$request->name
        $data['email'] = "jasmin.arsenaltech@gmail.com"; //$request->email

        dispatch(new TestEmailJob($data));
        return response()->json(['message'=>'Mail Send Successfully!!']);

        
       
        // Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\TestMail($details));
       
        // dd("Email is Sent.");

    }
}
