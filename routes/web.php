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

Route::get('/', function () {   return view('front.home');  });

Route::get('/about', function () {   return view('front.about.index');  }) -> name('about');

Route::get('/contact', function () {   return view('front.contact.index');  }) -> name('contact');

Route::get('/service', function () {   return view('front.service.index');  }) -> name('service');

Route::get('/service/{id}', function () {   return view('front.service.detail');  }) -> name('service_detail');

Route::get('/blog', function () {   return view('front.blog.index');  }) -> name('blog');

Route::get('/blog/{id}', function () {   return view('front.blog.detail');  });

Route::get('/produit', function () {   return view('front.produit.index');  }) -> name('produit');

Route::get('/produit/{id}', function () {   return view('front.produit.detail');  });

