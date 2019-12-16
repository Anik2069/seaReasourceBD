<?php

namespace App\Http\Controllers;

use App\outgoing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutgoingController extends Controller
{
    //

    public function history(Request $request){
        $var = new outgoing();
        $var->date = $request->date;
        $var->name = $request->name2;

        $var->price = $request->price;
        $var->pid =$request ->pid;
        $ee=$request ->pid;
        $var ->save();
        return redirect('/profile/'.$ee);
    }
    public function del($id){
        $income11 =DB::select("select pid from outgoings where id=$id");
        $val=0;
        foreach ($income11 as $in){
            $val=$in->pid;

        }
        $income =DB::select("Delete from outgoings where id=$id");
        return redirect('/profile/'.$val);

    }
}
