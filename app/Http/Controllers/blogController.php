<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function create(){
       return view('blog.create');
    }

    public function store(Request $request){
        //   dd($request);
        $this->validate($request,[
            'title'=>'required|min:3|max:20',
            'content'=>'required|min:10',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $title = $request->title;
        $content = $request->content;
        $image = $request->file('image');
        $newImage = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path("images"),$newImage);
        session()->flash('image',$newImage);
        $blogData = ['title'=>$title,'content'=>$content];
        return view('blog.blogData',['data'=>$blogData]);
    }

}
