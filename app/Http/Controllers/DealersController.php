<?php

namespace App\Http\Controllers;

use App\dealers;
use App\incoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DealersController extends Controller
{
    //
    public function index()
    {
        $value=dealers::all();
        return view("admin.dealers",compact('value'));
    }

    public function adddealers(Request $request)
    {
        $var = new dealers();
        $var->date = $request->date;
        $var->name = $request->name;
        $var->tags = $request->tags;
        $var->phone = $request->phone;
        $var->address = $request->address;
        if ($request->hasFile('file_name1')) {
            $file = $request->file('file_name1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '1.' . $extension;
            $file->move('uploads/product/', $filename);
            $var->file_name1 = $filename;
        }


        $var->save();
        return redirect("/addclient");

    }


    public function viewprofile($id){
        $intotal=0;
        $outtotal=0;
        $details=dealers::find($id);
        $income =DB::select("select * from incomings where pid=$id");
        $outcome =DB::select("select * from outgoings where pid=$id");
        foreach ($income as $in){
            $intotal = $intotal +(double)$in->quantity*(double)$in->price;
        }
        foreach ($outcome as $in){
            $outtotal = $outtotal +(double)$in->price;
        }
        return view("admin.dealerprofile",compact('details','income','outcome','intotal','outtotal'));

    }
    public function invoice($id){
        $intotal=0;
        $outtotal=0;
        $details=dealers::find($id);
        $income =DB::select("select * from incomings where pid=$id");
        $outcome =DB::select("select * from outgoings where pid=$id");
        foreach ($income as $in){
            $intotal = $intotal +(double)$in->quantity*(double)$in->price;
        }
        foreach ($outcome as $in){
            $outtotal = $outtotal +(double)$in->price;
        }

return view("admin.dealersinvoice",compact('details','income','outcome','intotal','outtotal'));

    }


}
