<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录界面</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">


<link rel="stylesheet" href="/Public/Admin/css/index-bootstrap.css">
<link href="/Public/Admin/index-iconfont/style.css" type="text/css" rel="stylesheet">
<style>
	body{color:#fff; font-family:"微软雅黑"; font-size:14px;}
	.main_content{background:url(img/main_bg.png) repeat; margin-left:auto;
	margin-right:auto; text-align:left; float:none; border-radius:8px;}
</style>
</head>

<body style="background:url(/Public/Admin/img/bg.jpg) no-repeat;">
    <div class="container wrap1" style="height:450px;">
            <h2 class="mg-b20 text-center">大白小说部管理后台</h2>
            <div class="col-sm-8 col-md-5 center-auto pd-sm-50 pd-xs-20 main_content">
                <p class="text-center font16">用户登录</p>
                <form action="/index.php/Index/Index/Index/index" method="post">
                    <div class="form-group mg-t20">
                        <i class="icon-user icon_font"></i>
                        <input name="username" type="text" class="login_input" id="user" placeholder="请输入用户名" />
                    </div>
                    <div class="form-group mg-t20">
                        <i class="icon-lock icon_font"></i>
                        <input name="password" type="password" class="login_input" id="pwd" placeholder="请输入密码" />
                    </div>
                    
                    <button style="submit" class="login_btn"> 
                    	
                        <input type="submit" tabindex="3" value="登录" class="btn btn-primary"/>
                    </button>
               </form>
        </div><!--row end-->
    </div><!--container end-->
   
</body>
</html>