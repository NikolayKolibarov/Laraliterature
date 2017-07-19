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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/search', 'HomeController@search');


Route::resource('authors', 'AuthorsController');

Route::resource('authors.books', 'BooksController');
Route::get('/books', 'BooksController@getBookAuthors')->name('books');

Route::resource('authors.books.characters', 'CharactersController');
Route::get('/characters', 'CharactersController@index')->name('characters');

Route::resource('genres', 'GenresController');

