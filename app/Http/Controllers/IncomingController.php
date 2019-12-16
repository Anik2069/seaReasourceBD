<?php

namespace App\Http\Controllers;

use App\incoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncomingController extends Controller
{
    //
    public function history(Request $request){
        $var = new incoming();
        $var->date = $request->date;
        $var->name = $request->name1;
        $var->quantity = $request->quantity;
        $var->price = $request->price;
        $var->pid =$request ->pid;
        $ee=$request ->pid;
        $var ->save();
        return redirect('/profile/'.$ee);
    }
    public function del($id){
        $income11 =DB::select("select pid from incomings where id=$id");
        $val=0;
        foreach ($income11 as $in){
            $val=$in->pid;

        }
        $income =DB::select("Delete from incomings where id=$id");
        return redirect('/profile/'.$val);

    }
}
