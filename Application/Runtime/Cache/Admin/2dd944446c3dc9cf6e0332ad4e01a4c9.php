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
          <a href="#" class="d-block"><?php echo (session('admin_name')); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            
         <li class="nav-item" >
             <a href="/index.php/Admin/Sets/upd" class="nav-link" >
              <i class="fa fa-circle-o nav-icon"></i>
              <p>页面设置</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/index.php/Admin/Shaset/share" class="nav-link">
              <i class="fa fa-share nav-icon"></i>
              <p>分享设置</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/index.php/Admin/Page/edit" class="nav-link ">
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    标题：<?php echo ($share_title); ?>
    内容：<?php echo ($share_desc); ?>
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