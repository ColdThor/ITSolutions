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


//LOGIN SCREEN

Route::get('/it-admin/login', array('uses' => 'UserController@showlogin'));
Route::post('/it-admin/login', array('uses' => 'UserController@dologin'));

Route::get('/it-admin/logout', array('uses' => 'UserController@logout'));
//



//MAIN ADMIN PAGES

Route::get('/', 'UserController@index');


Route::get('/users', 'UserController@user_index');
Route::get('/users/data', 'UserController@usertable');


Route::get('/conditions', 'ConditionController@index');
Route::get('/conditions/data', 'ConditionController@conditiontable');

Route::get('/types', 'TypeController@index');
Route::get('/types/data', 'TypeController@typetable');



Route::get('/specifications', 'SpecificationController@index');
Route::get('/specifications/data', 'SpecificationController@specificationtable');



Route::get('/inzercia', 'AdvertisementController@index');
Route::get('/inzercia/data', 'AdvertisementController@table');


//END OF MAIN PAGES

//EDIT PAGES

Route::get('/edit/{id}','UserController@edit');
Route::post('/edited/',[  'as' => 'updates',
        'uses' =>'UserController@edit_validator']);


Route::get('/conditions/edit/{id}','ConditionController@edit');
Route::post('/conditions/edited/',[  'as' => 'updates',
    'uses' =>'ConditionController@edit_validator']);


Route::get('/types/edit/{id}','TypeController@edit');
Route::post('/types/edited/',[  'as' => 'updates',
    'uses' =>'TypeController@edit_validator']);


Route::get('/specifications/edit/{id}','SpecificationController@edit');
Route::post('/specifications/edited/',[  'as' => 'updates',
    'uses' =>'SpecificationController@edit_validator']);


Route::get('/inzercia/edit/{id}','AdvertisementController@edit');
Route::post('/inzercia/edited/',[  'as' => 'updates',
    'uses' =>'AdvertisementController@edit_validator']);

//END OF EDIT PAGES



//DELETE PAGES

Route::get('/delete/{id}', [
    'as' => 'delete', 'uses' => 'UserController@delete'
]);

Route::get('/conditions/delete/{id}', [
    'as' => 'delete', 'uses' => 'ConditionController@delete'
]);


Route::get('/types/delete/{id}', [
    'as' => 'delete', 'uses' => 'TypeController@delete'
]);


Route::get('/specifications/delete/{id}', [
    'as' => 'delete', 'uses' => 'SpecificationController@delete'
]);

Route::get('/inzercia/delete/{id}', [
    'as' => 'delete', 'uses' => 'AdvertisementController@delete'
]);


//END OF DELETE PAGES

















//EXAMPLE USSES ONLY



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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
