<?php

class Sysparam extends MY_Controller {

    public function index() {
        $this->load->model('SysParam_model');
        $this_list = $this->SysParam_model->get_all_data();
        $this->assign('sysparam_list', $this_list);
        $this->display();
    }

    public function delete($id = 0) {
        $this->load->model('SysParam_model');
        $data = $this->SysParam_model->get_data($id);
        if (!$data) {
            $this->redirect_msg('刪除的數據不存在');
        }
        $result = $this->SysParam_model->delete($id);
        if ($result) {
            $this->redirect_msg('刪除成功', 'Sysparam');
        } else {
            $this->redirect_msg('刪除失敗');
        }
    }

    public function edit($id = 0) {
        $this->load->model('SysParam_model');
        $data = $this->SysParam_model->get_data($id);
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
            $this->load->model('SysParam_model');
            $postdata = $this->input->post(null, true);
            if (isset($postdata['ID']) && $postdata['ID']) {
                $id = $postdata['ID'];
                unset($postdata['ID']);
                $result = $this->SysParam_model->update_data(array('ID' =>$id), $postdata);
            } else {
                $result = $this->SysParam_model->insert($postdata);
            }
            if ($result) {
                $this->redirect_msg('保存成功', 'sysparam');
            } else {
                $this->redirect_msg('保存失敗');
            }
        }
    }

}
