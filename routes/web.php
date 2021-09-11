<?php

use App\Http\Controllers\AtosController;
use App\Http\Controllers\CategoriesController;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;

Route::get('/cnpj', [AtosController::class, 'cnpj']);
Route::get('/navbar', [AtosController::class, 'navbar']);
Route::get('/categories', 'CategoriesController@index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';