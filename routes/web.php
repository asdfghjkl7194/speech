<?php
/* laravel主页*/
//Route::get('/', function () {
//	return view('welcome');
//});

Route::get('/', 'admin\Index@welcome');
Route::prefix('admin')->group(function(){
	Route::get('/', 'admin\Index@welcome');
	
	/* 用户管理*/
	Route::get('member_list', 'admin\Index@member_list');	// 会员列表
	Route::get('member_del','admin\Index@member_del');	// 会员删除
	
	/* 借书管理*/
	Route::get('order_list','admin\Index@order_list');	// 订单列表
	
	/* 后台管理*/
	Route::get('admin_list','admin\Index@admin_list');	// 订单列表
	Route::get('admin_role','admin\Index@admin_role');	// 订单列表
	
});