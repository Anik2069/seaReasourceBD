<?php

namespace App\Http\Controllers;

use App\blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function viewblogs(){
       $value = blogs::where('category','items')->get()->sortByDesc("id");
       $value1 = blogs::where('category','foods')->get()->sortByDesc("id");
       return view("admin.blogs",compact('value','value1'));

    }
    public function viewpage(){

        return view("admin.blogpost");

    }

    public function store(Request $request){
        $product = new blogs();
        $product->date = $request->date;
        $product->title = $request->title;
        $product->category = $request->type;
        $product->tags = $request->tags;
        $product->description = $request->description;
        if($request ->hasFile('file_name1')){
            $file = $request->file('file_name1');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'1.'.$extension;
            $file ->move('uploads/blogs/',$filename);
            $product->image=$filename;
        }


        $product ->save();

        return \redirect('/createpost');

    }

}
