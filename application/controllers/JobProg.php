<?php

class JobProg extends MY_Controller {

    public function index() {
        $this->load->model('Job_model');
        $this_list = $this->Job_model->get_all_data();
        $this->assign('JobProg_list', $this_list);
        $this->display();
    }

    public function edit($jobcode = '') {
        $this->load->model('Job_model');
        $this->load->model('ListStaffList_model');
        $this->load->model('ListDocLoc_model');
        $this->load->model('ListAcMgr_model');
        $this->load->model('ListSentOutVia_model');
        $this->load->model('ClientMtn_model');
        $this->load->model('SysParam_model');
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
        $data = $this->Job_model->getfullJob($jobcode);
        $this->assign('data', $data);
        $result = $this->SysParam_model->get_all_data();
        $sys_param = array();
        foreach ($result as $value) {
            $param_value = str_replace(array('[',']',"'",'"'), array('','','',''), $value['ParamValue']);
            $sys_param[$value['ParamType']] = explode(',', $param_value);
        }
        $this->assign('sys_param', $sys_param);
        $this->assign('jobcode', $jobcode);
        $this->display();
    }

    public function allocate() {
        $this->load->model('ClientMtn_model');
        $this->load->model('Job_model');
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
            $this->load->model('Job_model');
            $postdata = $this->input->post(null, true);
            if (!isset($postdata['JobCode']) || !$postdata['JobCode']) {
                $this->redirect_msg('缺少JobCode');
            }
            $job_prog_info = $this->Job_model->get_data(array('JobCode'=>$postdata['JobCode']));
            if (!$job_prog_info) {
                $this->redirect_msg('JobProg不存在');
            }
            $job_code = $postdata['JobCode'];
            unset($postdata['JobCode']);
            $result = $this->Job_model->update_data(array('JobCode' => $job_code), $postdata);
            if ($result) {
                $this->redirect_msg('保存成功', 'JobProg');
            } else {
                $this->redirect_msg('保存失敗');
            }
        }
    }

}
