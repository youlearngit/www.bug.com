<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageController
 *
 * @author 凯凯
 */
namespace Admin\Controller;
use Think\Controller;
class PageController extends CommonController {
    public function showlist(){
        $edit=D('Edit');
        $count=$edit->count();//查询满足要求的总记录数
        $page=new \Think\Page($count,2);//实例化分页,传入总记录数和每页显示的条数
        // 配置翻页的样式
	$page->setConfig('prev', '上一页');
	$page->setConfig('next', '下一页');
        $show=$page->show();//分页显示输出
        $info=$edit->order('id')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('page', $show);//赋值分页输出
        $this->assign('info', $info);
        
        $this->display();
        
    }
    //put your code here
    public function add(){
        if(IS_POST){
            $edit=D('Edit');
            $data=$edit->create();
            if($edit->add($data)){
                $this->redirect('showlist', array(), 1,'添加成功');
            }else{
                $this->redirect('showlist', array(), 1,'添加失败');
            }
     
     }
     
     //$id=I('get.id');
     //$info=D('Edit')->find(1);
     //$this->assign('info', $info);
     
     $this->assign(array(
         '_page_title'=>'文章管理',
         '_page_btn_name'=>'增加文章',
         '_page_btn_link'=>U('showlist'),
     ));
        $this->display();
    }
    
    public function upd(){
        $edit=D('Edit');
        if(IS_POST){
            //完善内容的修改
            $data['id']=I('get.id');
            $data['title']=I('title');
            $data['content']=I('content');
            $data['ctime']=time();
               
               if($edit->create($data)){
               if($edit->save()){
                  $this->success('更新成功', U('showlist')); 
               }else{
                   $this->error('更新失败');
               }
               }
           return;
        }
        
        $id=I('get.id');
        //获得被修改的信息
        $info=D('Edit')->find($id);
        $this->assign('info', $info);
        $this->display();
    }
     public function del(){
        $id=I('id');
        //var_dump($id);die;
        $edit=D('Edit');
        if($edit->delete($id)){
            $this->success('删除成功', U('showlist'));
        }else{
            $this->error('删除失败');
        }
    }
}
