<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(Request $request)
    {
        $c = 0;
        $email1 = $request->input('email');
        $pass = $request->input('pass');

        $details = admin::where('email', $email1)->get();

        foreach ($details as $value) {
            if ($email1 == $value['email'] && $pass == $value['pass']) {
                $request->session()->put('user', $email1);
                $request->session()->put('pass', $pass);
                $request->session()->put('id', $value['id']);


                return redirect("/adminhome");

            }
        }
        if ($c == 0) {
            $request->session()->put('user', $email1);
            $request->session()->put('pass', $pass);
            $request->session()->put('id', $c);

            return redirect("/adminlogin");


        }
    }

    public function logout(Request $request){
        $request->session()->flush();

        return redirect("/adminlogin");
    }

}
