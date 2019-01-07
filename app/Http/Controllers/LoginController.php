<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Login;
use Hash;

class LoginController extends Controller
{   
    // 退出登录
    public function admin_logout() {

        session()->flush();

        return redirect()->route('admin_login');

    }
    
    //登录
    public function admin_login() {

        return view('admin.admin_login');

    }

    // 提交登录表单
    public function doadmin_login(Request $req) {

        $login = Login::where('admin_name',$req->admin_name)->first();

        if($login) {

            if(Hash::check( $req->admin_password , $login->admin_password )) {

                session([

                    'id'=>$login->id,
                    'admin_name'=>$login->admin_name

                ]);

                return redirect()->route('admin_index');

            }else {

                return back()->withErrors('密码错误');

            }

        }else {

            return back()->withErrors('用户名错误');

        }

    }
}
