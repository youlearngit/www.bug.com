<?php if (!defined('THINK_PATH')) exit();?><!--模板页面-->
<!DOCTYPE html>

<head>
	
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title><?php echo $_page_title;?></title>
	  <!-- 响应式布局不同屏幕宽度 -->
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="/Public/Admin/font-awesome/css/font-awesome.css">
	  <link rel="stylesheet" href="/Public/Admin/css/pages.css">
	  <link rel="stylesheet" href="/Public/Admin/css/adminlte.min.css">
	  <link rel="stylesheet" href="/Public/Admin/css/bootstrap3-wysihtml5.min.css">
	  <link rel="stylesheet" type="text/css" href="/Public/Admin/css/simple-calendar.css">
	  <link rel="stylesheet" href="/Public/Admin/css/selectFilter.css">
	  <script src="/Public/Admin/js/jquery.min.js"></script>
	  <script type="text/javascript" src="../../../Public/Admin/js/selectFilter.js"> </script>
	  <script type="text/javascript" src="/Public/Admin/js/Chart.min.js" ></script>
	  <!-- Bootstrap 4 -->
		<script src="/Public/Admin/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="/Public/Admin/js/adminlte.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="/Public/Admin/js/demo.js"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="/Public/Admin/js/bootstrap3-wysihtml5.all.min.js"></script>
		<!--日历插件-->
		<script type="text/javascript" src="/Public/Admin/js/simple-calendar.js" ></script>
		<link href="/Public/umeditor1_2_2-utf8-php/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" charset="utf-8" src="/Public/umeditor1_2_2-utf8-php/umeditor.config.js"></script>
		<script type="text/javascript" charset="utf-8" src="/Public/umeditor1_2_2-utf8-php/umeditor.min.js"></script>
		<script type="text/javascript" src="/Public/umeditor1_2_2-utf8-php/lang/zh-cn/zh-cn.js"></script>

</head>

	<body class="hold-transition sidebar-mini" style="font-size: 16px;">
		<div class="wrapper">
			  <!-- 响应式左滑菜单-->
			  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">			 
			    <ul class="navbar-nav">
			      <li class="nav-item">
			        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
			      </li>
			    </ul>						
			  </nav>
			
			  <!-- 左侧栏整体 -->
			  <aside class="main-sidebar sidebar-dark-primary elevation-4">
		      <!-- 左侧栏之品牌logo -->
			    <a  class="brand-link" href="/index.php/Admin/Index/index">
			      <img src="/Public/Admin/img/AdminLTELogo.png"
			           alt="AdminLTE Logo"
			           class="brand-image img-circle elevation-3"
			           style="opacity: .8">
			      <span class="brand-text font-weight-light" >大白网络</span>
			    </a>
		
		      <!-- 左侧栏之用户信息及导航菜单 -->
			    <div class="sidebar">
			        <!--用户信息栏-->
				    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
				        <div class="image">
				          <img src="/Public/Admin/img/cat_.jpg" class="img-circle elevation-2" alt="User Image">
				        </div>				        
				        <div style="width: 40%;font-size: small;margin-left: 5px;">			        	
					        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >     
					           <li class="nav-item has-treeview " >
					            <a href="#" class="nav-link">
					              <span><?php echo (session('admin_name')); ?> <i class="right fa fa-chevron-circle-down"></i></span>
					            </a>
					            
					            <ul class="nav nav-treeview">
						            <li class="nav-item">
						                <a href="#" class="nav-link">
						                  <span>我的账户</span>
						                </a>
						            </li>
						            <li class="nav-item">
						                <a href="#" class="nav-link">					                 
						                  <span>更改密码</span>
						                </a>
						            </li>
						            <li class="nav-item">
						                <a href="#" class="nav-link">					                  
						                  <span>切换用户</span>
						                </a>
						            </li>
					            </ul>
					          </li>
					        </ul>				          
				        </div>		 		        		        
				    </div>	
				    
				    
			        <!--导航菜单栏-->
			        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			        	
			            <!--常用操作-->		
			            <li class="nav-item has-treeview">
                                        <?php $menu=session('menu'); foreach ($menu as $k => $v): ?>
			                <a href=" " class="nav-link"><i class="nav-icon fa fa-yelp"></i><p> <?php echo $v['pri_name'];?><i class="right fa fa-angle-left"></i></p></a>
                                        
				            <ul class="nav nav-treeview">
                                                        <?php foreach ($v['sub'] as $k1 => $v1): ?>
						        <li class="nav-item"> <a href="<?php echo U($v1['mname'].'/'.$v1['cname'].'/'.$v1['aname']);?>" class="nav-link"> <i class="fa fa-user nav-icon"> </i> <?php echo $v1['pri_name'];?></a></li>			            
						        <?php endforeach;?>
					        </ul>
                                        <?php endforeach;?>
				        </li>
				        
			            
			            
				    </ul>
				    
			    </div>





		    <!--"退出"按钮--> 
	        <div style="  position: absolute; top: 4.8em; left: 10.2em; width: 25%; padding: 0;margin-bottom: 20px;">
				<button type="button"style="width: 100%;" class="btn btn-danger btn-sm">
					<a href="/index.php/Admin/Login/logout" style="text-decoration: none;display: block;color: white;">退出</a>
				</button>
			</div>
				   
		  </aside>
		</div>
	</body>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Main content -->
	<section class="content">

		<div class="col-md-12">
			<!--form start-->
			<form action="/index.php/Admin/Shaset/share.html" method="post" id="myform" name="myform" enctype="multipart/form-data">
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title">小说分享设置</h3>
					</div>
					<div class="card-body">

						<div class="form-group">

							<span style="color: #17a2b8"><b>分享标题</b></span>
							<div class="input-group">
								<input name="share_title" value="<?php echo ($info["share_title"]); ?>" type="text" class="form-control" id="fxzbt" placeholder="请输入微信分享主标题">
							</div>
							<span> <font color="red">*此处必填*</font></span>
							<p id="yi" style="color: red;"></p>

						</div>

						<div class="form-group">

							<span style="color: #17a2b8"><b>分享链接</b></span>
							<div class="input-group">
								<input name="share_link" value="<?php echo ($info["share_link"]); ?>" type="text" class="form-control" id="fxlj" placeholder="请输入微信分享链接">
							</div>
							<span> <font color="red">*此处必填*</font></span>
							<p id="er" style="color: red;"></p>

						</div>

						<div class="form-group">

							<span style="color: #17a2b8"><b>分享简介</b></span>
							<div class="input-group">
								<input name="share_desc" value="<?php echo ($info["share_desc"]); ?>" type="text" class="form-control" id="fxjj" placeholder="请输入微信分享简介">
							</div>
							<p id="san" style="color: red;"></p>
						</div>

						<div class="form-group">
							<span style="color: #17a2b8"><b>分享图片链接</b></span>

							<div class="input-group">
								<input name="share_image" value="<?php echo ($info["share_image"]); ?>" type="text" class="form-control" id="fxtp" placeholder="请输入微信分享图片">
							</div>
							<p id="si" style="color: red;"></p>
						</div>
						<!--<div class="col-md-12">-->
						<div class="form-group">

							<span style="color: #f63131"><b>CNZZ统计代码</b></span>
							<div class="input-group">
								<input name="cnzz" value="<?php echo ($info["cnzz"]); ?>" type="text" class="form-control" id="fxzbt1" placeholder="请输入CNZZ统计代码">
							</div>
							<p id="wu" style="color: red;"></p>
						</div>

						<div class="form-group">
							<span style="color:#f63131"><b>小说原文链接</b></span>
							<div class="input-group">
								<input name="xs_link" value="<?php echo ($info["xs_link"]); ?>" type="text" class="form-control" id="xslj" placeholder="请输入微信分享简介">
							</div>
							<p id="liu" style="color: red;"></p>
						</div>

					</div>
				</div>

				<span style="font-size:1.1em; color: #17a2b8; font-weight: 550; font-family: '黑体';margin-left: 1.2em;float: left;">是否编辑内容:</span>
				<select onChange="selectV()" id="select1" class="card card-primary" style="margin-bottom: 1.5em; color: #6C757D;">
					<option value="0">是</option>
					<option value="1">否</option>
				</select>
				<!--</div>-->
				<div class="card card-primary" id="con" style="display:block;">
					<div class="card-header">
						<h3 class="card-title">文案编辑</h3>
					</div>

					<div class="card card-body">

						<div class="form-group">

							<span style="color: #0e7fe1;"><b>编辑标题</b></span>

							<div class="filter-box">
								<div class="filter-text">
									<!--class="filter-title"-->
									<input type="text" readonly placeholder="pleace select" class="filter-title" id="fxzbt" />
									<i class="icon icon-filter-arrow"></i>
								</div>
								<select name="title">
                                                                 <option>---请选择标题---</option>
                                                                   <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo['id'] == 1): ?>selected="selected"<?php endif; ?>><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

								</select>
							</div>

							<br>
							<br>
							<p style="color: #0e7fe1;margin-top: 2em;"><b>编辑内容</b></p>

							<div class="input-group">
								<textarea style="width: 100%;overflow: scroll;" id="goods_desc" name="content"><?php echo ($data["content"]); ?></textarea>
							</div>

						</div>

					</div>
				</div>

				<div style="margin-bottom: 20px;margin-left: 10px;">
					<!--class="card-footer"-->
					<button type="submit" class="btn btn-primary" onclick="return btnck()">下一步</button>
				</div>
		    </form>

        </div>
    </section>

</div>


<!-- ./wrapper -->
<script>
	$(function() {
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		ClassicEditor
			.create(document.querySelector('#editor1'))
			.then(function(editor) {
				// The editor instance
			})
			.catch(function(error) {
				console.error(error)
			})

		// bootstrap WYSIHTML5 - text editor

		$('.textarea').wysihtml5({
			toolbar: {
				fa: true
			}
		})
	})

	function selectV() {

		var b = document.getElementById("select1");
		if(b.value == "1") {
			document.getElementById("con").style.display = "none";

		} else {
			document.getElementById("con").style.display = "block";

		}
	}

	function btnck() {
		var a = document.getElementById("fxzbt");
		var b = document.getElementById("fxlj");
		var c = document.getElementById("fxjj");
		var d = document.getElementById("fxtp");
		var e = document.getElementById("fxzbt");
		var f = document.getElementById("xslj");
		if(a.value == "") {
			document.getElementById("yi").innerHTML = "文本框内容不能为空！";
			return false;
		}
		if(b.value == "") {
			document.getElementById("er").innerHTML = "文本框内容不能为空！";
			return false;
		}
		if(c.value == "") {
			document.getElementById("san").innerHTML = "文本框内容不能为空！";
			return false;
		}
		if(d.value == "") {
			document.getElementById("si").innerHTML = "文本框内容不能为空！";
			return false;
		}
		if(e.value == "") {
			document.getElementById("wu").innerHTML = "文本框内容不能为空！";
			return false;
		}
		if(f.value == "") {
			document.getElementById("liu").innerHTML = "文本框内容不能为空！";
			return false;
		} else {

			return true;
		}

	}
</script>

<script>
	$(function() {
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		ClassicEditor
			.create(document.querySelector('#editor1'))
			.then(function(editor) {
				// The editor instance
			})
			.catch(function(error) {
				console.error(error)
			})

		// bootstrap WYSIHTML5 - text editor

		$('.textarea').wysihtml5({
			toolbar: {
				fa: true
			}
		})
	})
</script>
<!--导入在线编辑器 -->
<link href="/Public/umeditor1_2_2-utf8-php/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<!--<script type="text/javascript" src="/Public/umeditor1_2_2-utf8-php/third-party/jquery.min.js"></script>-->
<!--<script type="text/javascript" src="../../../../Public/Admin/js/jquery.min.js" ></script>-->
<script type="text/javascript" charset="utf-8" src="/Public/umeditor1_2_2-utf8-php/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/umeditor1_2_2-utf8-php/umeditor.min.js"></script>
<script type="text/javascript" src="/Public/umeditor1_2_2-utf8-php/lang/zh-cn/zh-cn.js"></script>
<script>
	UM.getEditor('goods_desc', {
		initialFrameWidth: "100%",
		initialFrameHeight: 450
	});
</script>

<script type="text/javascript">
	//本小插件支持移动端哦

	//这里是初始化
	$('.filter-box').selectFilter({
		callBack: function(val) {
			//返回选择的值
			console.log(val + '-是返回的值')
		}
	});
</script>