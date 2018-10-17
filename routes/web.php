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

Route::get('/mailing/create', ['as' => 'mailing.create', 'uses' => 'MailingController@create']);

Route::post('mailing/store', ['as' => 'mailing.store', 'uses' => 'MailingController@store']);
