<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('Admin.index');
})->name('admin');

Route::get('/admin/about', function () {
    return view('Admin.about');
})->name('about');

Route::post('/login',[UserController::class,'login'])->name('userlogin');

Route::resource('/user',UserController::class);


