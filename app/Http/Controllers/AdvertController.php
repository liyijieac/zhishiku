<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertController extends Controller
{
    
    // 广告管理
    public function admin_advert() {

        return view('admin.advert.admin_advert');

    }

    // 广告分类管理
    public function admin_advert_sort() {

        return view('admin.advert.admin_advert_sort');

    }

}
