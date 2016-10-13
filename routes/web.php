<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//前台活动页
Route::resource("/huodong","HuodongController");
Route::get('/huodong', function(){
	return view('huodong');
});

//前台门店页
Route::get('/service', function(){
	return view('service');
});

//前台租车页
Route::get('/zuche', function(){
	return view('zuche');
});

//前台顺风车页
Route::get('/easyride', function(){
	return view('easyride');
});

//前台个人中心页
Route::get('/myzuche', function(){
	return view('myzuche');
});

//前台专车页
Route::get('/zhuanche', function(){
	return view('zhuanche');
});

//前台企业租车页
Route::get('/carbusiness', function(){
	return view('carbusiness');
});

//前台注册页
Route::get('/passport', function(){
	return view('passport');
});

//前台登录页
Route::get('/login', function(){
	return view('login');
});

//前台长租页
Route::get('/changzu', function(){
	return view('changzu');
});

//前台到店取还页
Route::get('/order2', function(){
	return view('order2');
});

//前台上门取送页
Route::get('/order1', function(){
	return view('order1');
});

//后台首页
Route::get('/admin', function () {
	return view('admin.base.base');
});

//优惠页面
Route::get('/youhui', function () {
	return view('admin.part.youhui');
});
//后台登录页
Route::get('/login', function () {
	return view('admin.login.login');
});

//用户页
Route::get('/user', function () {
	return view('admin.user.jqtable');
});


Route::get('/jq', function () {
	return view('admin.user.jq');
});
//后台页面，不登录可直接进入的页面
//LoginController	login dologin logout captcha
//登录表单
Route::get('admin/login','Admin\LoginController@login');
//执行登录
Route::post('admin/dologin','Admin\LoginController@dologin');
//验证码
// Route::get("code/{cd}","DemoController@captcha");
Route::get('admin/captcha/{tmp}','Admin\LoginController@captcha');

//后台页面，需要登录才能访问的页面
Route::group(["prefix"=>"admin","middleware"=>"myauth"], function () {
	Route::get("index","Admin\IndexController@index");	//网站后台首页

	Route::get("logout","Admin\LoginController@logout"); //执行退出
});

//编辑器路由
Route::get('admin/edit',function(){
	return view('admin.part.edit');
});


