<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function welcome(){
    	return view('admin.welcome');
    }
    
    /* 用户管理*/
    public function member_list(){
    	return view('admin.member_list');
    }
    public function member_del(){
    	return view('admin.member_del');
    }
    
    /* 借书管理*/
    public function order_list(){
   		return view('admin.order_list');
    }
    
    /* 后台管理*/
    public function admin_list(){
   		return view('admin.admin_list');
    }
    public function admin_role(){
   		return view('admin.admin_role');
    }
}
