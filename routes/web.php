<?php

use App\Http\Controllers\courseController;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\teachercontroller;
use App\Http\Controllers\batchcontroller;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\Paymentcontroller;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/students', studentController::class);
Route::resource('/teachers', teachercontroller::class);
Route::resource('/courses', courseController::class);
Route::resource('/batches', batchController::class);
Route::resource('/enrollments', EnrollmentController::class);
Route::resource('/payments', PaymentController::class);
