<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Qian;
use App\Models\Iarticle;
use App\Models\Contact;
use DB;
use Hash;   
use Storage;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{   
    // 退出登录
    public function logout() {

        session()->flush();

        return redirect()->route('/');

    }

    // 登录
    public function login() {

        return view('index.login.login');

    }

    // 提交登录
    public function dologin(Request $req) {

        $user = User::where('username',$req->username)->first();

        if($user) {

            if(Hash::check($req->password , $user->password)) {

                session([

                    'id' => $user->id,
                    'username' => $user->username

                ]);

                return redirect()->route('/');

            }else {

                return back()->withErrors('Password error');

            }

        }else {

            return back()->withErrors('Username error');

        }

    }

    // 发送验证码
    public function sendmobilecode(Request $req) {

        $code = rand(100000,999999);

        $name = 'code-'.$req->mobile;

        Cache::put($name,$code,11);

        $config = [
            'accessKeyId'    => 'LTAIsPj8m15I7Qmj',
            'accessKeySecret' => 'dyOtJ8bYYIMZDSwDr48X1ZlpHXvTLO',
        ];
        
        $client  = new Client($config);
        $sendSms = new SendSms;
        $sendSms->setPhoneNumbers($req->mobile);
        $sendSms->setSignName('金蓓蕾幼儿园');
        $sendSms->setTemplateCode('SMS_135033504');
        $sendSms->setTemplateParam(['code' => $code]);
        // $sendSms->setOutId('demo');

        print_r($client->execute($sendSms));

    }

    // 注册
    public function doregist(Request $req) {

        // $name = 'code-'.$req->mobile;

        // $code = Cache::get($name);

        // if(!$code || $code != $req->code) {

        //     return back()->withErrors(['code' => 'Validation code input error']);

        // }

        $password = Hash::make( $req->password );

        $user = new User;
        
        $user->username = $req->username;
        $user->password = $password;
        $user->mobile = $req->mobile;
        $user->code = $req->code;

        $user->save();

        return redirect()->route('login');


    }
    
    // 首页
    public function index() {

        $data = DB::table('asorts')->get();

        $data1 = DB::table('articles')->get();

        $data2 = DB::table('qians')->get();

        $data3 = DB::table('iarticles')->get();

        $data4 = DB::table('bsorts')->get();

        $data5 = DB::table('bjishu')->get();

        return view('index.index',[

            'asort' => $data,
            'article' => $data1,
            'qian' => $data2,
            'iarticle' => $data3,
            'bsort' => $data4,
            'bjishu' => $data5,

        ]);

    }

    // 升级会员
    public function member() {

        return view('index.member');

    }
 
    // 发表文章
    public function index_add() {

        $data = DB::table('asorts')->get();

        $data1 = DB::table('users')->get();

        return view('index.index_add',[

            'asort' => $data,
            'user' => $data1,

        ]);

    }

    // 提交文章表单
    public function doindex_add(Request $req) {

        $iarticle = new Iarticle;

        $iarticle->user_id = session('username');

        $iarticle->fill( $req->all() );

        $iarticle->save();

        return redirect()->route('/');

    }

    // 分类文章
    public function categoryarticle() {

        return view('index.hcategoryarticles');

    }

    // 分类描述
    public function categorydescripte() {

        return view('index.hcategorydescription');

    }

    // 文章列表
    public function articlelist() {

        $data = DB::table('iarticles')->get();

        $data1 = DB::table('asorts')->get();

        $data2 = DB::table('contacts')->get();

        $data3 = DB::table('articles')->get();

        return view('index.articleslist',[

            'iarticle' => $data,
            'asort' => $data1,
            'contact' => $data2,
            'article' => $data3,

        ]);

    }

    // 常见问题解答
    public function faq() {

        $data = DB::table('iarticles')->get();

        $data1 = DB::table('asorts')->get();

        $data2 = DB::table('qians')->get();

        return view('index.faq',[

            'iarticle' => $data,
            'asort' => $data1,
            'qian' => $data2,

        ]);

    }

    // 联系
    public function contact() {

        $data = DB::table('iarticles')->get();

        return view('index.contact',[

            'iarticle' => $data,

        ]);   

    }

    // 提交联系表单
    public function docontact(Request $req) {

        $contact = new Contact;

        $contact->user_id = session('username');

        $contact->fill( $req->all() );

        $contact->save();

        return redirect()->route('/');

    }

    // 文章
    public function article() {

        return view('index.article');

    }

}
