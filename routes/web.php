<?php

use App\Http\Controllers\studentcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/students', studentcontroller::class);
