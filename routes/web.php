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
use App\Http\Controllers\SitemapController;

Route::get('/dbconn', function () {
    return view('dbconn');
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });


Route::get('/', 'UserController@index');
Route::get('/data-fetch', 'UserController@fetchDataByNo')->name('fetch.data');
Route::get('{state}-{code}-rto-vehicle-registration-details/', 'UserController@handleButtonClick');
Route::get('{rtoNo}-rto-vehicle-registration-details-number/', 'UserController@fetchData');

Route::get('/sitemap.xml',  'SitemapController@generate');
