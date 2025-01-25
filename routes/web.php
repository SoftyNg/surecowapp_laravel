<?php

use Illuminate\Support\Facades\Route;
use Modules\UserManagement\app\Http\Controllers\UserManagementController;


Route::get('/', function () {
    return view('home');
});
    Route::get('/users', [UserManagementController::class,'index']);
    Route::get('/register', [UserManagementController::class,'register']);

