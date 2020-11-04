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
        $this->load->model('Job_model');
        $this_list = $this->Job_model->get_all_data($condition);
        $this->load->model('ClientMtn_model');
        $clientList = $this->ClientMtn_model->get_clients();
        $this->assign('JobMtn_list', $this_list);
        $this->assign('clientList', $clientList);
        $this->display();
    }

    public function delete($id = 0) {
        $this->load->model('Job_model');
        $data = $this->Job_model->get_data($id);
        if (!$data) {
            $this->redirect_msg('刪除的數據不存在');
        }
        $result = $this->Job_model->delete($id);
        if ($result) {
//            $this->load->model('JobProg_model');
//            $this->JobProg_model->delete(array('JobCode' =>$data['JobCode']));
//            $this->load->model('Allocation_model');
//            $this->Allocation_model->delete(array('JobCode' =>$data['JobCode']));
            $this->redirect_msg('刪除成功', 'JobMtn');
        } else {
            $this->redirect_msg('刪除失敗');
        }
    }

    public function edit($id = 0) {
        $this->load->model('Job_model');
        $data = $this->Job_model->get_data($id);
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
        $this->load->model('Job_model');
        $max_job = $this->Job_model->get_data(array(),'JobNo',array('JobNo', 'desc'));
        $job_no = 1;
        if ($max_job) {
            $job_no = $max_job['JobNo'] + 1;
        }
        $this->assign('job_no', $job_no);
        $this->display();
    }

    public function save() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->load->model('Job_model');
            $alldata = $this->input->post(null, true);
            $postdata = array();
            foreach ($alldata as $key => $value) {
                if (substr($key, -3) != 'Val') {
                    $postdata[$key] = $value;
                }
            }
            if (isset($postdata['ID']) && $postdata['ID']) {
                $id = $postdata['ID'];
                unset($postdata['ID']);
                $result = $this->Job_model->update_data(array('ID' =>$id), $postdata);
                $is_insert = false;
            } else {
                $jobMtnInfo = $this->Job_model->get_data(array('JobCode' =>$postdata['JobCode']));
                if ($jobMtnInfo) {
                    $this->redirect_msg('JobCode 已經存在。');
                } else {
                    $postdata['SIBSS1CSFtr'] = 1;
                    $postdata['SIBSS2CSFtr'] = 1;
                    $postdata['SIBSS3CSFtr'] = 1;
                    $postdata['SIBSS4CSFtr'] = 1;
                    $postdata['SIBSS5CSFtr'] = 1;
                    $this->load->model('Allocationparam_model');
                    $default_value = $this->Allocationparam_model->get_all_data();
                    foreach ($default_value as $value) {
                        if ($value) {
                            $postdata[$value['FieldName']] = $value['FieldValue'];
                        }
                    }
                    $max_job = $this->Job_model->get_data(array(),'JobNo',array('JobNo', 'desc'));
                    $job_no = 1;
                    if ($max_job) {
                        $job_no = $max_job['JobNo'] + 1;
                    }
                    $postdata['JobNo'] = $job_no;
                    $result = $this->Job_model->insert($postdata);
                }
                $is_insert = true;
            }
            if ($result) {
                if ($is_insert) {
//                    $this->load->model('JobProg_model');
//                    $this->JobProg_model->insert(array('JobCode'=>$postdata['JobCode']));
//                    $this->load->model('Allocation_model');
//                    $this->load->model('Allocationparam_model');
//                    $default_value = $this->Allocationparam_model->get_all_data();
//                    $allocation_data = array(
//                        'JobCode'=>$postdata['JobCode'],
//                        'SIBSS1CSFtr' => 1,
//                        'SIBSS2CSFtr' => 1,
//                        'SIBSS3CSFtr' => 1,
//                        'SIBSS4CSFtr' => 1,
//                        'SIBSS5CSFtr' => 1
//                    );
//                    foreach ($default_value as $value) {
//                        if ($value) {
//                            $allocation_data[$value['FieldName']] = $value['FieldValue'];
//                        }
//                    }
//                    $this->Allocation_model->insert($allocation_data);
                }
                $this->redirect_msg('保存成功', 'JobMtn');
            } else {
                $this->redirect_msg('保存失敗');
            }
        }
    }

}
