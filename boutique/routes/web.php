<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CommandeProduitController;
use App\Http\Controllers\CommandeController;
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

Route::get('/',[WelcomeController::class,'welcome'])->name('welcome');
Route::resource('CommandeProduits',CommandeProduitController::class)->middleware('auth');
Route::resource('Commandes',CommandeController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('produits/{id}',[ProduitController::class,'detailproduit'])->name('detailproduit');

Route::get('categorie/{id}',[WelcomeController::class,'detailcategorie'])->name('detailcategorie');

require __DIR__.'/auth.php';

Route::middleware(['admin','auth'])->prefix('administrateur')->group(function(){

	Route::resource('produits', ProduitController::class);

	Route::resource('categories', CategorieController::class);

});


