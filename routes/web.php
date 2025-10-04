<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

// les routes pour la gestion des categories

Route::prefix('/categorie')->group(function () {
    Route::get('', [CategorieController::class, 'index']);
})->name('categorie');



