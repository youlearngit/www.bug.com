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
						<form action="/index.php/Admin/User/add" method="post" id="myform" name="myform" enctype="multipart/form-data">
							<div class="card card-info">
								<div class="card-header">
									<h3 class="card-title">添加用户</h3>
								</div>
								<div class="card-body">

									
									<div class="form-group">

										<span style="color: #17a2b8"><b>用户名</b></span>
										<div class="input-group">
											<input name="username" type="text" class="form-control" id="text1" value="" placeholder="请输入用户名">

										</div>

									</div>
									
									
									<div class="form-group">

										<span style="color: #17a2b8"><b>密码</b></span>
										<div class="input-group">
											<input name="pwd" type="text" class="form-control" id="text2" value="" placeholder="请输入密码">

										</div>

									</div>
                                                                    
                                                                    <div class="form-group">

										<span style="color: #17a2b8"><b>所属角色</b></span>
										<div class="input-group">
											<select name="roleid">
                                                                                        <?php if(is_array($roles)): $i = 0; $__LIST__ = $roles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["rolename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                                        </select>

										</div>

									</div>

								<div class="form-group">																		
	                                 <div style="margin-bottom: 20px;margin-left: 10px;">
	                                      <button type="submit" class="btn btn-primary">添加</button>
	                                 </div>
								</div>
								</div>

							</div>
						</form>
					</div>
					<!-- /.col-->

					<!-- ./row -->
				</section>

			</div>

			

			

		</div>
		<!-- ./wrapper -->

		<script type="text/javascript" src="js/jquery-3.3.1.js" ></script>
		<!-- Bootstrap 4 -->
		<script src="js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="js/adminlte.min.js"></script>
		
		<!-- Bootstrap WYSIHTML5 -->
		<script src="js/bootstrap3-wysihtml5.all.min.js"></script>
		<script>
			function btnck() {
				var a = document.getElementById("text1");
				var b = document.getElementById("text2");
			
				if(a.value == "") {
					alert("用户名不能为空！");
					return false;
				} else {
										
					if(b.value == "") {
						alert("密码不能为空！");
						return false;
					} else {
									alert("提交成功！");
							}					
				}
			}
		</script>
	</body>

</html>