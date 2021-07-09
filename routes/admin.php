<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\CategorieController;

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

Route::group(['namespace' => 'Back','prefix'=>'sec-admin/categories/'], function(){

    Route::get('/', [CategorieController::class, 'index']) -> name('categories_list');
});



//Route::get('sec-admin/categories', function () { return view('back.categorie.index'); }) -> name('categories_list');

Route::get('sec-admin/produits', function () { return view('back.categorie.index'); }) -> name('produits_list');

Route::get('sec-admin/blogs', function () { return view('back.categorie.index'); }) -> name('blogs_list');
