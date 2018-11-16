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

Route::get('/it-admin', 'UserController@index');


Route::get('/it-admin/users', 'UserController@user_index');
Route::get('/it-admin/users/data', 'UserController@usertable');


Route::get('/it-admin/conditions', 'ConditionController@index');
Route::get('/it-admin/conditions/data', 'ConditionController@conditiontable');

Route::get('/it-admin/types', 'TypeController@index');
Route::get('/it-admin/types/data', 'TypeController@typetable');



Route::get('/it-admin/specifications', 'SpecificationController@index');
Route::get('/it-admin/specifications/data', 'SpecificationController@specificationtable');



Route::get('/it-admin/inzercia', 'AdvertisementController@index');
Route::get('/it-admin/inzercia/data', 'AdvertisementController@table');


//END OF MAIN PAGES

//EDIT PAGES

Route::get('/it-admin/edit/{id}','UserController@edit');
Route::post('/it-admin/edited/',[  'as' => 'updates',
        'uses' =>'UserController@edit_validator']);


Route::get('/it-admin/conditions/edit/{id}','ConditionController@edit');
Route::post('/it-admin/conditions/edited/',[  'as' => 'updates',
    'uses' =>'ConditionController@edit_validator']);


Route::get('/it-admin/types/edit/{id}','TypeController@edit');
Route::post('/it-admin/types/edited/',[  'as' => 'updates',
    'uses' =>'TypeController@edit_validator']);


Route::get('/it-admin/specifications/edit/{id}','SpecificationController@edit');
Route::post('/it-admin/specifications/edited/',[  'as' => 'updates',
    'uses' =>'SpecificationController@edit_validator']);


Route::get('/it-admin/inzercia/edit/{id}','AdvertisementController@edit');
Route::post('/it-admin/inzercia/edited/',[  'as' => 'updates',
    'uses' =>'AdvertisementController@edit_validator']);

//END OF EDIT PAGES



//DELETE PAGES

Route::get('/it-admin/delete/{id}', [
    'as' => 'delete', 'uses' => 'UserController@delete'
]);

Route::get('/it-admin/conditions/delete/{id}', [
    'as' => 'delete', 'uses' => 'ConditionController@delete'
]);


Route::get('/it-admin/types/delete/{id}', [
    'as' => 'delete', 'uses' => 'TypeController@delete'
]);


Route::get('/it-admin/specifications/delete/{id}', [
    'as' => 'delete', 'uses' => 'SpecificationController@delete'
]);

Route::get('/it-admin/inzercia/delete/{id}', [
    'as' => 'delete', 'uses' => 'AdvertisementController@delete'
]);


//END OF DELETE PAGES



//EXAMPLE USSES ONLY



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
