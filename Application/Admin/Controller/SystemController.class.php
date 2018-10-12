<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SystemController
 *
 * @author 凯凯
 */
namespace Admin\Controller;
use Think\Controller;
class SystemController extends CommonController{
    //put your code here
    public function lst(){
         if(IS_POST){
             //var_dump($_POST);die;
            $file='./Application/Common/Conf/config.php';
            $config=array_merge(include $file,array_change_key_case($_POST,CASE_UPPER));
            $str="<?php\r\nreturn ".var_export($config,true)."; ?>";
            if(file_put_contents($file, $str)){
                $this->success('修改配置项成功！','',TRUE);
            }else{
                $this->error('修改配置项失败！','',TRUE);
            }
            return;
        }
        $this->display();
    }
    public function copy(){
        $file='./abc.txt';
        $newFile=  mkdir('./p');
        //unlink($newFile);
      //return $data= move_uploaded_file($file, $newFile);
      echo  copy($file, $newFile);
    }
}
