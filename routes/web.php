<?php

use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\teachercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/students', studentController::class);
Route::resource('/teachers', teachercontroller::class);
