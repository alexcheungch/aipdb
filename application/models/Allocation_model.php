<?php

include_once APPPATH.'libraries/MY_Basemodel.php';

class Allocation_model extends MY_Basemodel {
    
    public $table = 'Allocation';
    public $primary_key = 'JobCode';

    // public $soft_deletes = true;
}
