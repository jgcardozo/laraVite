<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PassportAuthController;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
 */

/* Route::middleware('auth:api')->post('customer', [CustomerController::class, 'store']);
 */
Route::post('register', [PassportAuthController::class,'register']);

Route::post('login', [PassportAuthController::class, 'login']);

Route::get('user', [UserController::class, 'index']);


Route::delete('customer/{id}', [CustomerController::class, 'destroy']);
Route::get('customer', [CustomerController::class, 'index']);
Route::post('customer', [CustomerController::class, 'store']);
Route::get('customer/{id}', [CustomerController::class, 'show']);
Route::put('customer/{id}', [CustomerController::class, 'update']);

Route::patch('customer/{id}', [CustomerController::class, 'updatePartial']);

//Route::resource('customer', CustomerController::class);



Route::middleware('auth:api')->group(function () {    
    Route::post('logout', [PassportAuthController::class, 'logout']);
}); 

