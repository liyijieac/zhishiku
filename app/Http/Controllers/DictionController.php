<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionController extends Controller
{
    
    // 管理员列表
    public function admin_adminstrator() {

        return view('admin.diction.admin_adminstrator');

    }

    // 权限管理
    public function admin_role() {

        return view('admin.diction.admin_role');

    }

    // 个人信息
    public function admin_info() {

        return view('admin.diction.admin_info');

    }

    // 添加权限
    public function admin_add_role() {

        return view('admin.diction.admin_add_role');

    }

}
