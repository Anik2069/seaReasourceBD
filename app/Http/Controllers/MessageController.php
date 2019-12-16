<?php

namespace App\Http\Controllers;

use App\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function sendmessage(Request $request){

      $message = new message();
        $message->name= $request->name;
        $message->email= $request->email;
        $message->subject= $request->subject;
        $message->comments= $request->comments;
        $message->save();
        return redirect("/contact")->with('success','Message Is send Successfully !!!!!!');


    }

    public  function viewMessage(){
        $value = message::all()->toArray();
        return view("admin.checkmessage",compact('value'));


    }

}
