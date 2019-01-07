<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    // 首页
    public function admin_index() {

        return view('admin.admin_index');

    }

    // 系统
    public function admin_home() {

        return view('admin.admin_home');

    }

}
