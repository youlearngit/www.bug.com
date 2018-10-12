<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author 凯凯
 */
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    //put your code here
    public function login(){
        if(IS_POST){
            //判断用户名，密码是否正确
            $managerinfo=D('User')->where(array('username'=>$_POST['username'],'pwd'=>md5($_POST['pwd'])))->find();
            if($managerinfo!==null){
                //持久化用户信息
                session('admin_id',$managerinfo['id']);
                session('admin_name', $managerinfo['username']);
                $this->getpri($managerinfo['roleid']);
                //登录成功页面跳到后台
                $this->redirect('Index/index');
            }else{
                $this->error('用户名或密码错误',U('Login/login'),1);
            }
            return;
        }
        $this->display();
    }
    
    public function getpri($roleid){
		$role=D('role');
		$pri=D('privilege');
		$role->field('rolename,pri_id_list')->find($roleid);
		session('rolename',$role->rolename);
		if($role->pri_id_list=='*'){
			session('privilege','*');
			$menu=$pri->where("parentid=0")->select();
			foreach ($menu as $k => $v) {
				$menu[$k]['sub']=$pri->where('parentid='.$v['id'])->select();
			}

			session('menu',$menu);

		}else{
			//Admin/Admin/add,Admin/Article/add
			
			$pris=$pri->field('id,parentid,pri_name,mname,cname,aname,CONCAT(mname,"/",cname,"/",aname) url')->where("id IN({$role->pri_id_list})")->select();
			$_pris=array();
			$menu=array();
			foreach($pris as $k=>$v){
				$_pris[]=$v['url'];
				if($v['parentid']==0){
				$menu[]=$v;
				}
			}
			session('privilege',$_pris);
			foreach ($menu as $k => $v) {
				foreach ($pris as $k1 => $v1) {
					if($v1['parentid']==$v['id']){
						$menu[$k]['sub'][]=$v1;
					}
					
				}
			}

			session('menu',$menu);
		}

	}

    
    //退出系统
    function logout(){
        session(null);
        $this->redirect('Login/login');
    }
    
    //验证码
//    function verifyImg(){
//        $cfg=array(
//            'fontSize'=>15,//验证码字体大小(px)
//            'imageH'=>40,//验证码图片高度
//            'imageW'=>100,//验证码图片宽度
//            'length'=>4,//验证码位数
//        );
//        $very=new \Think\Verify($cfg);
//        $very->entry();
//    }
    
    //通过ajax进行验证
//    function checkCode(){
//        //ajax过来的验证码信息
//        $code=I('get.code');
//        $vry=new \Think\Verify();
//        if($vry->check($code)){
//            echo json_encode(array('f'=>1,'rst'=>"<span style='color:green'>验证码正确</span>"));
//        }else{
//             echo json_encode(array( 'f'=>2,'rst'=>"<span style='color:red'>验证码错误</span>"));
//        }
//    }
}
