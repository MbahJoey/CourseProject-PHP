<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Route::get('/', function () {
    return view('welcome');
});
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/titles', 'TitlesController');
Route::resource('/authors', 'AuthorsController');
Route::resource('/types', 'TypesController');
Route::resource('/images', 'ImagesController');

Route::post('authors.result', 'SearchController@SearchByAuthor');
Route::post('titles.result', 'SearchController@SearchByAuthor');
Route::post('types.result', 'SearchController@SearchByAuthor');


Auth::routes();

Route::get('/home', 'HomeController@index');
