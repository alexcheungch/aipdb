<?php

include_once APPPATH.'libraries/MY_Basemodel.php';

class ListStaffList_model extends MY_Basemodel {
    
    public $table = 'ListStaffList';
    public $primary_key = 'StaffCode';

    // public $soft_deletes = true;
}
