<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_page_title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/Public/Admin/css/pages.css">
  <link rel="stylesheet" href="/Public/Admin/css/adminlte.min.css">
  <link rel="stylesheet" href="/Public/Admin/css/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="/Public/Admin/css/selectFilter.css">
  <!--<link rel="stylesheet" href="/Public/Admin/css/fileUpload.css">-->
  <script src="/Public/Admin/js/jquery.min.js"></script>
  <script type="text/javascript" src="../../../Public/Admin/js/selectFilter.js"> </script>
  <!--<script type="text/javascript" src="../../../Public/Admin/js/fileUpload.js" >  </script>-->
  <script type="text/javascript" src="/Public/Admin/js/Chart.min.js" ></script>
  <!-- Bootstrap 4 -->
	<script src="/Public/Admin/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="/Public/Admin/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="/Public/Admin/js/demo.js"></script>
	<script src="/Public/Admin/js/bootstrap.min.js"></script>
  <script src="/Public/Admin/artDialog/artDialog.js?skin=default"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="/Public/Admin/js/bootstrap3-wysihtml5.all.min.js"></script>

</head>



	<body class="hold-transition sidebar-mini" style="font-size: 16px;">
		<div class="wrapper">
			  <!-- Navbar -->
			  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
			    <!-- Left navbar links -->
			    <ul class="navbar-nav">
			      <li class="nav-item">
			        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
			      </li>
			    </ul>						
			  </nav>
			  <!-- /.navbar -->
			
			  <!-- Main Sidebar Container -->
			  <aside class="main-sidebar sidebar-dark-primary elevation-4">
		    <!-- Brand Logo -->
		    <a  class="brand-link" href="/index.php/Admin/Index/index">
		      <img src="/Public/Admin/img/AdminLTELogo.png"
		           alt="AdminLTE Logo"
		           class="brand-image img-circle elevation-3"
		           style="opacity: .8">
		      <span class="brand-text font-weight-light" >大白网络</span>
		    </a>
		
		    <!-- Sidebar -->
		    <div class="sidebar">
		      <!-- Sidebar user (optional) -->
		      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
		        <div class="image">
		          <img src="/Public/Admin/img/cat_.jpg" class="img-circle elevation-2" alt="User Image">
		        </div>
		        
		         <div style="width: 40%;font-size: small;margin-left: 5px;">
		        	
				        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
				      
				          <!--<a href="#" class="classd-block"><?php echo (session('admin_name')); ?></a>-->
				           <li class="nav-item has-treeview " >
				            <a href="#" class="nav-link">
				              <span>
				                <?php echo (session('admin_name')); ?> <i class="right fa fa-chevron-circle-down"></i>
				              </span>
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
		
		      
		      
		      <!-- Sidebar Menu -->
		      <nav class="mt-2">
		        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		          <?php if($_SESSION['admin_name']== 'admin'): ?><li class="nav-item">
		            <a href="/index.php/Admin/User/lst" class="nav-link">
		              <i class="fa fa-user nav-icon"></i>
		              <p>会员管理</p>
		            </a>
		            </li>
		            
		         <li class="nav-item" >
		             <a href="/index.php/Admin/Sets/upd" class="nav-link" >
		              <i class="fa fa-circle-o nav-icon"></i>
		              <p>微信设置</p>
		            </a>
		          </li>
		          
		          <li class="nav-item">
		            <a href="/index.php/Admin/Shaset/share" class="nav-link">
		            	 <!--<a href="/index.php/Admin/Quanxian/GuanEdit" class="nav-link">-->
		              <i class="fa fa-share nav-icon"></i>
		              <p>分享设置</p>
		            </a>
		          </li>
		          
		          <li class="nav-item">
		            <a href="/index.php/Admin/Page/showlist" class="nav-link ">
		              <i class="fa fa-edit nav-icon"></i>
		              <p>文章管理</p>
		            </a>
		          </li>
		         <?php else: ?>
		          <li class="nav-item">
		            <a href="/index.php/Admin/Shaset/share" class="nav-link">
		              <i class="fa fa-share nav-icon"></i>
		              <p>分享设置</p>
		            </a>
		          </li>
		          
		          <li class="nav-item">
		            <a href="/index.php/Admin/Page/showlist" class="nav-link ">
		              <i class="fa fa-edit nav-icon"></i>
		              <p>文章管理</p>
		            </a>
		          </li><?php endif; ?>
		         <li class="nav-item">
		            <a href=" " class="nav-link">
		              <i class="fa fa-diamond nav-icon"></i>
		              <p>开通会员</p>
		            </a>
		          </li>
		        <li class="nav-item has-treeview">
		            <a href="#" class="nav-link">
		              <i class="nav-icon fa fa-pie-chart"></i>
		              <p>
		                                 系统设置
		                <i class="right fa fa-angle-left"></i>
		              </p>
		            </a>
		            <ul class="nav nav-treeview">
		              <li class="nav-item">
		                <a href="/index.php/Admin/System/lst.html" class="nav-link">
		                  <i class="fa fa fa-wrench nav-icon"></i>
		                  <p>全局设置</p>
		                </a>
		              </li>
                              
                              <li class="nav-item">
		                <a href="/index.php/Admin/Role/lst" class="nav-link">
		                  <i class="fa fa-circle-o nav-icon"></i>
		                  <p>角色管理</p>
		                </a>
		              </li>
                              
                              <li class="nav-item">
		                <a href="/index.php/Admin/Privilege/lst" class="nav-link">
		                  <i class="fa fa-circle-o nav-icon"></i>
		                  <p>权限管理</p>
		                </a>
		              </li>	
		              <li class="nav-item">
		                <a href=" " class="nav-link">
		                  <i class="fa fa-circle-o nav-icon"></i>
		                  <p>待完善</p>
		                </a>
		              </li>
		            
		             </ul> 
		        </li>      
		        
		        <li class="nav-item has-treeview">
		            <a href=" " class="nav-link">
		              <i class="nav-icon fa fa-yelp"></i>
		              <p>
		                                 商务合作
		                <i class="right fa fa-angle-left"></i>
		              </p>
		            </a>
		            <ul class="nav nav-treeview">
		              <li class="nav-item">
		                <a href=" " class="nav-link">
		                  <i class="fa fa-circle-o nav-icon"></i>
		                  <p>咨询洽谈</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href=" " class="nav-link">
		                  <i class="fa fa-circle-o nav-icon"></i>
		                  <p>业务合作</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href=" " class="nav-link">
		                  <i class="fa fa-circle-o nav-icon"></i>
		                  <p>联系我们</p>
		                </a>
		              </li>		            
		            </ul>
		          </li>
		        </ul>
		      </nav>
		      
		      <!-- /.sidebar-menu -->
		    </div>
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
				<section class="content">

					<div class="col-md-12">
						<!--form start-->
						<form action="/index.php/Admin/Privilege/edit/id/js/bootstrap3-wysihtml5.all.min.js" method="post" id="myform" name="myform" enctype="multipart/form-data">
                                                     <input type="hidden" name="id" value="<?php echo ($prires["id"]); ?>" />
							<div class="card card-info">
								<div class="card-header">
									<h3 class="card-title">权限修改</h3>
								</div>
								<div class="card-body">									
									<div class="form-group">
										<span style="color: #17a2b8"><b>上级权限</b></span>
										<div class="input-group">
											 <select name="parentid" id="catid" class="required">
                                                                                           <option value="0">顶级权限</option>
                                                                                             <?php if(is_array($pris)): $i = 0; $__LIST__ = $pris;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($vo['id'] == $prires['parentid']): ?>selected="selected"<?php endif; ?>  <?php if($vo['id'] == $prires['id']): ?>style="display:none;"<?php endif; ?> value="<?php echo ($vo["id"]); ?>"><?php if($vo['parentid'] != 0): ?>|<?php endif; echo str_repeat('-', $vo['level']*8); echo ($vo["pri_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                                          </select>

										</div>

									</div>
									
									
									<div class="form-group">

										<span style="color: #17a2b8"><b>权限名称</b></span>
										<div class="input-group">
											<input name="pri_name" type="text" class="form-control" id="text2" value="<?php echo ($prires["pri_name"]); ?>" placeholder="请输入权限名称">

										</div>

									</div>
									
									<div class="form-group">

										<span style="color: #17a2b8"><b>模块名称</b></span>
										<div class="input-group">
											<input name="mname" type="text" class="form-control" id="text3" value="<?php echo ($prires["mname"]); ?>" placeholder="请输入模块名称">

										</div>

									</div>
									
									<div class="form-group">

										<span style="color: #17a2b8"><b>控制器名称</b></span>
										<div class="input-group">
											<input name="cname" type="text" class="form-control" id="text4" value="<?php echo ($prires["cname"]); ?>" placeholder="请输入控制器名称">

										</div>

									</div>
									
									<div class="form-group">

										<span style="color: #17a2b8"><b>方法确认</b></span>
										<div class="input-group">
											<input name="aname" type="text" class="form-control" id="text5" value="<?php echo ($prires["aname"]); ?>" placeholder="请确认方法">

										</div>

									</div>

									<div class="form-group">																		
		                                 <div style="margin-bottom: 20px;margin-left: 10px;">
		                                      <button type="submit" class="btn btn-primary">修改</button>
		                                 </div>		                                  
									</div>
								</div>

							</div>
						</form>
					</div>				
				</section>
			</div>

		<!-- ./wrapper -->

		<script type="text/javascript" src="js/jquery-3.3.1.js" ></script>
		<!-- Bootstrap 4 -->
		<script src="js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="js/adminlte.min.js"></script>
		
		<!-- Bootstrap WYSIHTML5 -->
		<script src="js/bootstrap3-wysihtml5.all.min.js"></script>
		<!--<script>
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
		</script>-->





  <!--<footer class="main-footer" style="position: fixed;top: 650px;left: 0px;width: 100%;height: 200px;" >
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-beta
    </div>
    <strong>Copyright &copy; 2016-2018 <a href="#">dabai.com</a>.</strong> All rights
    reserved.
  </footer>-->