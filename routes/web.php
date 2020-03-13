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

Route::get('galerie', "ProductController@galerie");

Route::get('galerieANG', function () {
    return view('galerieANG');
});

Route::get('welcomeANG', function () {
    return view('welcomeANG');
});

Route::get('MailContact', function () {
    return view('MailContact');
});

Route::get('login', function () {
    return view('login');
});


Route::get('login','LoginController@create');

Route::post('/login',[
    'as' => 'login_path',
    'uses' => 'LoginController@store'
]);




Route::get('admin', function () {
    return view('admin');
});

Route::get('admin','AdminController@create');

Route::post('/admin',[
    'as' => 'admin_path',
    'uses' => 'AdminController@store'
]);




Route::get('contact','ContactController@create');

Route::post('/contact',[
    'as' => 'contact_path',
    'uses' => 'ContactController@store'
]);


