<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController{
     public function lst(){
        $user=D('User');
        $count=$user->count();//查询满足要求的总记录数�
        $page=new \Think\Page($count, 2);//实例化分页类 传入总记录数和每页显示的记录
        // 配置翻页的样式
	$page->setConfig('prev', '上一页');
	$page->setConfig('next', '下一页');
        $show=$page->show();//分页显示输出
        $info=$user->field('a.id,a.username,a.status,b.rolename')->alias('a')
                    ->join('LEFT JOIN sp_role b ON a.roleid=b.id')
                    ->limit($page->firstRow.','.$page->listRows)->select();
        //var_dump($info);die;
        $this->assign('page', $show);//赋值分页输出
        $this->assign('info', $info);
        
        $this->display();
    }
    //put your code here
   public function add(){
        $user=D('User');
        if(IS_POST){
            //$data['username']=I('username');
            //$data['pwd']=md5(I('pwd'));
           
            if($user->create(I('post.'), 1)){
                //var_dump($user->create());die;
             $user->pwd=md5($user->pwd);
             if($user->add()){
                 $this->success('添加成功', U('lst'));
             }else{
                 $this->error('添加失败');
             }
             }else{
                $this->error($user->getError());
         }
         return;
        }
        $role=D('Role');
        $roles=$role->select();
        $this->assign('roles', $roles);
        $this->display();
    }
    
     public function edit(){
        $user=D('User');
        if(IS_POST){
            //$data['username']=I('username');
            //$data['pwd']=md5(I('pwd'));
            //var_dump($data['pwd']);die;
           if($user->create()){
               $user->pwd=md5($user->pwd);
               if($user->save()){
                   $this->success('更新成功', U('lst'));
               }else{
                   $this->error('更新失败');
               }
           }else{
               $this->error($user->getError());
           }
           return;
        }
        $id=I('id');
        $info=$user->find($id);
        $this->assign('info', $info);
        $role=D('Role');
        $roles=$role->select();
        $this->assign('roles', $roles);
        $this->display();
    }
    
    public function del(){
        $id=I('id');
        //var_dump($id);die;
        $user=D('User');
        if($user->delete($id)){
            $this->success('删除成功', U('lst'));
        }else{
            $this->error('删除失败');
        }
    }  
}
