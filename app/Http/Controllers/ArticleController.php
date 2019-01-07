<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qian;
use App\Models\Asort;
use App\Models\Login;
use App\Models\Article;
use DB;

class ArticleController extends Controller
{
    
    // 文章列表
    public function admin_article() {

        $data = DB::table('asorts')->get();

        $data1 = DB::table('articles')->get();

        return view('admin.article.admin_article',[

            'sort' => $data,
            'article' => $data1,

        ]);

    }

    // 文章分类
    public function admin_article_sort() {

        $data = DB::table('logins')->get();

        $data1 = DB::table('asorts')->get();

        return view('admin.article.admin_article_sort',[

            'alogin' => $data,
            'asort' => $data1,

        ]);
    }

    // 添加分类
    public function doadmin_article_sort(Request $req) {

        $asort = new Asort;

        $asort->user_id = session('id');

        $asort->fill( $req->all() );

        $asort->save();

        return redirect()->route('admin_article_sort');

    }

    // 删除分类
    public function article_delete($id) {

        $asort = Asort::where('id',$id)->delete();

        return redirect()->route('admin_article_sort');

    }

    // 添加文章
    public function admin_add() {

        $data = DB::table('asorts')->get();

        $data1 = DB::table('logins')->get();

        return view('admin.article.admin_add',[

            'asort' => $data,
            'alogin' => $data1,

        ]);

    }

    // 提交文章表单
    public function doadmin_add(Request $req) {

        $article = new Article;

        $article->fill( $req->all() );

        $article->save();

        return redirect()->route('admin_article');

    }

    // 删除文章
    public function admin_article_delete($id) {

        $article = Article::where('id',$id)->delete();

        return redirect()->route('admin_article');

    }

    // 添加标签
    public function admin_add_qian() {

        return view('admin.article.admin_add_qian');

    }

    // 提交标签表单
    public function doadmin_add_qian(Request $req) {

        $qian = new Qian;

        $qian->fill( $req->all() );

        $qian->save();

        return redirect()->route('admin_article_sort');
        
    }

}
