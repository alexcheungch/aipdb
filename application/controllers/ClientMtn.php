<?php

class ClientMtn extends MY_Controller {

    public function index() {
        $this->load->model('ClientMtn_model');
        $ClientMtn_list = $this->ClientMtn_model->get_all();
        $this->assign('ClientMtn_list', $ClientMtn_list);
        $this->display('clientmtn/index');
    }

    public function delete($id = 0) {
        $this->load->model('ClientMtn_model');
        $data = $this->ClientMtn_model->get($id);
        if (!$data) {
            $this->redirect_msg('刪除的數據不存在');
        }
        $result = $this->ClientMtn_model->delete($id);
        if ($result) {
            $this->redirect_msg('刪除成功', 'ClientMtn');
        } else {
            $this->redirect_msg('刪除失敗');
        }
    }

    public function edit($ClientCode1) {
        $this->load->model('ClientMtn_model');
        $this->load->model('ListAcMgr_model');
        $this->load->model('SysParam_model');
        $acMgr = $this->ListAcMgr_model->get_all();
        $data = $this->ClientMtn_model->getClientByCode($ClientCode1);
        $clientLegalEntity = $this->SysParam_model->get_param('ClientLegalEntity');
        $clientJurisdiction = $this->SysParam_model->get_param('ClientJurisdiction');
        $nonTaxDeadlineNature = $this->SysParam_model->get_param('NonTaxDeadlineNature');
        $lastClientStatus = $this->SysParam_model->get_param('LastClientStatus');
        if (!$data) {
            $this->redirect_msg('修改的數據不存在');
        }
        $this->assign('data', $data);
        $this->assign('acMgr', $acMgr);
        $this->assign('clientLegalEntity', $clientLegalEntity);
        $this->assign('clientJurisdiction', $clientJurisdiction);
        $this->assign('nonTaxDeadlineNature', $nonTaxDeadlineNature);
        $this->assign('lastClientStatus', $lastClientStatus);
        $this->display();
    }

    public function create() {
        $this->load->model('ListAcMgr_model');
        $acMgr = $this->ListAcMgr_model->get_all();
        $this->assign('acMgr', $acMgr);
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

    public function save() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->load->model('ClientMtn_model');
            $postdata = $this->input->post(null, true);
            $operate = $postdata['operate'];
            unset($postdata['operate']);
            if ($operate == 'edit') {
                $result = $this->ClientMtn_model->update_data(array('clientcode1' => $postdata['clientcode1']), $postdata);
            } else {
                $result = $this->ClientMtn_model->insert($postdata);
            }
            if ($result) {
                $this->redirect_msg('保存成功', 'ClientMtn');
            } else {
                $this->redirect_msg('保存失敗');
            }
        }
    }

    public function getClientbyCode1($autocomplete) {
        $this->load->model('ClientMtn_model');
        $i = 0;
        $clientList = $this->ClientMtn_model->get_clients($autocomplete);

        if (count($clientList) > 0) {
            echo json_encode($clientList);
//          echo "<ul>";
//          foreach($clientList as $client){
//            echo "<li ClientCode1='".$clientList[$i]['ClientCode1']." ClientCode2='".$clientList[$i]['ClientCode2']." ClientCode3='".$clientList[$i]['ClientCode3']." ClientName='".$clientList[$i]['ClientName']." NormalYearEndDate='".$clientList[$i]['NormalYearEndDate']." NonTaxDeadlineDate='".$clientList[$i]['NonTaxDeadlineDate']."'>
//            <a href='#'>".$clientList[$i]['ClientCode1']."</a></li>";
//            $i++;
//          }
//          echo "</ul>";
        }
    }

}
