<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('users',[UserController::class,'addMember']);
Route::get('delete/{id}',[UserController::class,'delete']);
Route::post('update/{id}',[UserController::class,'update']);
Route::get("operations",[UserController::class,'operations']);
Route::get("joins",[UserController::class,'joins']);
Route::get("access",[UserController::class,'accesors']);

Route::get('relation',[EmployeeController::class,'get']);



