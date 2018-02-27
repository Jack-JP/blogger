<?php

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

Route::get('/', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
*/
Route::get('/posts', function(){ return 'admin section'; });

Route::get('/singleposts', function(){ return 'admin section'; });

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin', function(){ return 'admin section'; });

/*
|--------------------------------------------------------------------------
| Admin posts Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin/posts', function(){ return 'admin posts section'; });
Route::get('/admin/posts/create', function(){ return 'admin create posts section'; });
Route::post('/admin/posts/store', function(){ return 'admin store posts section'; });

/*
|--------------------------------------------------------------------------
| Admin categories Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin/categories', function(){ return 'admin categories section'; });
Route::get('/admin/categories/create', function(){ return 'admin create categories section'; });
Route::post('/admin/categories/store', function(){ return 'admin store categories section'; });
