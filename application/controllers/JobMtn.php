<?php

class JobMtn extends MY_Controller {

    public function index() {
        $condition = array();
        $from = $this->input->get('from');
        $to = $this->input->get('to');
        if ($from) {
            $from = strtotime($from);
            $condition['JobPeriodFrom >='] = date('Y-m-d',$from);
        }
        if ($to) {
            $to = strtotime($to);
            $condition['JobPeriodTo <='] = date('Y-m-d',$to);
        }
        $this->load->model('JobMtn_model');
        $this_list = $this->JobMtn_model->get_all_data($condition);
        $this->load->model('ClientMtn_model');
        $clientList = $this->ClientMtn_model->get_clients();
        $this->assign('JobMtn_list', $this_list);
        $this->assign('clientList', $clientList);
        $this->display();
    }

    public function delete($id = 0) {
        $this->load->model('JobMtn_model');
        $data = $this->JobMtn_model->get_data($id);
        if (!$data) {
            $this->redirect_msg('刪除的數據不存在');
        }
        $result = $this->JobMtn_model->delete($id);
        if ($result) {
            $this->load->model('JobProg_model');
            $this->JobProg_model->delete(array('JobCode' =>$data['JobCode']));
            $this->load->model('Allocation_model');
            $this->Allocation_model->delete(array('JobCode' =>$data['JobCode']));
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
        $this->load->model('SysParam_model');
        $result = $this->SysParam_model->get_all_data();
        $sys_param = array();
        foreach ($result as $value) {
            $param_value = str_replace(array('[',']',"'",'"'), array('','','',''), $value['ParamValue']);
            $sys_param[$value['ParamType']] = explode(',', $param_value);
        }
        $this->assign('sys_param', $sys_param);
        $this->display();
    }

    public function create() {
        $this->load->model('SysParam_model');
        $this->load->model('ClientMtn_model');
        $result = $this->SysParam_model->get_all_data();
        $sys_param = array();
        foreach ($result as $value) {
            $param_value = str_replace(array('[',']',"'",'"'), array('','','',''), $value['ParamValue']);
            $sys_param[$value['ParamType']] = explode(',', $param_value);
        }
        $this_list = $this->ClientMtn_model->get_clients();
        $this->assign('clientList', $this_list);
        $this->assign('sys_param', $sys_param);
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
                $jobMtnInfo = $this->JobMtn_model->get_data(array('JobCode' =>$postdata['JobCode']));
                if ($jobMtnInfo) {
                    $this->redirect_msg('JobCode 已經存在。');
                } else {
                    $result = $this->JobMtn_model->insert($postdata);
                }
            }
            if ($result) {
                if (!isset($postdata['ID'])) {
                    $this->load->model('JobProg_model');
                    $this->JobProg_model->insert(array('JobCode'=>$postdata['JobCode']));
                    $this->load->model('Allocation_model');
                    $this->load->model('Allocationparam_model');
                    $default_value = $this->Allocationparam_model->get_all_data();
                    $allocation_data = array('JobCode'=>$postdata['JobCode']);
                    foreach ($default_value as $value) {
                        if ($value) {
                            $allocation_data[$value['FieldName']] = $value['FieldValue'];
                        }
                    }
                    $this->Allocation_model->insert($allocation_data);
                }
                $this->redirect_msg('保存成功', 'JobMtn');
            } else {
                $this->redirect_msg('保存失敗');
            }
        }
    }

}
