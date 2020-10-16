<?php

class Asuser extends MY_Controller {

    public function index() {
        $this->load->model('ASUser_model');
        $this_list = $this->ASUser_model->get_all_data();
        $this->assign('asuser_list', $this_list);
        $this->display();
    }

    public function delete($id = 0) {
        $this->load->model('ASUser_model');
        $data = $this->ASUser_model->get_data($id);
        if (!$data) {
            $this->redirect_msg('刪除的數據不存在');
        }
        $result = $this->ASUser_model->delete($id);
        if ($result) {
            $this->redirect_msg('刪除成功', 'asuser');
        } else {
            $this->redirect_msg('刪除失敗');
        }
    }

    public function edit($id = 0) {
        $this->load->model('ASUser_model');
        $data = $this->ASUser_model->get_data($id);
        if (!$data) {
            $this->redirect_msg('修改的數據不存在');
        }
        $this->assign('data', $data);
        $this->display();
    }

    public function create() {
        $this->display();
    }

    public function save() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->load->model('ASUser_model');
            $postdata = $this->input->post(null, true);
            if (isset($postdata['ID']) && $postdata['ID']) {
                $id = $postdata['ID'];
                unset($postdata['ID']);
                if ($postdata['UserPW']) {
                    $postdata['UserPW'] = md5($postdata['UserPW']);
                } else {
                    unset($postdata['UserPW']);
                }
                $result = $this->ASUser_model->update_data(array('ID' =>$id), $postdata);
            } else {
                $postdata['UserPW'] = md5($postdata['UserPW']);
                $result = $this->ASUser_model->insert($postdata);
            }
            if ($result) {
                $this->redirect_msg('保存成功', 'asuser');
            } else {
                $this->redirect_msg('保存失敗');
            }
        }
    }

}
