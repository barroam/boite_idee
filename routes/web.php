<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IdeeController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('base');
});

Route::resource('idee', IdeeController::class);

Route::controller(AuthController::class)->group(function () {
 Route::get('register', 'register');
 Route::post('register', 'registerPost')->name('registerPost');
 Route::get('login','login');
 Route::post('login','loginPost')->name('loginPost');
 Route::delete('logout','logout')->name('logout');
});

Route::resource('categorie',CategoriesController::class);
