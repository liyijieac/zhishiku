<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ------------------------------------------------    前端   -------------------------------------------------------
// 登录
Route::get('/login','IndexController@login')->name('login');
// 提交登录
Route::post('/dologin','IndexController@dologin')->name('dologin');
// 退出
Route::get('/logout', 'IndexController@logout')->name('logout');

// 升级会员
Route::get('/member','IndexController@member')->name('member');

// 注册
Route::post('/doregist','IndexController@doregist')->name('doregist');

// 注册发送验证码
Route::get('/sendmobilecode', 'IndexController@sendmobilecode')->name('ajax-send-modbile-code');

// 首页
Route::get('/','IndexController@index')->name('/');

// 发表文章
Route::get('/index_add','IndexController@index_add')->name('index_add');
Route::post('/doindex_add','IndexController@doindex_add')->name('doindex_add');


// 文章类表页
Route::get('/articlelist','IndexController@articlelist')->name('articlel');

// 常见问题解答
Route::get('/faq','IndexController@faq')->name('faq');

// 联系
Route::get('/contact','IndexController@contact')->name('contact');
Route::post('/docontact','IndexController@docontact')->name('docontact');

// 文章
Route::get('/article','IndexController@article')->name('article');



// --------------------------------------------------    后端    --------------------------------------------------------------

// 登录
Route::get('/admin_login','LoginController@admin_login')->name('admin_login');
// 提交登录表单
Route::post('/doadmin_login','LoginController@doadmin_login')->name('doadmin_login');

// 后台首页
Route::get('/admin_index','AdminController@admin_index')->name('admin_index');  

// 系统页
Route::get('/admin_home','AdminController@admin_home')->name('admin_home');

// 广告管理
Route::get('/admin_advert','AdvertController@admin_advert')->name('admin_advert');

// 广告分类管理
Route::get('/admin_advert_sort','AdvertController@admin_advert_sort')->name('admin_advert_sort');

// 账户管理
Route::get('/admin_payment','PayController@admin_cover')->name('admin_payment');

// 支付人数
Route::get('/admin_cover','PayController@admin_payment')->name('admin_cover');

// 会员管理
Route::get('/admin_user','UserController@admin_user')->name('admin_user');

// 留言
Route::get('/admin_gues','UserController@admin_gues')->name('admin_gues');

// 删除留言
Route::get('/admin_gues_delete/{id}','UserController@admin_gues_delete')->name('admin_gues_delete');

// 文章列表
Route::get('/admin_article','ArticleController@admin_article')->name('admin_article');

// 文章分类
Route::get('/admin_article_sort','ArticleController@admin_article_sort')->name('admin_article_sort');
Route::post('/doadmin_article_sort','ArticleController@doadmin_article_sort')->name('doadmin_article_sort');

// 删除分类
Route::get('/article_delete/{id}','ArticleController@article_delete')->name('article_delete');

// 添加文章
Route::get('/admin_add','ArticleController@admin_add')->name('admin_add');
Route::post('/doadmin_add','ArticleController@doadmin_add')->name('doadmin_add');

// 删除文章
Route::get('/admin_article_delete/{id}','ArticleController@admin_article_delete')->name('admin_article_delete');

// 添加标签
Route::get('/admin_add_qian','ArticleController@admin_add_qian')->name('admin_add_qian');
Route::post('/doadmin_add_qian','ArticleController@doadmin_add_qian')->name('doadmin_add_qian');

// 管理员列表
Route::get('/admin_adminstrator','DictionController@admin_adminstrator')->name('admin_adminstrator');

// 权限管理
Route::get('/admin_role','DictionController@admin_role')->name('admin_role');

// 添加权限
Route::get('/admin_add_role','DictionController@admin_add_role')->name('admin_add_role');

// 个人信息
Route::get('/admin_info','DictionController@admin_info')->name('admin_info');

