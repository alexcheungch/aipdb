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
            $this->session->set_userdata(array('user_info' => $userinfo));
            redirect('/Index');
        }
    }
    
    public function logout() {
        $this->session->unset_userdata('user_info');
        redirect('/Index/login');
    }
    
    public function changepw() {
        if (!$this->user_info) {
            redirect('/Index/login');
        }
        $this->load->model('ASUser_model');
        $old_password = $this->input->post('old_password');
        $new_password1 = $this->input->post('new_password1');
        $new_password2 = $this->input->post('new_password2');
        if ($new_password1 != $new_password2) {
            $this->redirect_msg("兩次輸入的新密碼不一致。", '/clientMtn');
        }
        $userinfo = $this->ASUser_model->get_data(array('UserName' => $this->user_info['UserName']));
        if (!$userinfo) {
            $this->redirect_msg("用戶不存在。", '/clientMtn');
        }
        if (md5($old_password) != $userinfo['UserPW']) {
            $this->redirect_msg("舊密碼輸入不正確。", '/clientMtn');
        }
        $result = $this->ASUser_model->update_data(array('UserName' => $this->user_info['UserName']), array('UserPW'=>md5($new_password1)));
        if ($result) {
            $this->redirect_msg("密碼修改成功。", '/clientMtn');
        } else {
            $this->redirect_msg("密碼修改失敗。", '/clientMtn');
        }
    }
}
