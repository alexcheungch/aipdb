<?php

class TableAdm extends MY_Controller {

    public function index() {
        $this->load->model('ListStaffList_model');
        $this_list = $this->ListStaffList_model->get_all_data();
        $this->assign('ListStaffList_list', $this_list);
        $this->assign('ThisTable', 'ListStaffList');
        $this->display('tableadm/liststafflist_index');
    }

    public function liststafflist() {
        $this->load->model('ListStaffList_model');
        $this_list = $this->ListStaffList_model->get_all_data();
        $this->assign('ListStaffList_list', $this_list);
        $this->assign('ThisTable', 'ListStaffList');
        $this->display('tableadm/liststafflist_index');
    }
    
    public function listacmgr() {
        $this->load->model('ListAcMgr_model');
        $this_list = $this->ListAcMgr_model->get_all_data();
        $this->assign('ListAcMgr', $this_list);
        $this->assign('ThisTable', 'ListAcMgr');
        $this->display();
    }
    
    public function listdocloc() {
        $this->load->model('ListDocLoc_model');
        $this_list = $this->ListDocLoc_model->get_all_data();
        $this->assign('ListDocLoc', $this_list);
        $this->assign('ThisTable', 'ListDocLoc');
        $this->display();
    }

    public function listsentoutvia() {
        $this->load->model('ListSentOutVia_model');
        $this_list = $this->ListSentOutVia_model->get_all_data();
        $this->assign('ListSentOutVia', $this_list);
        $this->assign('ThisTable', 'ListSentOutVia');
        $this->display();
    }

    public function delete($table, $id = 0) {
        $data = false;
        if ($table == 'ListStaffList') {
            $this->load->model('ListStaffList_model');
            $data = $this->ListStaffList_model->get($id);
        } elseif ($table == 'ListAcMgr') {
            $this->load->model('ListAcMgr_model');
            $data = $this->ListAcMgr_model->get(array('ID' => $id));
        } elseif ($table == 'ListDocLoc') {
            $this->load->model('ListDocLoc_model');
            $data = $this->ListDocLoc_model->get(array('ID' => $id));
        } elseif ($table == 'ListSentOutVia') {
            $this->load->model('ListSentOutVia_model');
            $data = $this->ListSentOutVia_model->get(array('ID' => $id));            
        }
        if (!$data) {
            $this->redirect_msg('刪除的數據不存在');
        }
        $result = false;
        if ($table == 'ListStaffList') {
            $action = 'liststafflist';
            $result = $this->ListStaffList_model->delete($id);
        } elseif ($table == 'ListAcMgr') {
            $action = 'ListAcMgr';
            $result = $this->ListAcMgr_model->delete($id);
        } elseif ($table == 'ListDocLoc') {
            $action = 'ListDocLoc';
            $result = $this->ListDocLoc_model->delete($id);
        } elseif ($table == 'ListSentOutVia') {
            $action = 'ListSentOutVia';
            $result = $this->ListSentOutVia_model->delete($id);            
        }
        if ($result) {
            $this->redirect_msg('刪除成功', 'TableAdm/'.$action);
        } else {
            $this->redirect_msg('刪除失敗');
        }
    }

    public function edit($table, $id) {
        $data = false;
        if ($table == 'ListStaffList') {
            $this->load->model('ListStaffList_model');
            $data = $this->ListStaffList_model->get(array('ID' => $id));
        } elseif ($table == 'ListAcMgr') {
            $this->load->model('ListAcMgr_model');
            $data = $this->ListAcMgr_model->get(array('ID' => $id));
        } elseif ($table == 'ListDocLoc') {
            $this->load->model('ListDocLoc_model');
            $data = $this->ListDocLoc_model->get(array('ID' => $id));
        } elseif ($table == 'ListSentOutVia') {
            $this->load->model('ListSentOutVia_model');
            $data = $this->ListSentOutVia_model->get(array('ID' => $id));
        }
        if (!$data) {
            $this->redirect_msg('修改的數據不存在');
        }
        $this->assign('data', $data);
        $this->assign('ThisTable', $table);
        $this->display();
    }

    public function createstaff() {
        $this->assign('ThisTable', 'liststafflist');
        $this->display();
    }

    public function create($table) {
        $this->assign('ThisTable', $table);
        $this->display();
    }
    
    public function createacmgr() {
        $this->assign('ThisTable', 'ListAcMgr');
        $this->display();
    }
    
    public function createdocloc() {
        $this->assign('ThisTable', 'ListDocLoc');
        $this->display();
    }

    public function createsentoutvia() {
        $this->assign('ThisTable', 'ListSentOutVia');
        $this->display();
    }

    public function save($table) {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $result = false;
            $action = "!!";
            $postdata = $this->input->post(null, true);
            if ($table == 'ListStaffList') {
                $this->load->model('ListStaffList_model');
                if (isset($postdata['ID']) && $postdata['ID']) {
                    $action = " update:";
                    $info = $this->ListStaffList_model->get_data(array('ID' => $postdata['ID']));
                    if ($info['StaffName'] != $postdata['StaffName']) {
                        $isStaffNameExists = $this->ListStaffList_model->get_data(array('StaffName' => $postdata['StaffName']));
                        if ($isStaffNameExists) {
                            $this->redirect_msg('Name已经存在', 'TableAdm/' . $table);
                        }
                    }
                    if ($info['StaffCode'] != $postdata['StaffCode']) {
                        $isStaffCodeExists = $this->ListStaffList_model->get_data(array('StaffCode' => $postdata['StaffCode']));
                        if ($isStaffCodeExists) {
                            $this->redirect_msg('Code已经存在', 'TableAdm/' . $table);
                        }
                    }                    
                    $result = $this->ListStaffList_model->update_data(array('ID' => $postdata['ID']), array('StaffName' => $postdata['StaffName'], 'StaffCode' => $postdata['StaffCode']));
                } else {
                    $isStaffCodeExists = $this->ListStaffList_model->get_data(array('StaffCode' => $postdata['StaffCode']));
                    $isStaffNameExists = $this->ListStaffList_model->get_data(array('StaffName' => $postdata['StaffName']));
                    if ($isStaffCodeExists || $isStaffNameExists) {
                        $this->redirect_msg('Code和Name已经存在', 'TableAdm/' . $table);
                    }
                    $action = " insert:";
                    $result = $this->ListStaffList_model->insert(array('StaffCode' => $postdata['StaffCode'], 'StaffName' => $postdata['StaffName']));
                }
            } elseif ($table == 'ListAcMgr') {
                $this->load->model('ListAcMgr_model');
                if (isset($postdata['ID']) && $postdata['ID']) {
                    $action = " update:";
                    $info = $this->ListAcMgr_model->get_data(array('ID' => $postdata['ID']));
                    if ($info['AcMgr'] != $postdata['AcMgr']) {
                        $isAcMgrExists = $this->ListAcMgr_model->get_data(array('AcMgr' => $postdata['AcMgr']));
                        if ($isAcMgrExists) {
                            $this->redirect_msg('AcMgr已经存在', 'TableAdm/' . $table);
                        }
                    }
                    $result = $this->ListAcMgr_model->update_data(array('ID' => $postdata['ID']), array('AcMgr' => $postdata['AcMgr']));
                } else {
                    $action = " insert:";
                    $isAcMgrExists = $this->ListAcMgr_model->get_data(array('AcMgr' => $postdata['AcMgr']));
                    if ($isAcMgrExists) {
                        $this->redirect_msg('AcMgr已经存在', 'TableAdm/' . $table);
                    }
                    $result = $this->ListAcMgr_model->insert(array('AcMgr' => $postdata['AcMgr']));
                }
            } elseif ($table == 'ListDocLoc') {
                $this->load->model('ListDocLoc_model');
                if (isset($postdata['ID']) && $postdata['ID']) {
                    $action = " update:";
                    $info = $this->ListDocLoc_model->get_data(array('ID' => $postdata['ID']));
                    if ($info['DocLoc'] != $postdata['DocLoc']) {
                        $isDocLocExists = $this->ListDocLoc_model->get_data(array('DocLoc' => $postdata['DocLoc']));
                        if ($isDocLocExists) {
                            $this->redirect_msg('DocLoc已经存在', 'TableAdm/' . $table);
                        }
                    }                    
                    $result = $this->ListDocLoc_model->update_data(array('ID' => $postdata['ID']), array('DocLoc' => $postdata['DocLoc']));
                } else {
                    $action = " insert:";
                    $isDocLocExists = $this->ListDocLoc_model->get_data(array('DocLoc' => $postdata['DocLoc']));
                    if ($isDocLocExists) {
                        $this->redirect_msg('DocLoc已经存在', 'TableAdm/' . $table);
                    }
                    $result = $this->ListDocLoc_model->insert(array('DocLoc' => $postdata['DocLoc']));
                }
            } elseif ($table == 'ListSentOutVia') {
                $this->load->model('ListSentOutVia_model');
                if (isset($postdata['ID']) && $postdata['ID']) {
                    $action = " update:";
                    $info = $this->ListSentOutVia_model->get_data(array('ID' => $postdata['ID']));
                    if ($info['SentOutMeans'] != $postdata['SentOutMeans']) {
                        $isDocLocExists = $this->ListSentOutVia_model->get_data(array('SentOutMeans' => $postdata['SentOutMeans']));
                        if ($isDocLocExists) {
                            $this->redirect_msg('SentOutMeans已经存在', 'TableAdm/' . $table);
                        }
                    }
                    $result = $this->ListSentOutVia_model->update_data(array('ID' => $postdata['ID']), array('SentOutMeans' => $postdata['SentOutMeans']));
                } else {
                    $action = " insert:";
                    $isSentOutViaExists = $this->ListSentOutVia_model->get_data(array('SentOutMeans' => $postdata['SentOutMeans']));
                    if ($isSentOutViaExists) {
                        $this->redirect_msg('SentOutVia已经存在', 'TableAdm/' . $table);
                    }
                    $result = $this->ListSentOutVia_model->insert(array('SentOutMeans' => $postdata['SentOutMeans']));
                }

            }
            if ($result) {
                $this->redirect_msg('保存成功', 'TableAdm/' . $table);
            } else {
                $this->redirect_msg('保存失敗' . $action . $postdata['StaffCode']);
            }
        }
    }

}
