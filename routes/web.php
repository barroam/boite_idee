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
//la route pour la gestions des catégories
Route::resource('categorie',CategoriesController::class);
// la route pour la gestion des commentaires
Route::resource('commentaire',CommentaireController::class);
// les routes pour l'status de l'idée
Route::put('idees/{id}/approuver', [IdeeController::class, 'approuver'])->name('idees.approuver');
Route::put('idees/{id}/refuser', [IdeeController::class, 'refuser'])->name('idees.refuser');
