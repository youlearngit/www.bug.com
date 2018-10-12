<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_page_title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/Public/Admin/css/adminlte.min.css">
  <link rel="stylesheet" href="/Public/Admin/css/bootstrap3-wysihtml5.min.css">
  <script src="/Public/Admin/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/Public/Admin/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/Public/Admin/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/Public/Admin/js/demo.js"></script>
<!-- CK Editor -->
<script src="/Public/Admin/js/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/Public/Admin/js/bootstrap3-wysihtml5.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Admin/UEditor-php/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Admin/UEditor-php/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Admin/UEditor-php/lang/zh-cn/zh-cn.js"></script>
</head>
<body class="hold-transition sidebar-mini">
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
        <div class="info">
          <a href="#" class="classd-block"><?php echo (session('admin_name')); ?></a>
        </div>
          
      </div>

      
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <?php if($_SESSION['admin_name']== 'admin'): ?><li class="nav-item">
            <a href="/index.php/Admin/Role/lst" class="nav-link">
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
        </ul>
      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    <div style="  position: absolute; top: 4.8em; left: 8.2em; width: 25%; padding: 0; ">
						<button type="button"style="width: 100%;" class="btn btn-danger btn-sm">
							<a href="/index.php/Admin/Login/logout" style="text-decoration: none;display: block;color: white;">退出</a>
						</button>
					</div>
    </div>
    <!-- /.sidebar -->
  </aside>
</div>
</body>


			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Main content -->
				<section class="content">

					<div class="col-md-12">

						<!--form start-->
						<form action="/index.php/Admin/Manager/edit/id/3/p/2.html" method="post" id="myform" name="myform" enctype="multipart/form-data">
                                                    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" />
							<div class="card card-info">
								<div class="card-header">
									<h3 class="card-title">编辑用户</h3>
								</div>
								<div class="card-body">

									
									<div class="form-group">

										<span style="color: #17a2b8"><b>用户名</b></span>
										<div class="input-group">
											<input value='<?php echo ($info["username"]); ?>' name="username" type="text" class="form-control" id="text1" value="" placeholder="请输入账号">

										</div>

									</div>
									
									
									<div class="form-group">

										<span style="color: #17a2b8"><b>密码</b></span>
										<div class="input-group">
											<input value='<?php echo ($info["pwd"]); ?>' name="pwd" type="text" class="form-control" id="text2" value="" placeholder="请输入密码">

										</div>

									</div>

								<div class="form-group">
										
									
                                                                        <div class="card-footer">
			                                                          <button type="submit" class="btn btn-primary">更新</button>
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

			

			<aside class="control-sidebar control-sidebar-dark">

			</aside>

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


  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-beta
    </div>
    <strong>Copyright &copy; 2016-2018 <a href="#">dabai.com</a>.</strong> All rights
    reserved.
  </footer>

  
  <aside class="control-sidebar control-sidebar-dark">
  
  </aside>