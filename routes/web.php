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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','HomeController@index');
Route::get('login','HomeController@login');
Route::post('add_user','AuthenticationController@add_user');
Route::post('log_in','AuthenticationController@log_in');
Route::get('create','LisenseController@create');
Route::get('registrationlisense','registrationController@registrationlisense');
Route::get('reg2','registrationController@registrationlisense');
Route::get('key_generate','LisenseController@key_generate');
Route::post('make_key','LisenseController@make_key');






