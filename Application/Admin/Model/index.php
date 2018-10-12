<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>   
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <html>    
    <head>    
    <title>大白小说派单上传系统</title>     
    </head>    
        
<body>   
<?php    
  $uptypes=array('image/jpg','image/jpeg','image/png','image/pjpeg','image/gif','image/bmp','image/x-png','text/php','text/html');    
  $addtime=date("Ym",time());      
  $testdir="./".$_POST["dir"]."/";   
  if(file_exists($testdir)):   
  else:   
  mkdir($testdir,0777);   
  endif;
  $max_file_size=2097152;     //上传文件大小限制, 单位BYTE    
  $destination_folder=$testdir; //上传文件路径    
  $imgpreview=1;      //是否生成预览图(1为生成,其他为不生成);    
  $imgpreviewsize=1/2;    //缩略图比例    
?> 
<div style="width:500px;margin:0 auto;margin-top:100px;border:1px solid #999999;border-radius: 5px;text-align: center;">
<div style="background: #22C7A5;height:40px;text-align: center;font-size:20px;line-height:40px;color:#FFF;"><b>大白小说派单上传系统</b></div>	
<form enctype="multipart/form-data" method="POST" name="upform">
	<div style="padding:20px;">    
<div style="width:200px;float:left;text-align: right;">上传文件：</div> 
<div style="width:200px;float:left;margin-left:20px;">   
<input name="upfile" type="file">
</div>
<div style="width:200px;float:left;text-align: right;margin-top:20px;">请输入上传到的文件夹 ：</div>
<div style="width:200px;float:left;margin-left:20px;margin-top:20px;margin-bottom:25px"> 
<input type="text" name="dir" value="">
</div>	 
<div style="clear:both"></div>
<input type="submit" value="上传">  
</div> 
</form>  
    <?php    
    if ($_SERVER['REQUEST_METHOD'] == 'POST')    
    { 	  	
        if (!is_uploaded_file($_FILES["upfile"]["tmp_name"]))    
        //是否存在文件    
        {        	
             echo "文件不存在!";    
             exit;    
        }
        $file = $_FILES["upfile"];    
        if($max_file_size < $file["size"])    
        //检查文件大小    
        {
            echo "文件太大!";    
            exit;    
        }
        if(!in_array($file["type"], $uptypes))    
        //检查文件类型    
        {    
            echo "文件类型不符!".$file["type"];    
            exit;    
        }
        if(!file_exists($destination_folder))    
        {
			mkdir($destination_folder);    
        }
	   $filename=$file["tmp_name"];    
        $pinfo=pathinfo($file["name"]);    
        $ftype=$pinfo['extension'];    
       $destination = $destination_folder.$file["name"]; 	   
//        if (file_exists($destination) && $overwrite != true)    
//        {    
//            echo "同名文件已经存在了";    
//            exit;    
//        }    
        
        if(!move_uploaded_file ($filename, $destination))    
        {     	      	 
            echo "移动文件出错";    
            exit;    
        }
        $pinfo=pathinfo($destination);    
        $fname=$pinfo["basename"];    
        echo " <font color=red>已经成功上传</font><br>分享页:  <font color=blue>".$destination."</font><br>";         
    }
    ?>
</div>   
<div style="width:500px;margin:0 auto;">
	<p>说明：</p>
	<p>选择所要上传的文件，并输入所要上传的文件夹，点击“上传”按钮即可上传。</p>
	<p>支持文件类型：html格式和各类图片格式。</p>
</div>  
</body>    
</html> 