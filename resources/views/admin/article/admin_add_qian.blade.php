<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.js"></script>
        <script src="assets/layer/layer.js" type="text/javascript" ></script>          
        <script src="js1/H-ui.js" type="text/javascript"></script>
        <script src="js1/displayPart.js" type="text/javascript"></script>
    <title>Document</title>
    <style>
        
        .tijiao {

            width:70px;
            height:40px;
            color:skyblue;
            margin-left:150px;

        }
    
    </style>
</head>
<body>

<form action="{{ route('doadmin_add_qian') }}" method="post" >
{{ csrf_field() }}
<div id="addsort_style"class="article_style">
 <div class="add_content" id="form-article-add">
    <ul>
     <li class="clearfix Mandatory"><label class="label_name"><i>*</i>标签名字</label>
     <span class="formControls w_txt"><input name="admin_qian" type="text" id="form-field-1" class="col-xs-7 col-sm-5 "></span>
     </li>
     <li class="clearfix"><label class="label_name">标签简介</label>
     <span class="formControls w_txt"><textarea name="admin_qian_descri" class="form-control" id="form_textarea" placeholder="" onkeyup="checkLength(this);"></textarea><span  style=" margin-left:10px;">剩余字数：<span id="sy" style="color:Red;">200</span>字</span></span>
     </li>
    </ul>
 </div>
    <button class="tijiao" type="submit">提交</button>
</div>

</form>

</body>
</html>