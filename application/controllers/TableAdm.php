<?php

class TableAdm extends MY_Controller {

    public function index() {
        $this->load->model('ListStaffList_model');
        $this_list = $this->ListStaffList_model->get_all();
        $this->assign('ListStaffList_list', $this_list);
        $this->assign('ThisTable','ListStaffList');
        $this->display('tableadm/liststafflist_index');
    }

    public function liststafflist() {
        $this->load->model('ListStaffList_model');
        $this_list = $this->ListStaffList_model->get_all();
        $this->assign('ListStaffList_list', $this_list);
        $this->assign('ThisTable','ListStaffList');
        $this->display('tableadm/liststafflist_index');
    }
    public function delete($table, $id = 0) {
        $data = false;
        if ($table == 'ListStaffList') {
           $this->load->model('ListStaffList_model');
           $data = $this->ListStaffList_model->get($id);
        }
        if (!$data) {
            $this->redirect_msg('刪除的數據不存在');
        }
        $result = false;
        if ($table == 'ListStaffList') {
           $result = $this->ListStaffList_model->delete($id);
        };
        if ($result) {
            $this->redirect_msg('刪除成功', 'ListStaffList');
        } else {
            $this->redirect_msg('刪除失敗');
		}
	}  
	public function edit($table,$id) {
        $data = false;
        if ($table == 'ListStaffList') {
           $this->load->model('ListStaffList_model');
           $data = $this->ListStaffList_model->get(array('StaffCode'=>$id));
        }
        if (!$data) {
            $this->redirect_msg('修改的數據不存在');
        }
        $this->assign('data', $data);
        $this->assign('ThisTable',$table);
        $this->display();
    }
    
    public function createstaff() {
        $this->assign('ThisTable','liststafflist');
        $this->display();
    }

	public function create($table) {
        $this->assign('ThisTable',$table);
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
		               $result = $this->ListStaffList_model->update_data(array('StaffCode' => $postdata['ID']), array('StaffName' => $postdata['StaffName'])); 
	            } else {
                       $action = " insert:";
                       $result = $this->ListStaffList_model->insert(array('StaffCode' => $postdata['StaffCode'],'StaffName' => $postdata['StaffName']));
	            }
            }
            if ($result) {
                $this->redirect_msg('保存成功', 'TableAdm/'.$table);
            } else {
                $this->redirect_msg('保存失敗'.$action.$postdata['StaffCode']);
            }
        }
	}
}
