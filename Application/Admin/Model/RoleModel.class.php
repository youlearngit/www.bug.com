<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RoleModel
 *
 * @author 凯凯
 */
namespace Admin\Model;
use Think\Model;
class RoleModel extends Model{
    //put your code here
    protected $_validate=array(
      array('rolename','require','角色名称不得为空!',1),
      array('rolename','','角色名称不得重复',1,unique),
    );
}
