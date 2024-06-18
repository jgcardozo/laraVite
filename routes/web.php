<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\AdminController;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::prefix('admin')->group(function () {

    Route::get('login', [AdminController::class, 'loginView'])->name('admin.loginView');
    Route::post('login',[AdminController::class,'login'])->name('admin.login');
    Route::get('logout', [AdminController::class,'logout'])->name('admin.logout');

    Route::middleware([LoginMiddleware::class])->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::resource('products', ProductController::class);
        Route::resource('categories', CategoryController::class);
    });
    //    
});


Route::get('file', [FileController::class, 'index']);
Route::post('file', [FileController::class, 'store']);

////////////////////  vue //////////////////////////

Route::get('/home', function () {
    return Inertia::render('Home');
});

Route::get('/contact', function () {
    return Inertia::render('Contact'); //, ['address' => 'Cl. 36 #43 a 48, Villa Del Sur']
});

Route::get('/contact', function () {
    return Inertia::render('Contact'); //, ['address' => 'Cl. 36 #43 a 48, Villa Del Sur']
});