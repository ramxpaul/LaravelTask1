<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

### Study
Route::get('message/{id}/{name?}',function($id,$name=null){
    echo 'id = '.$id.' name = '.$name;
});

// Route::get('profile',function(){
//     return view('profileData');
// });

// Route::view('profile','profileData');

// Route::view('user/create','user.create'); //uri , view

//creating route for user form action
// Route::post('user/store',function(){
//     dd('Post Request test');
// });


// getting function from controller (from controller to http request)
//$obj = new userController();
//$obj->Message();
Route::get('user/create',[userController::class,'create']);
Route::post('user/store',[userController::class,'store']);
################### End Study


### Blog Create Route
Route::get('blog/create',[blogController::class,'create']);
Route::post('blog/store',[blogController::class,'store']);
Route::get('blog/data',[blogController::class,'blogDisplay']);
