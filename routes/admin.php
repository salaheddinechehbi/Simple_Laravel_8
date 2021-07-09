<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\CategorieController;


Route::get('sec-admin/dashbord', function () { return view('back.index'); }) -> name('dashbord');

Route::group(['namespace' => 'Back','prefix'=>'sec-admin/categories/'], function(){

    Route::get('/', [CategorieController::class, 'index']) -> name('categories_list');
    Route::get('/add', [CategorieController::class, 'create']) -> name('categories_add');
    Route::post('/save', [CategorieController::class, 'store']) -> name('categories_save');
});


Route::get('sec-admin/produits', function () { return view('back.categorie.index'); }) -> name('produits_list');

Route::get('sec-admin/blogs', function () { return view('back.categorie.index'); }) -> name('blogs_list');
