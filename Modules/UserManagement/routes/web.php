<?php

use Illuminate\Support\Facades\Route;
use Modules\UserManagement\app\Http\Controllers\UserManagementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('users', UserManagementController::class)->only(['index', 'create', 'update', 'destroy']);

Route::prefix('users')->group(function () {
    Route::post('/create', [UserManagementController::class, 'create']);
});

