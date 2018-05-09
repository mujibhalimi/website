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

Route::get('/', 'HomeController@index');


Route::get('/admin', 'DashboardController@index');

//Users
Route::get('admin/users', 'UserController@index');
Route::get('admin/users/view/{userId}', 'UserController@viewUser');
Route::get('admin/users/update/{userId}', 'UserController@updateUser');

//Resources
Route::get('admin/resources', 'ResourceController@index');
Route::get('admin/resources/view/{resourceId}', 'ResourceController@viewResource');

Route::get('admin/reports/ddl', 'ReportController@index');
Route::get('admin/reports/ga', 'ReportController@gaReport');

//Pages
Route::get('admin/pages','PageController@index');

//News
Route::get('admin/news','NewsController@index');

//Menu
Route::get('admin/menu','MenuController@index');

//Menu
Route::get('admin/settings','SettingController@index');

Auth::routes();

Route::get('/logout', function() {
    Auth::logout();
    return redirect('/home');
});
Route::get('/home', 'HomeController@index')->name('home');
