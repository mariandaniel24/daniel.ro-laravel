<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|/*=============================================
=            Section comment block            =
=============================================*/

// main route
Route::get('/', 'HomeController@index');


// contact api
Route::post('/rest-api/contact/store', 'ContactController@sendContact');



// change language

Route::get('/lang/{locale}', 'LanguageController@setLocale');



// send email
Route::get('/mail/send/{message}', 'ContactController@sendEmail');







// API
// Route::get('/rest-api/portfolio/{id}', 'PortfolioController@show');


// GET ALL DATA
// Route::get('/rest-api/portfolio', 'PortfolioController@index');



// TEMPORARY
Route::post('/portfolio/create', 'PortfolioController@create');
