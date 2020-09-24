<?php

include_once APPPATH.'libraries/MY_Basemodel.php';

class ClientMtn_model extends MY_Basemodel {
    
    public $table = 'ClientMtn';
    public $primary_key = 'ClientCode1';

    // public $soft_deletes = true;

    public function getClientByCode($ClientCode1)
    {
        return $this->where(array('ClientCode1' => $ClientCode1))->get();
    }

    public function get_clients()
    {
    // $this->like('ClientCode1', $code, 'after'); 
    $query = $this->get_all();

    $clients = array();
    $i = 0;
    foreach ($query as $row) {
            $clients[$i]['ClientCode1'] = $row['ClientCode1'];
            $clients[$i]['ClientCode2'] = $row['ClientCode2'];
            $clients[$i]['ClientCode3'] = $row['ClientCode3'];
            $clients[$i]['ClientName'] = $row['ClientName'];
            $clients[$i]['NormalYearEndDate'] = $row['NormalYearEndDate'];
            $clients[$i]['NonTaxDeadlineDate'] = $row['NonTaxDeadlineDate'];
            $i++;
    }

    return $clients;


}
}
