<?php

include_once APPPATH.'libraries/MY_Basemodel.php';

class SysParam_model extends MY_Basemodel {
    
    public $table = 'SysParam';
    public $primary_key = 'ID';

    // public $soft_deletes = true;

    public function get_param($param) {
    	$query = $this->where(array('ParamType' => $param))->get();

    	if ($query) {
    		return $query['ParamValue'];
    	} else {
    		return '';
    	};
    }

}
