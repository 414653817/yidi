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

//Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'Admin::'], function(){
//    Route::get('/', ['as' => 'index','uses' => 'HomeController@index']);
//});

//后台管理静态主页面
Route::get('/admin', 'AdminStaticPagesController@home')->name('admin');
//永远显示的桌面页
Route::get('/admin/welcome', 'AdminStaticPagesController@welcome')->name('admin.welcome');

//角色资源路由
Route::resource('role', 'RoleController');

//Route::get('/admin/role', 'RoleController@index')->name('role.index');
//Route::get('/admin/create', 'RoleController@create')->name('role.create');





