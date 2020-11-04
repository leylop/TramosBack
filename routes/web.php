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

// Route::get('/transactions','TransactionsController@index');

// Route::get('/transactions/create', 'TransactionsController@create');

// Route::get('/transactions/graphs', function () {
//     return view('transactions.transactionsBI');
// });
Route::get('/transactions/index','TransactionsController@index');
Route::get('/transactions/create','TransactionsController@create');
Route::get('/transactions/show','TransactionsController@show');
Route::get('/transactions/edit','TransactionsController@edit');
Route::get('/transactions/update','TransactionsController@update');
Route::any('/transactions/store','TransactionsController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
