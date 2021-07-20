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

Route::middleware(['auth'])->get('/', function () { return redirect()->route('users.all');});

Route::name('users.')
    ->prefix('user')
    ->group(function () {
        Route::middleware(['auth'])
            ->group(function () {
                Route::get('', 'UsersController@all')->name('all');
                Route::get('profile/{id}', 'UsersController@profile')->name('profile');
                Route::middleware(['IsAdminOrOwner'])
                    ->group(function () {
                        Route::get('create', 'UsersController@create')->name('create');
                        Route::post('store', 'UsersController@store')->name('store');

                        Route::get('edit/{id}', 'UsersController@editInfo')->name('edit_info');
                        Route::post('edit/{id}', 'UsersController@updateInfo')->name('update_info');

                        Route::get('security/{id}', 'UsersController@editSecurity')->name('edit_security');
                        Route::post('security/{id}', 'UsersController@updateSecurity')->name('update_security');

                        Route::get('status/{id}', 'UsersController@editStatus')->name('edit_status');
                        Route::post('status/{id}', 'UsersController@updateStatus')->name('update_status');

                        Route::get('avatar/{id}', 'UsersController@editAvatar')->name('edit_avatar');
                        Route::post('avatar/{id}', 'UsersController@updateAvatar')->name('update_avatar');

                        Route::get('delete/{id}', 'UsersController@delete')->name('delete');
                    });
            });
    });
