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

Auth::routes();
//Users
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users','UserController');
Route::get('users/destroy/{id}',['as'=>'users/destroy','uses' =>'UserController@destroy']);
Route::post('users/show', ['as'=>'users/show','uses'=>'UserController@show']);
Route::post('users/update/{id}',['as'=>'users/update','uses'=>'UserController@update']);

//Movies
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('movie','MovieController');
Route::get('movie/destroy/{id}',['as'=>'movie/destroy','uses' =>'MovieController@destroy']);
Route::post('movie/show', ['as'=>'movie/show','uses'=>'MovieController@show']);
Route::post('movie/update/{id}',['as'=>'movie/update','uses'=>'MovieController@update']);

//Type_statuses
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('type_statuses','TypeStatusesController');
Route::get('type_statuses/destroy/{id}',['as'=>'type_statuses/destroy','uses' =>'TypeStatusesController@destroy']);
Route::post('type_statuses/show', ['as'=>'type_statuses/show','uses'=>'TypeStatusesController@show']);
Route::post('type_statuses/update/{id}',['as'=>'type_statuses/update','uses'=>'TypeStatusesController@update']);

//Statuses
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('statuses','StatusesController');
Route::get('statuses/destroy/{id}',['as'=>'statuses/destroy','uses' =>'StatusesController@destroy']);
Route::post('statuses/show', ['as'=>'statuses/show','uses'=>'StatusesController@show']);
Route::post('statuses/update/{id}',['as'=>'statuses/update','uses'=>'StatusesController@update']);

//Categories
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('categories','CategoriesController');
Route::get('categories/destroy/{id}',['as'=>'categories/destroy','uses' =>'CategoriesController@destroy']);
Route::post('categories/show', ['as'=>'categories/show','uses'=>'CategoriesController@show']);
Route::post('categories/update/{id}',['as'=>'categories/update','uses'=>'CategoriesController@update']);

//Roles
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('roles','RolesController');
Route::get('roles/destroy/{id}',['as'=>'roles/destroy','uses' =>'RolesController@destroy']);
Route::post('roles/show', ['as'=>'roles/show','uses'=>'RolesController@show']);
Route::post('roles/update/{id}',['as'=>'roles/update','uses'=>'RolesController@update']);

//Rentals
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('rentals','RentalsController');
Route::get('rentals/destroy/{id}',['as'=>'rentals/destroy','uses' =>'RentalsController@destroy']);
Route::post('rentals/show', ['as'=>'rentals/show','uses'=>'RentalsController@show']);
Route::post('rentals/update/{id}',['as'=>'rentals/update','uses'=>'RentalsController@update']);
