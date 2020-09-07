<?php

use Illuminate\Support\Facades\Route;

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





Route::middleware(['web', 'guest'])->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
});

Route::middleware(['web','auth'])->group(function () {
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/logout', 'Auth\LoginController@logout');

    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/users', 'UserController@index');
    Route::get('/users/add', 'UserController@add'); //
    Route::post('/users/create', 'UserController@create'); //

    Route::get('/walletsend', 'WalletController@create')->middleware('permission:add_payment');;
    Route::post('/walletsend', 'WalletController@store')->middleware('permission:add_payment');
    Route::get('/walletview', 'WalletController@userstable');

    Route::get('/bio/add', 'UsersbioController@index'); //
    Route::post('/bio/create','UsersbioController@store'); //

    Route::get('/doc/add', 'Doc\DocController@create'); //
    Route::post('/doc/store', "Doc\DocController@store"); //
    Route::get('/doc/view', "Doc\DocController@view") ;
    Route::get('/doc/edit/{id}', 'Doc\DocController@edit'); //
    Route::post('/doc/update/{id}', 'Doc\DocController@update'); //
    Route::delete('/doc/delete/{id}', ['as' => 'doc.delete', 'uses' => 'Doc\DocController@destroy']) ; //

    Route::get('/permissions', 'PermissionsController@index')->name('perms');
    Route::get('/permissions/{id}/edit', 'PermissionsController@edit')->name('editpermissions');
    Route::put('/permissions/{id}/update', 'PermissionsController@update')->name('update');

    Route::get('/roles', 'RolesController@index')->name('rolesshow');
    Route::get('/roles/{id}/edit', 'RolesController@edit')->name('editroles');
    Route::get('/roles/create', 'RolesController@create')->name('createroles');
    Route::post('/roles/store', 'RolesController@store')->name('rolestore');
    Route::post('/roles/{id}/destroy', 'RolesController@destroy')->name('rolesdelete');
    Route::put('/roles/{id}/update', 'RolesController@update')->name('updateroles');

    Route::get('/roles-assignment', 'RolesAssignmentController@index')->name('asignindex');
    Route::get('/roles-assignment/{id}/edit', 'RolesAssignmentController@edit')->name('asignedit');
    Route::put('/roles-assignment/{id}/update', 'RolesAssignmentController@update')->name('asignupdate');

});

