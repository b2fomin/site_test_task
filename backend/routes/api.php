<?php

use App\Http\Controllers\API\JobController;
use App\Http\Controllers\API\ProjectController;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::resource('jobs', JobController::class);
Route::resource('projects', ProjectController::class);
