<?php

use App\Models\Address;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',function(){
    $users = User::all();
return view('users',compact('users'));
});

Route::get('/addresses',function(){
     $addresses = Address::all();
return view('addresses',compact('addresses'));
});
