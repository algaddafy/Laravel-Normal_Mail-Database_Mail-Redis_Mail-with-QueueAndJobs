<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    \Mail::to('nirob@gmail.com')->send(new \App\Mail\SendTestMail());
    return view('welcome');
});
