<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


require __DIR__ . '/pvt.php';

