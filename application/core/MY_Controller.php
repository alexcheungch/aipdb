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
        $this->assign('admin_role', $this->user_info['admin_role']);
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