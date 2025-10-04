<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// les routes pour la gestion des categories

Route::prefix('/categorie')->group(function () {
    Route::get('', [CategorieController::class, 'index']);
    Route::get('/create', [CategorieController::class, 'create'])->name('create-categorie');
})->name('categorie');


Route::prefix('/post')->group(function () {
    Route::get('', [PostController::class, 'index']);
})->name('post');

