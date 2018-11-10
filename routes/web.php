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

Route::get('/', 'UserController@index');
Route::get('data', 'UserController@usertable');





Route::get('test', [
    'as' => 'test', 'uses' => 'TestController@test'
]);


Route::get('test2', [
    'as' => 'test2', 'uses' => 'TestController@test2'
]);

Route::get('test3', [
    'as' => 'test3', 'uses' => 'TestController@test3'
]);



Route::get('/insert', [
    'as' => 'insert', 'uses' => 'UserController@insert'
]);


Route::get('/location', [
    'as' => 'populate', 'uses' => 'LocationController@populate'
]);


Route::get('/show/{id}', [
   'as' => 'show', 'uses' => 'UserController@show'
]);

Route::get('/showall', [
    'as' => 'showall', 'uses' => 'UserController@showall'
]);

Route::get('/update/{id}', [
    'as' => 'update', 'uses' => 'UserController@update'
]);

Route::get('/delete/{id}', [
    'as' => 'delete', 'uses' => 'UserController@delete'
]);