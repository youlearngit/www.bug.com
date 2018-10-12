<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SetsController
 *
 * @author 凯凯
 */
namespace Admin\Controller;
use Think\Controller;
class SetsController extends CommonController{
    //put your code here
    public function upd(){
     $sets=D('Sets');
     //var_dump($sets);die;
     if(IS_POST){
         //更新微信的设置
         $data['id']=1;
       
         $data['appid']=I('appid');
         $data['appsecret']=I('appsecret');
         //var_dump($data);die;
         
         if($_FILES['file_upload']['error']==0)
            {
                 
                //处if理logo图片
                $conf=array(
                    'rootPath'  =>'./',//保存根目录
                );
                $up = new \Think\Upload($conf);// 实例化上传类
                $up->maxSize   =     3145728 ;// 设置附件上传大小
                $up->exts      =     array( 'txt');// 设置附件上传类型
                $up->autoSub =       false;//禁止自动生成子目录
                //$up->saveRule='';//原样上传
                $up->replace=true;//同名覆盖原文件
                $up->saveName = ''; //原文件上传
                $up->hash=false; //是否生成hash编码
                $z=$up->uploadOne($_FILES['file_upload']);
                $pathname=$up->rootPath.$z[savepath].$z['savename'];
                
                //把图片的路径信息储存到数据库中
                $data['file_upload']=$pathname;
            }
         
         if($sets->create($data)){
             
             if($sets->save()){
                 $this->success('更新成功！',U('upd'));
             }else{
                 $this->error('更新失败');
             }
             
         }
         return;
     }
     
     //$id=I('get.id');
     $info=D('sets')->find(1);
     $this->assign('info', $info);
     
     $this->assign(array(
         '_page_title'=>'微信设置',
         '_page_btn_name'=>'微信设置',
         '_page_btn_link'=>U('upd'),
     ));
     $this->display();   
    }

}