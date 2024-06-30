<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IdeeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentaireController;

Route::get('/', function () {
    return view('base');
});

Route::resource('idee', IdeeController::class);
// les routes pour l'authentification
Route::controller(AuthController::class)->group(function () {
 Route::get('register', 'register');
 Route::post('register', 'registerPost')->name('registerPost');
 Route::get('login','login');
 Route::post('login','loginPost')->name('loginPost');
 Route::delete('logout','logout')->name('logout');
});

Route::middleware(['auth'])->group(function () {
//la route pour la gestions des catégories
Route::resource('categorie',CategoriesController::class);
// la route pour la gestion des commentaires
Route::resource('commentaire',CommentaireController::class);
});

Route::controller(IdeeController::class)->group(function(){
    Route::middleware('auth')->group(function() {
    Route::put('idees/{id}/approuver', 'approuver')->name('idees.approuver');
    Route::put('idees/{id}/refuser', 'refuser')->name('idees.refuser');
});
});


