<?php

include_once APPPATH.'libraries/MY_Basemodel.php';

class JobProg_model extends MY_Basemodel {
    
    public $table = 'JobProg';
    public $primary_key = 'ID';

    // public $soft_deletes = true;

    public function getfullJob($jobcode)
    {
    return $this->join('JobMtn', 'JobMtn.JobCode = JobProg.JobCode') 
         ->where('JobCode', $jobcode)
         ->get();
    }
}
