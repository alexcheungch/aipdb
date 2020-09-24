<?php

include_once APPPATH.'libraries/MY_Basemodel.php';

class ListSentOutVia_model extends MY_Basemodel {
    
    public $table = 'ListSentOutVia';
    public $primary_key = 'SentOutMeans';

    // public $soft_deletes = true;
}
