<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShasetController
 *
 * @author 凯凯
 */
namespace Admin\Controller;
use Think\Controller;
class ShasetController extends CommonController {
	//put your code here
    //处理ajax的请求
    public function ajaxContent(){
        $id=I('get.id');
        $edit=D('Edit');
        $data=$edit->where(array('id'=>array('eq',$id)))->select();
        echo $data[0]['content'];
        //$this->display();
    }
	public function share() {
		$share = D('Share');
		if (IS_POST) {
			//更新微信的设置
			$data['id'] = 1;
			$data['share_title'] = I('share_title');
			$data['share_link'] = I('share_link');
			$data['share_desc'] = I('share_desc');
			$data['share_image'] = I('share_image');
			$data['xs_link'] = I('xs_link');
			$data['cnzz'] = I('cnzz');
			$data['title'] = I('title');
			$data['content'] = I('content');
			if ($share -> create($data)) {
				if ($share -> save()) {
					$this->redirect('/../../index.php/Admin/Shaset/share2');
					
				} else {
					$this -> error('更新失败');
				}

			}
			return;
		}


		$info = D('Edit') -> select();
                $data = D('Share') -> find();
		$this -> assign('info', $info);
                $this -> assign('data', $data);

		$this -> assign(array('_page_title' => '分享设置', '_page_btn_name' => '小说分享', '_page_btn_link' => U('share'), ));
		$this -> display();
	}

	public function share2(){
		$this -> display();		
		if(IS_POST){
			$htna=$_POST;		
			$cont=D('Share')->find(1);		        
	        $this->assign('cont', $cont); 	
			$this->fetch('./template.html');	
			if($cont){
		       	$countfile=$this->fetch('./template.html');
	            $num=str_replace("|*|*|PAGE_TITLE|*|*|","3",$countfile);  //替换内容  //替换内容    
            
	            $path=$htna["share_name"].".html";
	            $handle=fopen($path,"wb");
	            fwrite($handle,$num);
	            fclose($handle);
                    if(!IS_POST['dir']){
                      $destination_folder="./".$htna['dir']."/";
                      $destination=mkdir($destination_folder);
                      move_uploaded_file($path, $destination);
                      //copy($filename, $destination_folder);
                      
                    }
				$this->success('生成成功', 'share', 1);				
			}
                      
				     					
		}
    }
	

}
