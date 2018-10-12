<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model 
{
	protected $insertFields = array('username','pwd','status','roleid');
	protected $updateFields = array('id','username','pwd','status','roleid');
	protected $_validate = array(
		array('username', 'require', '姓名不能为空！', 1, 'regex', 3),
		array('username', '1,32', '姓名的值最长不能超过 32 个字符！', 1, 'length', 3),
                array('username','','名称不得重复！',1,unique,1),
                array('username','','名称不得重复！',1,unique,2),
		array('pwd', 'require', '密码不能为空！', 1, 'regex', 3),
		array('pwd', '1,32', '密码的值最长不能超过 32 个字符！', 1, 'length', 3),
		array('status', 'number', '必须是一个整数！', 2, 'regex', 3),
	);
	
	// 添加前
	protected function _before_insert(&$data, $option)
	{
	}
	// 修改前
	protected function _before_update(&$data, $option)
	{
	}
	// 删除前
	protected function _before_delete($option)
	{
		if(is_array($option['where']['id']))
		{
			$this->error = '不支持批量删除';
			return FALSE;
		}
	}
	/************************************ 其他方法 ********************************************/
        
        public function getpri($roleid){
            $role=D('Role');
            $pri=D('Privilege');
            $role->field('rolename,pri_id_list')->find($roleid);
            session('rolename',$role->rolename);
            if($role->pri_id_list=='*'){
                session('privilege','*');
                $menu=$pri->where("parentid=0")->select();
                foreach($menu as $k=>$v){
                    $menu[$k]['sub']=$pri->where('parentid='.$v['id'])->select();
                }
                session('menu',$menu);
            }else{
                $pris=$pri->field('id,parentid,pri_name,mname,cname,aname,CONCAT(mname,"/",cname,"/",aname) url')
                          ->where("id IN({$role->pri_id_list})")->select();
                $_pris=array();
                $menu=array();
                foreach($pris as $k=>$v){
                    $_pris[]=$v['url'];
                    if($v['parentid']==0){
                        $menu[]=$v;
                    }
                }
                session('privilege',$_pris);
                foreach($menu as $k=>$v){
                    foreach($pris as $k1=>$v1){
                        if($v1['parentid']==$v['id']){
                            $menu[$k]['sub'][]=$v1;
                        }
                    }
                }
                session('menu',$menu);
            }
        }
}