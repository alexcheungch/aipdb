<?php

include_once APPPATH.'libraries/MY_Basemodel.php';

class Job_model extends MY_Basemodel {
    
    public $table = 'Job';
    public $primary_key = 'ID';
    
    public function getfullJob($jobcode) {
        return $this->join('ClientMtn', 'Job.ClientCode1 = ClientMtn.ClientCode1', 'left')->where('JobCode', $jobcode)->get();
    }
}
