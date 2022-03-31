<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::controller(AdminController::class)->prefix('backend-admin')->name('admin.')->group(function () {

    Route::get('index', 'index')->name('index');
    Route::get('view/{admin}', 'view')->name('view');
    Route::post('update/{admin}', 'update')->name('update');
    Route::get('index', 'index')->name('index');
    Route::post('delete/{admin}', 'delete')->name('delete');
});
require __DIR__ . '/admin_auth.php';
require __DIR__ . '/admin.php';
