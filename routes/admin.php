<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\CategorieController;
use App\Http\Controllers\Back\BlogController;


Route::get('sec-admin/dashbord', function () { return view('back.index'); }) -> name('dashbord');

Route::group(['namespace' => 'Back','prefix'=>'sec-admin/categories/'], function(){

    Route::get('/', [CategorieController::class, 'index']) -> name('categories_list');
    Route::get('/add', [CategorieController::class, 'create']) -> name('categories_add');
    Route::post('/save', [CategorieController::class, 'store']) -> name('categories_save');

});

Route::group(['namespace' => 'Back','prefix'=>'sec-admin/blogs/'], function(){

    Route::get('/', [BlogController::class, 'index']) -> name('blogs_list');
    Route::get('/add', [BlogController::class, 'create']) -> name('blogs_add');
    Route::post('/save', [BlogController::class, 'store']) -> name('blogs_save');

});


Route::get('sec-admin/produits', function () { return view('back.categorie.index'); }) -> name('produits_list');

