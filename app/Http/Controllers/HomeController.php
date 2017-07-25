<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    //


    public function sendUserMessage(Request $request){
    	\Mail::send('email_send', ['name'=>$request->name,'comment'=>$request->comment,'mobile'=>$request->mobile], function($message){
            
            $message->to("georgiajcode@gmail.com", "FROM JCODE WEB")
                ->subject('NEW INQUIRY');
        });

        \Session::flash("success","YOUR MESSAGE HAS BEEN SENT,WE WILL CONTACT YOU IF MOBILE IS CORRECT");
        return redirect('/contact');
    }
}
