<?php

namespace App\Http\Controllers;

use App\blogs;
use App\comment;
use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    //
    public function productinsert(Request $request){
        $product = new product();
        $product->date = $request->date;
        $product->pname = $request->pname;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->description = $request->description;
        if($request ->hasFile('file_name1')){
            $file = $request->file('file_name1');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'1.'.$extension;
            $file ->move('uploads/product/',$filename);
            $product->file_name1=$filename;
        }


        $product ->save();

        return \redirect('/createpost');

    }
    public  function viewproduct(){
        $value = product::all()->toArray();
        return view("admin.postproduct",compact('value'));


    }
    public function createpost(){
        return view("admin.create");
    }
    public function preview($id){
        $details =product::find($id);
        return view("admin.prouductpreview",compact("details"));
    }
    public function viewCustomer () {
        $value = product::where('type','foods')->get()->sortByDesc("id");
        return view('customerview.foodview',compact("value"));
    }
    public function viewCustomer1 () {
        $value = product::where('type','items')->get()->sortByDesc("id");
        return view('customerview.itemview',compact("value"));
    }
    public function viewCustomer2 () {
        $value = blogs::where('category','foods')->get()->sortByDesc("id");
        return view('customerview.foodblog',compact('value'));
    }
    public function viewCustomer3 () {
       $value = blogs::where('category','items')->get()->sortByDesc("id");
        return view('customerview.itemblog',compact('value'));
    }
public  function fooddetails($id)
{
    $value=product::find($id);
    return view('customerview.food-detail',compact("value"));

}
    public  function viewblog($id)
    {
        $value=blogs::find($id);
        $comments =  comment::where('postid',$id)->get()->sortByDesc("id");
        return view('customerview.blogview',compact("value",'comments'));

    }
       public function deleteproduct($id){
        $value=product::find($id);
        $value->delete();
        return redirect('/productpost');

    }
    public function editproduct($id){
        $value=product::find($id);

        return view('admin.edit',compact('value'));

    }

    public function editproduct1(Request $request){
        $id=$request->input('id');
        $product=product::find($id);
        $product->pname = $request->pname;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->description = $request->description;
        if($request ->hasFile('file_name1')){
            $file = $request->file('file_name1');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'1.'.$extension;
            $file ->move('uploads/product/',$filename);
            $product->file_name1=$filename;
        }


        $product ->save();
        return redirect('/productpost');

    }
public function  viewhome(){
    $value = product::where('type','foods')->orderBy('id', 'desc')->paginate(6);
    $value1 = product::where('type','items')->orderBy('id', 'desc')->paginate(6);

    //$value =$value->peginate(3);
    return view('customerview.home',compact('value','value1'));
}


}
