<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\JobController::class, 'index']);

//Route::get('/', function () {
//    return view('welcome');
//});
