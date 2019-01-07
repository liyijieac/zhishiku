<!DOCTYPE html>
<html lang="en">

<head>
<title>登陆</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="static/login/bootstrap.min.css" />
<link rel="stylesheet" href="static/login/css/camera.css" />
<link rel="stylesheet" href="static/login/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="static/login/matrix-login.css" />
<link rel="stylesheet" href="static/login/font-awesome.css" />
<script type="text/javascript" src="static/login/js/jquery-1.5.1.min.js"></script>
<!-- 软键盘控件start -->
<link href="static/login/keypad/css/framework/form.css" rel="stylesheet" type="text/css"/>
<!-- 软键盘控件end -->
 <style type="text/css">
      .cavs{
    	z-index:1;
    	position: fixed;
    	width:95%;
    	margin-left: 20px;
    	margin-right: 20px;
    }
  </style>
  <script>
  		//window.setTimeout(showfh,3000); 
  		var timer;
		function showfh(){
			fhi = 1;
			//关闭提示晃动屏幕，注释掉这句话即可
			timer = setInterval(xzfh2, 10); 
		};
		var current = 0;
		function xzfh(){
			current = (current)%360;
			document.body.style.transform = 'rotate('+current+'deg)';
			current ++;
			if(current>360){current = 0;}
		};
		var fhi = 1;
		var current2 = 1;
		function xzfh2(){
			if(fhi>50){
				document.body.style.transform = 'rotate(0deg)';
				clearInterval(timer);
				return;
			}
			current = (current2)%360;
			document.body.style.transform = 'rotate('+current+'deg)';
			current ++;
			if(current2 == 1){current2 = -1;}else{current2 = 1;}
			fhi++;
		};
	</script>
</head>
<body>

	<!--小键盘承载器-->
	<canvas class="cavs"></canvas>
	<div style="width:100%;text-align: center;margin: 0 auto;position: absolute;">
		<!-- 登录 -->
		<div id="windows1">
		<div id="loginbox" >



			<form action="{{ route('dologin') }}" method="post" name="loginForm" id="loginForm">
			{{csrf_field()}}
				<div class="control-group normal_text">
					<h3>
						<img src="static/login/logo.png" alt="Logo" />
					</h3>
				</div>


				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							<i><img height="37" src="static/login/user.png" /></i>
							</span><input type="text" name="username" id="loginname" value="" placeholder="请输入用户名" />
						</div>
					</div>
				</div>


				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_ly">
							<i><img height="37" src="static/login/suo.png" /></i>
							</span><input type="password" name="password" id="password" placeholder="请输入密码" class="keypad" keypadMode="full" allowKeyboard="true" value=""/>
						</div>
					</div>
				</div>


				<div class="form-actions">
					<div style="width:86%;padding-left:8%;">
					<span class="pull-right" style="padding-right:3%;"><a href="javascript:changepage(1);" class="btn btn-success">注册</a></span>
						<span class="pull-right"><button type="submit" class="flip-link btn btn-info" id="to-recover">登录</button></span>
					</div>
				</div>
			</form>




		</div>
		</div>
		<!-- 注册 -->
		<div id="windows2" style="display: none;">
		<div id="loginbox">





			<form action="{{ route('doregist') }}" method="post" name="loginForm" id="loginForm">
			
			{{csrf_field()}}
				<div class="control-group normal_text">
					<h3>
						<img src="static/login/logo.png" alt="Logo" />
					</h3>
				</div>


				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							<i>用户</i>
							</span><input type="text" name="username" id="USERNAME" value="" placeholder="请输入用户名" />
						</div>
					</div>
				</div>



				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_ly">
							<i>密码</i>
							</span><input type="password" name="password" id="PASSWORD" placeholder="请输入密码" class="keypad" keypadMode="full" allowKeyboard="true" value=""/>
						</div>
					</div>
				</div>


				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_ly">
							<i>重输</i>
							</span><input type="password" name="password_confirmation" id="chkpwd" placeholder="请重新输入密码" class="keypad" keypadMode="full" allowKeyboard="true" value=""/>
						</div>
					</div>
				</div>


				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							<i>电话</i>
							</span><input type="text" name="mobile" id="name" value="" placeholder="请输入电话" />
							<input id="btn-send" type="button" value="Click to get the verification code">
						</div>
					</div>
				</div>



				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							<i>验证</i>
							</span><input type="text" name="code" id="name" value="" placeholder="请输入验证码" />
						</div>
					</div>
					<span class="pull-right" style="padding-right:3%;"><button type="submit" class="btn btn-success">注册</button></span>
				</div>

				
			</form>



			
		</div>
		</div>
		
	</div>
	<div id="templatemo_banner_slide" class="container_wapper">
		<div class="camera_wrap camera_emboss" id="camera_slide">
			<!-- 背景图片 -->
			<div data-src="static/login/images/banner_slide_01.jpg"></div>
			<div data-src="static/login/images/banner_slide_02.jpg"></div>
			<div data-src="static/login/images/banner_slide_03.jpg"></div>
			<div data-src="static/login/images/banner_slide_04.jpg"></div>
			<div data-src="static/login/images/banner_slide_05.jpg"></div>
		</div>
		<!-- #camera_wrap_3 -->
	</div>

	<script type="text/javascript">
		
		//登录注册页面切换
		function changepage(value) {
			if(value == 1){
				$("#windows1").hide();
				$("#windows2").show();
				changeCode2();
			}else{
				$("#windows2").hide();
				$("#windows1").show();
				changeCode1();
			}
		}

		var seconds = 60;

		var si;
	</script>
	<script src="static/login/js/bootstrap.min.js"></script>
	<script src="static/js/jquery-1.7.2.js"></script>
	<script src="static/login/js/jquery.easing.1.3.js"></script>
	<script src="static/login/js/jquery.mobile.customized.min.js"></script>
	<script src="static/login/js/camera.min.js"></script>
	<script src="static/login/js/templatemo_script.js"></script>
	<script src="static/login/js/ban.js"></script>
	<script type="text/javascript" src="static/js/jQuery.md5.js"></script>
	<script type="text/javascript" src="static/js/jquery.tips.js"></script>
	<script type="text/javascript" src="static/js/jquery.cookie.js"></script>
	<script src="/js/jquery.min.js"></script>
	
	<!-- 软键盘控件start -->
	<!-- <script type="text/javascript" src="static/login/keypad/js/form/keypad.js"></script>
	<script type="text/javascript" src="static/login/keypad/js/framework.js"></script> -->
	<!-- 软键盘控件end -->
</body>

</html>

<script>

	var seconds = 60;

	var si;

	$("#btn-send").click(function() {

		var mobile = $("input[name=mobile]").val();

		$.ajax({

			type:"GET",
			url:"{{ route('ajax-send-modbile-code') }}",
			data:{mobile:mobile},
			success:function(data){

				$("#btn-send").attr('disabled',true);

				si = setInterval(function() {

					seconds--;
					if(seconds==0) {

						$("#btn-send").attr('disabled',false);
						seconds=60;
						$("#btn-send").val("点击获取验证码");
						clearInterval(si);

					}else {

						$("#btn-send").val("请在"+(seconds)+"秒里面进行验证");

					}

				},1000);

			}

		});

	});

</script>