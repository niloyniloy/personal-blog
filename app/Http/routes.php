<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home','HomeController@index');
Route::get('single_post','HomeController@single_post');

Route::get('contact_me','HomeController@contact_me');
Route::get('about_me','HomeController@about_me');

Route::get('admin/post','admin\PostController@index');
Route::get('admin/all_post','admin\PostController@all_post');
Route::get('admin/add_post','admin\PostController@add_post');
Route::post('admin/post/insert_post','admin\PostController@insert_post');