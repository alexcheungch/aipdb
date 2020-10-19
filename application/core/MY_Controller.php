<?php

class MY_Controller extends CI_Controller {
    
    private $view_data = array();
    
    public $user_info = array();

    public $unlimit = array('index/login', 'index/dologin', 'index/change_captcha');

    public function __construct() {
        parent::__construct();
        //載入常用類庫
        $this->load->helper('url');
        //處理用戶信息
        $this->user_info = $this->session->user_info;
        if (!in_array($this->router->class.'/'.$this->router->method, $this->unlimit) && !$this->user_info) {
            redirect('/index/login');
        }
        $this->assign('user_info', $this->user_info);
//        $this->assign('admin_role', $this->user_info['admin_role']);
        $role = array(
            'clientmtn/edit' => 'UClient',
            'clientmtn/create' => 'UClient',
            'clientmtn/delete' => 'UClient',
            'clientmtn/index' => 'QClient',
            'clientmtn/save' => 'UClient',
            'jobmtn/edit' => 'UJob',
            'jobmtn/create' => 'UJob',
            'jobmtn/delete' => 'UJob',
            'jobmtn/index' => 'QJob',
            'jobmtn/save' => 'UJob',
            'jobprog/edit' => 'UJobProg',
            'jobprog/create' => 'UJobProg',
            'jobprog/delete' => 'UJobProg',
            'jobprog/index' => 'QJobProg',
            'jobprog/save' => 'UJobProg',
            'allocation/edit' => 'UAlloc',
            'allocation/create' => 'UAlloc',
            'allocation/delete' => 'UAlloc',
            'allocation/index' => 'QAlloc',
            'allocation/save' => 'UAlloc',
            'allocation/defaultvalue' => 'UAlloc',
            'allocation/savedefault' => 'UAlloc',
        );
        $current_class = strtolower($this->router->class);
        $current_method = strtolower($this->router->method);
        if ($current_class != 'index') {
            if ($current_class == 'tableadm' && $this->user_info['MMenu'] == 0) {
                $this->redirect_msg('無權限訪問 TableAdm', 'index/logout');
            } elseif ($current_class == 'sysparam' && $this->user_info['UMenu'] == 0) {
                $this->redirect_msg('無權限訪問 SysParam', 'index/logout');
            } elseif ($current_class == 'asuser' && $this->user_info['UMenu'] == 0) {
                $this->redirect_msg('無權限訪問 ASUser', 'index/logout');
            }
            if (!in_array($current_class, array('tableadm','sysparam','asuser'))) {
                if (!isset($role[$current_class.'/'.$current_method])) {
                    $this->redirect_msg('未設置權限 '.$current_class.'/'.$current_method, 'index/logout');
                } else {
                    $role_field = $role[$current_class.'/'.$current_method];
                    if (!isset($this->user_info[$role_field]) || $this->user_info[$role_field] == 0) {
                        $this->redirect_msg('無權限訪問 '.$current_class.'/'.$current_method, 'index/logout');
                    }
                }
            }
        }
        date_default_timezone_set("Asia/Shanghai");
    }

    public function assign($key = '', $value = '') {
        if (is_array($key)) {
            foreach ($key as $assign_key => $assign_value) {
                $this->view_data[$assign_key] = $assign_value;
            }
        } else {
            $this->view_data[$key] = $value;
        }
    }
    
    public function display($page = '', $no_layout = false) {
        if (!$page) {
            $page = strtolower($this->router->class.'/'.$this->router->method);
        }
        if ($no_layout) {
            $this->load->view($page, $this->view_data);
        } else {
            $this->assign('content', $page);
            $this->load->view('layout', $this->view_data);
        }
    }
    
    protected function get_new_csrf_value() {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $this->assign('csrf', $csrf);
        return $csrf;
    }
    
    protected function output_jsondata($data) {
        $new_csrf = $this->get_new_csrf_value();
        $data['csrf'] = $new_csrf;
        $output_data = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
        $this->output->set_content_type('application/json', 'utf-8')->set_output($output_data);
    }
    
    protected function redirect_msg($msg = '', $url = '') {
        if ($url) {
            echo '<script>alert("'.$msg.'");location.href = "'.base_url($url).'"</script>';
        } else {
            echo '<script>alert("'.$msg.'");history.go(-1);</script>';
        }
        exit;
    }
}