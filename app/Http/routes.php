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


Route::get('/','HomeController@index');
Route::get('category/{id}','HomeController@category');


Route::get('contact_me','HomeController@contact_me');
Route::get('about_me','HomeController@about_me');

Route::get('admin/all_tag','admin\TagController@all_tag');
Route::get('admin/add_tag','admin\TagController@add_tag');
Route::post('admin/insert_tag','admin\TagController@insert_tag');

Route::get('admin/post','admin\PostController@index');
Route::get('admin/all_post','admin\PostController@all_post');
Route::get('admin/add_post','admin\PostController@add_post');
Route::get('admin/edit_post/{id}','admin\PostController@edit_post');
Route::post('admin/post/insert_post','admin\PostController@insert_post');
Route::post('admin/post/update_edit_post','admin\PostController@update_edit_post');


Route::post('admin/category/insert_category','admin\PostController@insert_category');
Route::get('admin/all_category','admin\PostController@all_category');
Route::get('admin/add_category','admin\PostController@add_category');
Route::get('admin/update_category/{id}','admin\PostController@update_category');
Route::post('admin/edit_update_category','admin\PostController@edit_update_category');
Route::post('admin/delete_table','admin\PostController@delete_table');

Route::get('admin/personal_info','admin\PostController@personal_info');
Route::post('admin/update_personal_info','admin\PostController@update_personal_info');

Route::get('{category}/{post_slug}','HomeController@post_details');
