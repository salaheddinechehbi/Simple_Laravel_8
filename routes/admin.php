<?php

use Illuminate\Support\Facades\Route;

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

Route::get('sec-admin/dashbord', function () { return view('back.index'); }) -> name('dashbord');

/* Route::namespace('Back') -> group(["prefix"=>"sec-admin/categorie/"], function(){

    //Route::get('sec-admin/categories', function () { return view('back.categorie.index'); }) -> name('categories_list');
    Route::get('/', [UserController::class, 'index']) -> name('categories_list');
}); */


Route::get('sec-admin/categories', function () { return view('back.categorie.index'); }) -> name('categories_list');

Route::get('sec-admin/produits', function () { return view('back.categorie.index'); }) -> name('produits_list');

Route::get('sec-admin/blogs', function () { return view('back.categorie.index'); }) -> name('blogs_list');
