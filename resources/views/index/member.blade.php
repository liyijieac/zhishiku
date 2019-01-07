<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css"/>       
    <link href="assets/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/ace.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <title>Document</title>
    <link rel="shortcut icon" href="/images/favicon.png" />

    <!-- Style Sheet-->
    <link rel="stylesheet" href="style.css"/>
    <link rel='stylesheet' id='bootstrap-css-css'  href='/css/bootstrap5152.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css-css'  href='/css/responsive5152.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='pretty-photo-css-css'  href='/js/prettyphoto/prettyPhotoaeb9.css?ver=3.1.4' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css-css'  href='/css/main5152.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-css-css'  href='/css/custom5152.html?ver=1.0' type='text/css' media='all' />
</head>
<body>
<!-- Start of Header -->
<div class="header-wrapper">
                         <!-- Start of Header -->
                <div class="header-wrapper">
                        <header>
                                <div class="container">


                                        <div class="logo-container">
                                                <!-- Website Logo -->
                                                <a href="/"  title="知识库">
                                                        <img src="/images/logo.png" alt="知识库">
                                                </a>
                                                <span class="tag-line">知识库</span>
                                        </div>


                                        <!-- Start of Main Navigation -->
                                        <nav class="main-nav">
                                                <div class="menu-top-menu-container">
                                                        <ul id="menu-top-menu" class="clearfix">
                                                                <li class="current-menu-item"><a href="/">首页</a></li>
                                                                <li><a href="articlelist">文章列表</a></li>
                                                                <li><a href="faq">常见问题解答</a></li>
                                                                
                                                                @if(session('id'))
                                                                
                                                                <li><a href="contact">联系</a></li>
                                                                <li><a href="index_add">发表文章</a></li>
                                                                <li><a href="">{{ session('username') }}</a>

                                                                <ul class="sub-menu">
                                                                <li><a href="member">升级会员</a></li>
                                                                <li><a href="logout">退出登录</a></li>
                                                                </ul>
                                                                
                                                                </li>
                                                                
                                                                @else
                                                                <li><a href="login">登录</a></li>
                                                                @endif
                                                        </ul>
                                                </div>
                                        </nav>
                                        <!-- End of Main Navigation -->

                                </div>
                        </header>
                </div>
                <!-- End of Header -->
<div class="add_menber" id="add_menber_style">
  
  <ul class=" page-content">
   <li><label class="label_name">用&nbsp;&nbsp;户 &nbsp;名：</label><span class="add_name"><input value="{{ session('username') }}" name="用户名" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
   <li><label class="label_name">真实姓名：</label><span class="add_name"><input name="真实姓名" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
   <li><label class="label_name">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</label><span class="add_name">
   <input name="form-field-radio" type="radio" class="ace" checked><span class="lbl">男</span>&nbsp;&nbsp;&nbsp;
   <input name="form-field-radio" type="radio" class="ace"><span class="lbl">女</span>&nbsp;&nbsp;&nbsp;
   <input name="form-field-radio" type="radio" class="ace"><span class="lbl">保密</span>
   </span>
   <div class="prompt r_f"></div>
   </li>
   <li><label class="label_name">固定电话：</label><span class="add_name"><input name="固定电话" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
   <li><label class="label_name">移动电话：</label><span class="add_name"><input name="移动电话" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
   <li><label class="label_name">电子邮箱：</label><span class="add_name"><input name="电子邮箱" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
   <li class="adderss"><label class="label_name">家庭住址：</label><span class="add_name"><input name="家庭住址" type="text"  class="text_add" style=" width:350px"/></span><div class="prompt r_f"></div></li>
   <li><label class="label_name">状&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;态：</label><span class="add_name">
   <label><input name="form-field-radio1" type="radio" checked="checked" class="ace"><span class="lbl">开启</span></label>&nbsp;&nbsp;&nbsp;
   <label><input name="form-field-radio1"type="radio" class="ace"><span class="lbl">关闭</span></label></span><div class="prompt r_f"></div></li>
  </ul>
</div>
</body>
</html>