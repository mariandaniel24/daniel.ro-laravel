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




// API
Route::get('/rest-api/portfolio/show/{id}', 'PortfolioController@show');


// GET ALL DATA
Route::get('/rest-api/portfolio', 'PortfolioController@index');









// TEMPORARY
Route::get('/rest-api/portfolio/dummy', 'PortfolioController@dummy');