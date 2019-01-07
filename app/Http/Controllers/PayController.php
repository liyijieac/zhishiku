<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{

    //账户管理
    public function admin_cover() {

        return view('admin.pay.admin_cover');

    }

    // 支付人数
    public function admin_payment() {

        return view('admin.pay.admin_payment');

    }


}
