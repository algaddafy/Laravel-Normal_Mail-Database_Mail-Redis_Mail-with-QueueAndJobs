<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // \Mail::to('nirob@gmail.com')->send(new \App\Mail\SendTestMail());
    dispatch(new \App\Jobs\SendMailJobs());
    return view('welcome');
});
