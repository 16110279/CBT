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
    return view('main');
});
// Route::get('/berita', function () {
//     return view('berita');
// });

Route::get('/berita', 'MainController@berita');
Route::get('/kiprah-alumni', 'MainController@index');
