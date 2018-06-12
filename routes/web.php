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

//后台路由前缀,命名空间
Route::group(['prefix'=>'admin', 'namespace'=>'Console'], function () {
    //后台管理静态主页面
    Route::get('index', 'IndexController@index')->name('admin.index');
    //永远显示的桌面页
    Route::get('welcome', 'IndexController@welcome')->name('admin.welcome');

    //角色管理
    Route::resource('role', 'RoleController', ['except' => 'show', 'names' => ['store' => 'role.create', 'update' => 'role.edit']]);

    //系统设置--以下路由临时添加防报错
    Route::resource('system', 'SystemController');
    //商户后台菜单
    Route::resource('merchant_power', 'MerchantPowerController');
    //代理商后台菜单
    Route::resource('agent_power', 'AgentPowerController');
    //系统后台菜单
    Route::resource('admin_power', 'AdminPowerController');
    //api日志
    Route::resource('api_log', 'ApiLogController');
    //商户ip管理
    Route::resource('ipTable', 'IpTableController');
    //非商户ip管理
    Route::get('ipTable/noindex', 'IpTableController@noindex')->name('ipTable.noindex');
    //商户列表
    Route::resource('merchant', 'MerchantController');
    //商户审核
    Route::resource('merchant_audit', 'MerchantAuditController');
    //商户回调
    Route::resource('merchant_callback', 'MerchantCallbackController');
    //代理商列表
    Route::resource('agent', 'AgentController');
    //代理商审核
    Route::resource('agent_audit', 'AgentAuditController');
    //通道列表
    Route::resource('access', 'AccessController');
    //微联宝商户管理
    Route::resource('wlbMerchant', 'WlbMerchantController');
    //山东高速商户管理
    Route::resource('sdMerchant', 'SdMerchantController');
    //汇享商户管理
    Route::resource('hxMerchant', 'HxMerchantController');
    //公告列表
    Route::resource('notice', 'NoticeController');
    //文档列表
    Route::resource('file', 'FileController');
    //订单列表
    Route::resource('order', 'OrderController');
    //操作员管理
    Route::resource('operator', 'OperatorController');
    //账户管理
    Route::resource('account', 'AccountController');
});

Route::get('login', 'LoginController@create')->name('login');
Route::post('login', 'LoginController@store')->name('login');
Route::delete('logout', 'LoginController@destroy')->name('logout');

Route::get('/helper/captcha', 'HelperController@captcha')->name('helper.captcha');
//Route::get('/admin/role', 'RoleController@index')->name('role.index');
//Route::get('/admin/create', 'RoleController@create')->name('role.create');





