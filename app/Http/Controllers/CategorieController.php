<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index() {
        return view('catgorie.categories-index');
    }

    public function create() {
        return view('catgorie.categorie-create');
    }
}
