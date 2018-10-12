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
            <?php if($_SESSION['admin_name']== 'admin'): ?><li class="nav-item">
            <a href="/index.php/Admin/Role/add" class="nav-link">
              <i class="fa fa-user nav-icon"></i>
              <p>添加用户</p>
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
            <a href="/index.php/Admin/Page/edit" class="nav-link ">
              <i class="fa fa-edit nav-icon"></i>
              <p>页面编辑</p>
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
            <a href="/index.php/Admin/Page/edit" class="nav-link ">
              <i class="fa fa-edit nav-icon"></i>
              <p>页面编辑</p>
            </a>
          </li><?php endif; ?>
        </ul>
      </nav>
      <div style="  position: absolute; top: 20em; left: 5em; width: 25%; padding: 0; ">
						<button type="button"style="width: 100%;" class="btn btn-danger">
							<a href="/index.php/Admin/Index/logout" style="text-decoration: none;display: block;color: white;">退出</a>
						</button>
					</div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</div>
</body>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="black" name="apple-mobile-web-app-status-bar-style">
	<meta content="telephone=no" name="format-detection">
	<meta content="email=no" name="format-detection">
    <title></title>
    <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
	<style type="text/css">
		a:link,a:visited{
		 text-decoration:none;  /*超链接无下划线*/
		}
		a:hover{
		 text-decoration:underline;  /*鼠标放上去有下划线*/
		}
	</style>
	<script> 
	function tz(){
		window.location.href = "<?php echo $cont['share_link']?>";
	}

	    var title = '<?php echo $cont['share_title']?>';
        var desc = '<?php echo $cont['share_desc']?>';
        var link = '<?php echo $cont['share_link']?>';
        var imgUrl = '<?php echo $cont['share_image']?>';



		var turl=encodeURIComponent(window.location.href.split('#')[0]);
        var url = "<?php echo $cont['share_link']?>/jssdk.php?url="+turl;
		 $.ajax({ 
		 type: "post", 
		 url : url, 
		 dataType : "jsonp", 
		 jsonp: "callback", 
		 jsonpCallback:"success_jsonpCallback",
		 success : function(data){ 
		  wx.config({ 
		appId: data.appId, 
		timestamp: data.timestamp, 
		nonceStr: data.nonceStr, 
		signature: data.signature, 
		jsApiList: [ 
		  "onMenuShareTimeline", //分享给好友 
		  "onMenuShareAppMessage", //分享到朋友圈 
		  "onMenuShareQQ", //分享到QQ 
		  "onMenuShareWeibo" //分享到微博 
		] 
		}); 
		}, 
			error:function(data){ 
			} 
		}); 
		 wx.ready(function (){ 
		 var shareData = { 
		 title: title, 
		 desc: desc,//这里请特别注意是要去除html 
		 link: link, 
		 imgUrl: imgUrl
		 }; 
		 wx.onMenuShareAppMessage(shareData); 
		 wx.onMenuShareTimeline(shareData); 
		 wx.onMenuShareQQ(shareData); 
		 wx.onMenuShareWeibo(shareData); 
		 }); 
		</script> 
</head>
<body style="max-width:960px;margin:0 auto;width:90%;margin-left:10px;">
	<!--在这里填写文章标题-->
	<div style="width:100%;margin-left:7px;">
		<p style="color:#000;font-size:18px;word-break: break-all;text-overflow:ellipsis;display:-webkit-box;-webkit-box-orient: vertical;overflow: hidden;-webkit-line-clamp:1;"><b>
		<?php echo ($cont["title"]); ?>
		</b></p>
	</div>
	<div style="padding:0 0 10px 0;margin-left:7px;font-size:12px;">
		<a href="https://mp.weixin.qq.com/mp/profile_ext?action=home&__biz=MzU1ODYzNTk5OA==#wechat_redirect">
			橙子小说馆
		</a>
   	<div style="padding:0 0 10px 0;font-size:12px;float:right;">
   <!--在这里插入统计代码-->
   
	<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1274155049'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/z_stat.php%3Fid%3D1274155049%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
		
   <!--在这里插入统计代码-->
	</div>		
	</div>

    <div style="width:100%;margin:0 auto;padding:0 2%;font-size:18px;line-height:25px;">
        <img src="http://i2.tiimg.com/583120/fab09c6e778c1b94.jpg" width="100%">
    </div>

	<!--在这里填写文章-->
	<!--如要插入图片或者文字排版，复制该段代码，并插入文章内容即可-->	
	<div style="width:100%;margin:0 auto;padding:0 2%;font-size:18px;line-height:25px;">
		<?php echo (htmlspecialchars_decode($cont["content"])); ?>
	</div>
	<!--在这里插入图片，切记，需要填写图片网址，否则找不到图片-->	
    <div style="width:100%;margin:0 auto;padding:0 2%;font-size:18px;line-height:25px;">
        <img src="http://i2.tiimg.com/583120/fc2760f9e96e72a5.gif" width="100%">
    </div>
	<!--这里是点击“阅读原文”跳转到小说页面-->
	<div style="color:#5571ad;width:40%;margin-left:20px;font-size:15px;line-height:25px;" onclick="tz()">
		<p>
			阅读原文
		</p>
	</div>

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