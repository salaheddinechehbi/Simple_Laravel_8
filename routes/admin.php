<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\CategorieController;
use App\Http\Controllers\Back\BlogController;
use App\Http\Controllers\Back\HomeController;


Route::get('sec-admin/dashbord', [HomeController::class, 'dashbord']) -> name('dashbord');

Route::group(['namespace' => 'Back','prefix'=>'sec-admin/categories/'], function(){

    Route::get('/', [CategorieController::class, 'index']) -> name('categories_list');
    Route::get('/add', [CategorieController::class, 'create']) -> name('categories_add');
    Route::post('/save', [CategorieController::class, 'store']) -> name('categories_save');

});

Route::group(['namespace' => 'Back','prefix'=>'sec-admin/blogs/','middleware' => 'auth' ], function(){

    Route::get('/', [BlogController::class, 'index']) -> name('blogs_list');
    Route::get('/add', [BlogController::class, 'create']) -> name('blogs_add');
    Route::post('/save', [BlogController::class, 'store']) -> name('blogs_save');

});

Route::get('login', [HomeController::class, 'login']) -> name('login');

Route::get('sec-admin/produits', function () { return view('back.categorie.index'); }) -> name('produits_list');


