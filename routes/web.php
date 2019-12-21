<?php
/* laravel主页*/
//Route::get('/', function () {
//	return view('welcome');
//});

Route::get('/', 'admin\Index@welcome');
Route::prefix('admin')->group(function(){
	Route::get('/', 'admin\Index@welcome');
	
	/* 借书管理*/
	Route::get('member_list', 'admin\Index@member_list');// 展示
	Route::get('member_add','admin\Index@member_add');	// 添加
	
	/* 所有书籍*/
	Route::get('order_list','admin\Index@order_list');	// 订单列表
	Route::get('order_add','admin\Index@order_add');	// 订单列表
	
	/* 后台管理*/
	Route::get('admin_list','admin\Index@admin_list');	// 订单列表
//	Route::get('admin_role','admin\Index@admin_role');	// 订单列表
	
});