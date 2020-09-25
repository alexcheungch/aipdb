<?php

class JobProg extends MY_Controller {

    public function index() {
        $this->load->model('JobProg_model');
        $this_list = $this->JobProg_model->get_all_data();
        $this->assign('JobProg_list', $this_list);
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
        $this->load->model('JobProg_model');
        $this->load->model('ListStaffList_model');
        $this->load->model('ListDocLoc_model');
        $this->load->model('ListAcMgr_model');
        $this->load->model('ListSentOutVia_model');
        $data = $this->JobProg_model->getfullJob();
        $this->assign('data', $data);
        $this->display();
    }

    public function create() {
        $this->load->model('ClientMtn_model');
        $this->load->model('JobProg_model');
        $this->load->model('ListStaffList_model');
        $this->load->model('ListDocLoc_model');
        $this->load->model('ListAcMgr_model');
        $this->load->model('ListSentOutVia_model');
        $this_list = $this->ClientMtn_model->get_clients();
        $staffList = $this->ListStaffList_model->get_all();
        $docLoc = $this->ListDocLoc_model->get_all();
        $acMgr = $this->ListAcMgr_model->get_all();
        $sentOutVia = $this->ListSentOutVia_model->get_all();
        $this->assign('clientList', $this_list);
        $this->assign('staffList', $staffList);
        $this->assign('docLoc', $docLoc);
        $this->assign('acMgr', $acMgr);
        $this->assign('sentOutVia', $sentOutVia);
        $this->display();
    }

    public function allocate() {
        $this->load->model('ClientMtn_model');
        $this->load->model('JobProg_model');
        $this->load->model('ListStaffList_model');
        $this->load->model('ListDocLoc_model');
        $this->load->model('ListAcMgr_model');
        $this->load->model('ListSentOutVia_model');
        $this_list = $this->ClientMtn_model->get_clients();
        $staffList = $this->ListStaffList_model->get_all();
        $docLoc = $this->ListDocLoc_model->get_all();
        $acMgr = $this->ListAcMgr_model->get_all();
        $sentOutVia = $this->ListSentOutVia_model->get_all();
        $this->assign('clientList', $this_list);
        $this->assign('staffList', $staffList);
        $this->assign('docLoc', $docLoc);
        $this->assign('acMgr', $acMgr);
        $this->assign('sentOutVia', $sentOutVia);
        $this->display();
    }

    public function save() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->load->model('JobMtn_model');
            $postdata = $this->input->post(null, true);
            if (isset($postdata['clientcode1']) && $postdata['clientcode1']) {
                $result = $this->JobMtn_model->update_data(array('clientcode1' => $postdata['clientcode1']), $postdata);
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
