<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Cache-Control" content="no-siteapp" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="css1/style.css"/>       
        <link href="assets/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/ace.min.css" />
        <link rel="stylesheet" href="font/css/font-awesome.min.css" />
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
		<script src="js1/jquery-1.9.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>  	         	
        <script src="assets/layer/layer.js" type="text/javascript" ></script>          
        <script src="assets/laydate/laydate.js" type="text/javascript"></script>
        <script src="js1/H-ui.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="/images/favicon.png" />

                <!-- Style Sheet-->
                <link rel="stylesheet" href="style.css"/>
                <link rel='stylesheet' id='bootstrap-css-css'  href='/css/bootstrap5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='responsive-css-css'  href='/css/responsive5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='pretty-photo-css-css'  href='/js/prettyphoto/prettyPhotoaeb9.css?ver=3.1.4' type='text/css' media='all' />
                <link rel='stylesheet' id='main-css-css'  href='/css/main5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='custom-css-css'  href='/css/custom5152.html?ver=1.0' type='text/css' media='all' />
                

                <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
                <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
                <![endif]-->
<title>发表文章</title>
</head>

<body>

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



<div class="margin clearfix">
<form action="{{ route('doindex_add') }}" method="post">

{{ csrf_field() }}

 <div class="article_style">
    <div class="add_content" id="form-article-add">
     <ul>
      <li class="clearfix Mandatory">
      <label class="label_name"><i>*</i>文章标题</label><span class="formControls col-10"><input name="iarticle_title" type="text" id="form-field-1" class="col-xs-10 col-sm-5 "></span>
      </li>
      <li class="clearfix Mandatory"><label class="label_name"><i>*</i>文章简介</label>
      <span class="formControls col-10"><input name="iarticle_descri" type="text" id="form-field-1" class="col-xs-10 col-sm-6 "></span>
      </li>
     
      <li class="clearfix"><label class="label_name"><i>*</i>所属分类</label>
       <span class="formControls col-4"><select class="form-control" id="form-field-select-1" name="iarticle_sort">
          <option value="">--选择所属分类--</option>

          @foreach($asort as $s)

          <option>{{ $s->asort_name }}</option>

          @endforeach

       </select>
       </span>
      </li>
      <li class="clearfix"><label class="label_name">显示时间</label>
        <span class="formControls col-10">
        <span class="add_date l_f">
       <label><input name="is_show" type="radio" value="显示"><span class="lbl">显示</span></label>&nbsp;
       <label><input name="is_show" type="radio" value="不显示"><span class="lbl">不显示</span></label></span>
        
        
       </span>
      </li>
      <li class="clearfix"><label class="label_name">文章内容</label>
      <span class="formControls col-10"><script name="iarticle_content" id="editor" type="text/plain" style="width:100%;height:400px; margin-left:10px;"></script> </span>
      </li>
     </ul>
    <div class="Button_operation">
		<button class="btn btn-primary radius" type="submit">提交</button>
	</div>
    </div>
 </div>
 </form>
</div>
</body>
</html>
<script type="text/javascript" src="Widget/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="Widget/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="Widget/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script> 
<script type="text/javascript">
/**提交操作**/
function article_save_submit(){
	     var num=0;
		 var str="";
     $(".Mandatory input[type$='text']").each(function(n){
          if($(this).val()=="")
          {
               
			   layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
                title: '提示框',				
				icon:0,								
          }); 
		    num++;
            return false;            
          } 
		 });
		  if(num>0){  return false;}	 	
          else{
			  layer.alert('添加成功！',{
               title: '提示框',				
			icon:1,		
			  });
			   layer.close(index);	
		  }		  		     					
	}
$(function(){
	var ue = UE.getEditor('editor');
});
/*radio激发事件*/
function Enable(){ $('.date_Select').css('display','block');}
function closes(){$('.date_Select').css('display','none')}
/**日期选择**/
var start = {
    elem: '#start',
    format: 'YYYY/MM/DD',
    min: laydate.now(), //设定最小日期为当前日期
    max: '2099-06-16', //最大日期
    istime: true,
    istoday: false,
    choose: function(datas){
         end.min = datas; //开始日选好后，重置结束日的最小日期
         end.start = datas //将结束日的初始值设定为开始日
    }
};
var end = {
    elem: '#end',
    format: 'YYYY/MM/DD',
    min: laydate.now(),
    max: '2099-06-16 ',
    istime: true,
    istoday: false,
    choose: function(datas){
        start.max = datas; //结束日选好后，重置开始日的最大日期
    }
};
laydate(start);
laydate(end);
</script>
