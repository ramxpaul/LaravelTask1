<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //make controller faster with php artisan make:controller <controller name>

    // public function Message(){
    //     echo 'Test Message Controller';
    // }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        //dd($request);
        // $_POST['name'];
        echo $request->name;
        echo $request->email;
        echo $request->input('name');
        dd($request->all()); // get all of your data as array
        dd($request->except(['_token'])); // get all of your data except _token and if you need to put more ['any fields you dont need']
        dd($request->only(['name'])); // get only [fields you need] from all the data in the  request
        dd($request->has('email')); // if you want to need if this field exist or not >>> return (t/f)
        dd($request->hasAny(['name,age'])); // its like a question is that request has any of these fields
        dd($request->path()); // get the path only path after view
        dd($request->url());//get all url (without params,query params) the main link
        dd($request->fullUrl());// get all url with every thing
        dd($request->method());// get the method type
        dd($request->isMethod('post')); // to check if the method you are using is [method]return (t/f)
        dd($request->ip());//to get the IP


    }
}
