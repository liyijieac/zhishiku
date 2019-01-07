<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use DB;

class UserController extends Controller
{

    // 会员
    public function admin_user() {

        return view('admin.user.admin_user');

    }

    // 留言
    public function admin_gues() {

        $data = DB::table('contacts')->get();

        return view('admin.user.admin_gues',[

            'contact' => $data,

        ]);

    }

    // 删除留言
    public function admin_gues_delete($id) {

        $contact = Contact::where('id',$id)->delete();

        return redirect()->route('admin_gues');

    }

}
