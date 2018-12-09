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

Route::get('/user/login', array('uses' => 'HomeController@showlogin'));
Route::post('/user/login', array('uses' => 'HomeController@dologin'));

Route::get('/user/logout', array('uses' => 'HomeController@logout'));
Route::get('/it-admin/logout', array('uses' => 'UserController@logout'));
//

//REGISTER
Route::get('/user/register/','HomeController@showregister');
Route::post('/user/register/',[  'as' => 'updates',
    'uses' =>'HomeController@doregister']);
//END OF REGISTER


//MAIN ADMIN PAGES

Route::get('/it-admin/profile', 'UserController@showprofile');
Route::post('/it-admin/profile/edit/',[  'as' => 'updates',
    'uses' =>'UserController@changepass']);


Route::get('/it-admin', 'ChartController@index');
Route::get('/it-admin/charts', 'ChartController@chart');

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


//ADD ADMIN

Route::get('/it-admin/register/','UserController@showaddAdmin');
Route::post('/it-admin/register/',[  'as' => 'updates',
    'uses' =>'UserController@add_admin']);
// END OF ADD ADMIN
Route::get('/it-admin/noaccess', array('uses' => 'UserController@not_admin'));

//EXAMPLE USES ONLY

Auth::routes();

//LIVE SITE


Route::get('/inzerat/edit/{id}/{owner}','HomeController@show_editinzerat');
Route::post('/inzerat/edited/',[  'as' => 'updates',
    'uses' =>'HomeController@do_editinzerat']);


Route::get('/inzerat/delete/{id}/{owner}', [
    'as' => 'delete', 'uses' => 'HomeController@delete_inzerat'
]);
Route::get('/ziadosti', 'HomeController@ziadosti')->name('ziadosti');
Route::get('/kupa', 'HomeController@kupa')->name('kupa');
Route::get('/navrhy', 'HomeController@navrhy')->name('navrhy');


Route::get('/', 'HomeController@index')->name('home');
Route::get('/it-admin/helpdesk/{id}', 'HelpDeskController@index')->name('helpdesk');
Route::get('/informacie', 'HomeController@informacie')->name('informacie');
Route::get('/zmluvy', 'HomeController@zmluvy')->name('zmluvy');
Route::get('/hypoteky', 'HomeController@hypoteky')->name('hypoteky');
Route::get('/poradenstvo', 'HomeController@poradenstvo')->name('poradenstvo');
Route::get('/inzerat/{id}/{owner}', 'HomeController@showinzerat')->name('inzerat');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/search_all',[
    'as' => 'search_all',
    'uses' => 'HomeController@search_all'
]);
Route::get('/moje_inzeraty', 'HomeController@show_mypage')->name('moje_inzeraty');
Route::get('/pridat', 'HomeController@pridat')->name('pridat');
Route::post('/pridat',[  'as' => 'updates',
    'uses' =>'HomeController@add_advertisement']);

Route::post('/ask_helpdesk',[  'as' => 'updates',
    'uses' =>'HomeController@ask_helpdesk']);

Route::get('/search_results', 'HomeController@results')->name('results');
Route::get('/select', 'HomeController@show_select')->name('select');
