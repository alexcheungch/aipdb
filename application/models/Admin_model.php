<?php

include_once APPPATH.'libraries/MY_Basemodel.php';

class Admin_model extends MY_Basemodel {
    
    public $primary_key = 'admin_id';

    public $soft_deletes = true;
    
    public function login($loginname = '', $password = '') {
        $condition['admin_loginname'] = $loginname;
        $userinfo = $this->fields('admin_id,admin_loginname,admin_loginpw,admin_role')->get($condition);
        if (!$userinfo) {
            return false;
        }
        if (password_verify($password, $userinfo['admin_loginpw'])) {
            unset($userinfo['admin_loginpw']);
            return $userinfo;
        } else {
            return false;
        }
    }
    
    public function register($user_data) {
        $user_data['admin_loginpw'] = password_hash($user_data['admin_loginpw'], PASSWORD_BCRYPT, array('cost' => 12));
    }
}
