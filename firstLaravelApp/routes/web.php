<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CommanController;
use  App\Http\Controllers\CommanService;
use  App\Http\Controllers\ProductController;
use Illuminate\Http\Request;


Route::get('/', function () {
    echo "<h1>Welcome to laravel app</h1>";
});

// Route::get('/home',function(){
//     return view('home',["name"=>]);
// });

Route::view('/home', 'home');
Route::view('/home', 'home',["name"=>"megha"]);

Route::get('/test',[CommanController::class,'testcontroller'] );

Route::get('/product',function(Request $req){
     print_r($req->all());
});

Route::get('user/{id}',function($id){
    echo $id;
});
Route::get('/comman',CommanService::class);

Route::resource('/product',ProductController::class);

Route::get('/about',[CommanController::class,'aboutShow']);
Route::redirect('/here','test');
