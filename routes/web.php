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

Route::get('/', function() {return redirect()->to("/landing");});

// Auth
Auth::routes();

// Page Request
Route::get('/landing', 'PageRequestController@viewLanding');
Route::get('/about', 'PageRequestController@viewAbout');
Route::get('/posts', 'PageRequestController@viewPostIndex');
Route::get('/post/{id}', 'PageRequestController@viewPost');

// Admin Page
// ## 1. Post Page
Route::get('/guild-master/create-post', 'PostController@createPost');
Route::post('/guild-master/create-post', 'PostController@store');
Route::get('/guild-master/update', 'PostController@updateIndex');
Route::get('/guild-master/update/{id}', 'PostController@edit');
Route::post('/guild-master/update/{id}', 'PostController@update');
Route::get('/guild-master/delete', 'PostController@deleteIndex');
Route::get('/guild-master/delete/{id}', 'PostController@delete');

