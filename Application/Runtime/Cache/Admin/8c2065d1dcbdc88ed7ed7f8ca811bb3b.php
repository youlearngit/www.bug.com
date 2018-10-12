<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>页面设置</title>
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
    <a href="#" class="brand-link">
      <img src="/Public/Admin/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">大白网络</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/Public/Admin/img/cat_.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">喵小咪</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item" >
            <a href="Sets.html" class="nav-link" style="background-color: #007bff;">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>页面设置</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="Share.html" class="nav-link">
              <i class="fa fa-share nav-icon"></i>
              <p>分享设置</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="Edit.html" class="nav-link ">
              <i class="fa fa-edit nav-icon"></i>
              <p>页面编辑</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
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
							<form action="/index.php/Admin/shaset/Share.html" method="post" id="myform" name="myform" enctype="multipart/form-data">
								<div class="card card-info">
									<div class="card-header">
										<h3 class="card-title">小说分享</h3>
									</div>
									<div class="card-body">
	
											<div class="form-group">
		
												<span style="color: #17a2b8"><b>分享标题</b></span>
												<div class="input-group">
                                                                                                    <input name="share_title" value="<?php echo ($info["share_title"]); ?>" type="text" class="form-control" id="fxzbt" placeholder="主标题">
												</div>
		
											</div>
		
											
											<div class="form-group">
		
												<span style="color: #17a2b8"><b>分享链接</b></span>
												<div class="input-group">
                                                                                                    <input name="share_link" value="<?php echo ($info["share_link"]); ?>" type="text" class="form-control" id="fxlj" placeholder="请输入链接">
												</div>
		
											</div>
		
											<div class="form-group">
		
												<span style="color: #17a2b8"><b>分享简介</b></span>
												<div class="input-group">
													<input name="share_desc" value="<?php echo ($info["share_desc"]); ?>" type="text" class="form-control" id="fxjj" placeholder="请分享简介">
												</div>
		
											</div>
		
											<div class="form-group">
											<span style="color: #17a2b8"><b>分享图片</b></span>
	
											<div class="input-group">
                                                                                            <input name="share_image" value="<?php echo ($info["share_image"]); ?>" type="text" class="form-control" id="fxtp" placeholder="请分享图片">
											</div>
	
										</div>
                                                                            <div class="card-footer">
			                                                          <button type="submit" class="btn btn-primary">更新</button>
			                                                    </div>
									</div>
	
								</div>
							</form>
						</div>
						<!-- /.col-->
	
						<!-- ./row -->
					</section>
	
				</div>
	
				<footer class="main-footer">
					<div class="float-right d-none d-sm-block">
						<b>Version</b> 3.0.0-beta版
					</div>
					<strong>Copyright &copy; 2016-2018 <a href="#">dabai.com</a>.</strong> All rights reserved
				</footer>
	
			
				<aside class="control-sidebar control-sidebar-dark">
					
				</aside>
				
			</div>
		<!-- ./wrapper -->

			
	


  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-beta
    </div>
    <strong>Copyright &copy; 2016-2018 <a href="#">dabai.com</a>.</strong> All rights
    reserved.
  </footer>

  
  <aside class="control-sidebar control-sidebar-dark">
  
  </aside>