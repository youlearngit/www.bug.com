<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrivilegeController
 *
 * @author 凯凯
 */
namespace Admin\Controller;
use Think\Controller;
class PrivilegeController extends CommonController{
    //put your code here
    public function lst(){
        $pri=D('privilege');
        $pris=$pri->pritree();
        $this->assign('pris', $pris);
        $this->display();
    }
     public function add()
    {
        $pri=D('privilege');
        if(IS_POST){
            if($pri->create()){
                if($pri->add()){
                    $this->success('添加权限成功！',U('lst'));
                }else{
                    $this->error('添加权限失败！');
                }
            }else{
                $this->error($pri->getError());
            }

            return;
        }

        $pris=$pri->pritree();
        $this->assign('pris',$pris);
        $this->display();
    }
    
    public function edit(){
        $pri=D('Privilege');
        if(IS_POST){
            if($pri->create()){
                if($pri->save()){
                    $this->success('修改权限成功!', U('lst'));
                }else{
                    $this->error('修改权限失败!');
                }
            }else{
                $this->error($pri->getError());
            }
            return;
        }
        $id=I('id');
        $prires=$pri->find($id);
        $this->assign('prires', $prires);
        $pris=$pri->pritree();
        $this->assign('pris', $pris);
        $this->display();
    }
    
    public function del(){
        $pri=D('Privilege');
        $id=I('id');
        if($pri->delete($id)){
            $this->success('成功删除权限!', U('lst'));
        }else{
            $this->error('删除权限失败!');
        }
    }
}
