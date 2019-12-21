<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function welcome(){
    	return view('admin.welcome');
    }
    
    /* 借书管理*/
    public function member_list(){
    	return view('admin.member_list');
    }
    public function member_add(){
    	return view('admin.member_add');
    }
    
    /* 所有书籍*/
    public function order_list(){
   		return view('admin.order_list');
    }
    public function order_add(){
   		return view('admin.order_add');
    }
    
    /* 后台管理*/
    public function admin_list(){
   		return view('admin.admin_list');
    }
    public function admin_add(){
   		return view('admin.admin_add');
    }
}
