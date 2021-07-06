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

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('/', function () { return redirect()->route('users.all');});
    Route::get('/users', 'UsersController@all')->name('users.all');
    Route::get('/user/profile/{id}', 'UsersController@profile')->name('users.profile');
});

Route::group(['middleware' => ['auth', 'IsAdminOrOwner']], function () {
    Route::get('/user/create', 'UsersController@create')->name('users.create');
    Route::post('/user/store', 'UsersController@store')->name('users.store');

    Route::get('/user/edit/{id}', 'UsersController@editInfo')->name('users.edit_info');
    Route::post('/user/edit/{id}', 'UsersController@updateInfo')->name('users.update_info');

    Route::get('/user/security/{id}', 'UsersController@editSecurity')->name('users.edit_security');
    Route::post('/user/security/{id}', 'UsersController@updateSecurity')->name('users.update_security');

    Route::get('/user/status/{id}', 'UsersController@editStatus')->name('users.edit_status');
    Route::post('/user/status/{id}', 'UsersController@updateStatus')->name('users.update_status');

    Route::get('/user/avatar/{id}', 'UsersController@editAvatar')->name('users.edit_avatar');
    Route::post('/user/avatar/{id}', 'UsersController@updateAvatar')->name('users.update_avatar');

    Route::get('/user/delete/{id}', 'UsersController@delete')->name('users.delete');
});
