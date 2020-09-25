<?php

class JobMtn extends MY_Controller {

    public function index() {
        $this->load->model('JobMtn_model');
        $this_list = $this->JobMtn_model->get_all_data();
        $this->assign('JobMtn_list', $this_list);
        $this->display();
    }

    public function delete($id = 0) {
        $this->load->model('JobMtn_model');
        $data = $this->JobMtn_model->get($id);
        if (!$data) {
            $this->redirect_msg('刪除的數據不存在');
        }
        $result = $this->JobMtn_model->delete($id);
        if ($result) {
            $this->redirect_msg('刪除成功', 'JobMtn');
        } else {
            $this->redirect_msg('刪除失敗');
        }
    }

    public function edit($id = 0) {
        $this->load->model('JobMtn_model');
        $data = $this->JobMtn_model->get_data($id);
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
            $this->load->model('JobMtn_model');
            $postdata = $this->input->post(null, true);
            if (isset($postdata['ID']) && $postdata['ID']) {
                $id = $postdata['ID'];
                unset($postdata['ID']);
                $result = $this->JobMtn_model->update_data(array('ID' =>$id), $postdata);
            } else {
                $result = $this->JobMtn_model->insert($postdata);
            }
            if ($result) {
                $this->redirect_msg('保存成功', 'JobMtn');
            } else {
                $this->redirect_msg('保存失敗');
            }
        }
    }

}
