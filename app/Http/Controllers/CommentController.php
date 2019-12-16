<?php

namespace App\Http\Controllers;

use App\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function postcomment(Request $request){
        $com= new comment();
        $com->name=$request->input('name');
        $com->email=$request->input('email');

        $com->subject=$request->input('subject');

        $com->message=$request->input('message');

        $com->postid=$request->input('id');
       $new=$request->input('id');

        $com->save();
        return redirect('/blogview/'.$new);




    }
    public function viewnotification(){
      $value = comment::all()->toArray();

        return view("admin.checknotification",compact('value'));
    }

}
