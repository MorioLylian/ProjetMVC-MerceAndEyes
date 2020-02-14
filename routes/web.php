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

Route::get('galerie', function () {
    return view('galerie');
});

Route::get('galerieANG', function () {
    return view('galerieANG');
});

Route::get('welcomeANG', function () {
    return view('welcomeANG');
});

Route::get('MailContact', function () {
    return view('MailContact');
});

Route::get('contact','ContactController@create');

Route::post('/contact',[
    'as' => 'contact_path',
    'uses' => 'ContactController@store'
]);
