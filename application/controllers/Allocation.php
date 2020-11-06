<?php

class Allocation extends MY_Controller {

    public function index() {
        $this->load->model('Job_model');
        $this_list = $this->Job_model->get_all_data();
        $this->assign('Allocation_list', $this_list);
        $this->display();
    }

    public function delete($id = 0) {
        $this->load->model('Job_model');
        $data = $this->Job_model->get($id);
        if (!$data) {
            $this->redirect_msg('刪除的數據不存在');
        }
        $result = $this->Job_model->delete($id);
        if ($result) {
            $this->redirect_msg('刪除成功', 'Allocation');
        } else {
            $this->redirect_msg('刪除失敗');
        }
    }

    public function edit($jobcode = '') {
        $this->load->model('Job_model');
        $this->load->model('ClientMtn_model');
        $this->load->model('ListStaffList_model');
//        $this->load->model('ListDocLoc_model');
        $this->load->model('ListAcMgr_model');
//        $this->load->model('ListSentOutVia_model');
        $this->load->model('JobProg_model');
        $sys_result = $this->get_sys_params('ListDocLoc');
        $sys_result1 = $this->get_sys_params('ListSentOutVia');
        $sys_result2 = $this->get_sys_params('Part3Adj');
        $this->assign('part3adj', $sys_result2);
        $sys_result3 = $this->get_sys_params('Part1Adj');
        $this->assign('part1adj', $sys_result3);
        $sys_result4 = $this->get_sys_params('Part2Adj');
        $this->assign('part2adj', $sys_result4);
        $sys_result5 = $this->get_sys_params('CSFactor');
        $this->assign('csfactor', $sys_result5);
        $this_list = $this->ClientMtn_model->get_clients();
        $staffList = $this->ListStaffList_model->get_all();
//        $docLoc = $this->ListDocLoc_model->get_all();
        $acMgr = $this->ListAcMgr_model->get_all();
//        $sentOutVia = $this->ListSentOutVia_model->get_all();
        $this->assign('clientList', $this_list);
        $this->assign('staffList', $staffList);
        $this->assign('docLoc', $sys_result);
        $this->assign('acMgr', $acMgr);
        $this->assign('sentOutVia', $sys_result1);
        $data = $this->Job_model->get_data(array('JobCode' => $jobcode));
        $this->assign('data', $data);
//        $this->load->model('Job_model');
//        $jobMtn = $this->Job_model->get_data(array('JobCode' => $jobcode));
        $this->assign('jobMtn', $data);
        $clientMtn = $this->ClientMtn_model->get_data(array('ClientCode1'=>$data['ClientCode1']));
        $this->assign('clientMtn', $clientMtn);
//        $jobProg = $this->JobProg_model->get_data(array('JobCode' => $jobcode));
        $this->assign('jobProg', $data);
        $this->assign('jobcode', $jobcode);
        $this->display();
    }

    public function create() {
        $this->load->model('Job_model');
        $this->load->model('ClientMtn_model');
        $this->load->model('JobProg_model');
        $this->load->model('ListStaffList_model');
//        $this->load->model('ListDocLoc_model');
        $this->load->model('ListAcMgr_model');
//        $this->load->model('ListSentOutVia_model');
        $sys_result = $this->get_sys_params('ListDocLoc');
        $sys_result1 = $this->get_sys_params('ListSentOutVia');
        $this_list = $this->ClientMtn_model->get_clients();
        $staffList = $this->ListStaffList_model->get_all();
//        $docLoc = $this->ListDocLoc_model->get_all();
        $acMgr = $this->ListAcMgr_model->get_all();
//        $sentOutVia = $this->ListSentOutVia_model->get_all();
        $this->assign('clientList', $this_list);
        $this->assign('staffList', $staffList);
        $this->assign('docLoc', $sys_result);
        $this->assign('acMgr', $acMgr);
        $this->assign('sentOutVia', $sys_result1);
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
            
            $fields = $this->db->field_data('job');
            $jobtable_fields = array();
            foreach ($fields as $field) {
                $jobtable_fields[$field->name] = $field->type;
            }
            $update_data = array();
            foreach ($postdata as $key => $value) {
                if (isset($jobtable_fields[$key]) && $jobtable_fields[$key] == 'int') {
                    $update_data[$key] = (int) $value;
                } elseif (isset($jobtable_fields[$key]) && $jobtable_fields[$key] == 'float') {
                    $update_data[$key] = (float) $value;
                } else {
                    $update_data[$key] = $value;
                }
            }
            
            $result = $this->Job_model->update_data(array('JobCode' => $job_code), $update_data);
            if ($result) {
                $this->redirect_msg('保存成功', 'Allocation');
            } else {
                $this->redirect_msg('保存失敗');
            }
        }
    }

    public function defaultvalue() {
        $this->load->model('Allocationparam_model');
        $this_list = $this->Allocationparam_model->get_all_data();
        $this->assign('field_list', $this_list);
        $this->display();
    }
    
    public function savedefault() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->load->model('Allocationparam_model');
            $this->load->model('Allocationhistory_model');
            $postdata = $this->input->post(null, true);
            foreach ($postdata as $key => $value) {
                $value = trim($value);
                if (!$value) {
                    $value = '';
                }
                $this->Allocationparam_model->update_data(array('FieldName' => $key), array('FieldValue'=>$value));
                $this->Allocationhistory_model->insert(array('FieldName' => $key,'FieldValue'=>$value,'ModifyDate'=>date('Y-m-d H:i:s')));
            }
            $this->redirect_msg('保存成功', 'Allocation/defaultvalue');
        }
    }
}
