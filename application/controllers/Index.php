<?php

class Index extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        redirect('/clientMtn');
    }
    
    public function login() {
        if ($this->user_info) {
            redirect('/');
        }
        $this->load->helper('captcha');
        $this->load->config('captcha');
        $captcha = config_item('captcha');
        $cap_image = create_captcha($captcha);
        $this->session->set_userdata(array('captcha_word' => $cap_image['word']));
        $this->assign('captcha', $cap_image);
        $this->display('index/login', true);
    }
    
    public function change_captcha() {
        $this->load->helper('captcha');
        $this->load->config('captcha');
        $captcha = config_item('captcha');
        $cap_image = create_captcha($captcha);
        $this->session->set_userdata(array('captcha_word' => $cap_image['word']));
        echo json_encode(array('img_url'=>$captcha['img_url'], 'file'=>$cap_image['filename']));
    }

    public function dologin() {
        if ($this->user_info) {
            redirect('/');
        }
        $this->load->model('ASUser_model');
        $loginname = $this->input->post('admin_loginname');
        $password = $this->input->post('admin_loginpw');
        $post_captcha_word = $this->input->post('captcha_word');
        $session_captcha_word = $this->session->captcha_word;
        if (strtolower($post_captcha_word) != strtolower($session_captcha_word)) {
            $this->redirect_msg("驗證碼輸入不正確。", '/Index/login');
        }
        $userinfo = $this->ASUser_model->login($loginname, $password);
        if ($userinfo === false) {
            redirect('/Index/login');
        } else {
            $this->load->model('LoginHistory_model');
            $this->LoginHistory_model->insert(array('UserName'=>$userinfo['UserName'], 'LoginTime'=>date('Y-m-d H:i:s')));
            $this->session->set_userdata(array('user_info' => $userinfo));
            redirect('/Index');
        }
    }
    
    public function logout() {
        $this->session->unset_userdata('user_info');
        redirect('/Index/login');
    }
}
