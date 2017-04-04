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
    return view('welcome');
});



Route::get('/', 'ShowsController@listing', function ($lang) {});
Route::get('/{lang}', 'ShowsController@listing', function ($lang) {});

//Route::get('/shows/{slug}', 'ShowsController@detail', function ($lang, $slug) {});
Route::get('shows/{slug}', 'ShowsController@detail', function ($slug) {});
Route::get('{lang}/shows/{slug}', 'ShowsController@detailTranslate', function ($lang, $slug) {});


//Route::get('import', 'ShowsController@import');
