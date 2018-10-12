<?php if (!defined('THINK_PATH')) exit();?>
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
		window.location.href = "<?php echo $cont['xs_link']?>";
	}

	    var title = '<?php echo $cont['share_title']?>';
        var desc = '<?php echo $cont['share_desc']?>';
        var link = '<?php echo $cont['share_link']?>';
        var imgUrl = '<?php echo $cont['share_image']?>';



		var turl=encodeURIComponent(window.location.href.split('#')[0]);
        var url = "http://wxbnovel.com/jssdk.php?url="+turl;
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
		<?php echo (htmlspecialchars_decode($cont["cnzz"])); ?>
   <!--在这里插入统计代码-->
	</div>		
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