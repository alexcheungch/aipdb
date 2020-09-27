<?php

class Allocation extends MY_Controller {

    public function index() {
        $this->load->model('Allocation_model');
        $this_list = $this->Allocation_model->get_all_data();
        $this->assign('Allocation_list', $this_list);
        $this->display();
    }

    public function delete($id = 0) {
        $this->load->model('Allocation_model');
        $data = $this->Allocation_model->get($id);
        if (!$data) {
            $this->redirect_msg('刪除的數據不存在');
        }
        $result = $this->Allocation_model->delete($id);
        if ($result) {
            $this->redirect_msg('刪除成功', 'Allocation');
        } else {
            $this->redirect_msg('刪除失敗');
        }
    }

    public function edit($jobcode = '') {
        $this->load->model('Allocation_model');
        $this->load->model('ClientMtn_model');
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
        $data = $this->Allocation_model->get_data(array('JobCode' => $jobcode));
        $this->assign('data', $data);
        $this->load->model('JobMtn_model');
        $jobMtn = $this->JobMtn_model->get_data(array('JobCode' => $jobcode));
        $this->assign('jobMtn', $jobMtn);
        $clientMtn = $this->ClientMtn_model->get_data(array('ClientCode1'=>$jobMtn['ClientCode1']));
        $this->assign('clientMtn', $clientMtn);
        $this->display();
    }

    public function create() {
        $this->load->model('Allocation_model');
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
            $this->load->model('Allocation_model');
            $postdata = $this->input->post(null, true);
            if (isset($postdata['clientcode1']) && $postdata['clientcode1']) {
                $result = $this->Allocation_model->update_data(array('clientcode1' => $postdata['clientcode1']), $postdata);
            } else {
                $result = $this->Allocation_model->insert($postdata);
            }
            if ($result) {
                $this->redirect_msg('保存成功', 'Allocation');
            } else {
                $this->redirect_msg('保存失敗');
            }
        }
    }

}
