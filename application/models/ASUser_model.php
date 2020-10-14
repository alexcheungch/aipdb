<?php

include_once APPPATH.'libraries/MY_Basemodel.php';

class ASUser_model extends MY_Basemodel {
    
    public $table = 'ASUser';    
    public $primary_key = 'ID';
    
    public function login($loginname = '', $password = '') {
        $condition['UserName'] = $loginname;
        $userinfo = $this->get($condition);
        if (!$userinfo) {
            return false;
        }
        if (md5($password) == $userinfo['UserPW']) {
            unset($userinfo['UserPW']);
            return $userinfo;
        } else {
            return false;
        }
    }
}
