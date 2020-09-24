<?php

class MY_Basemodel extends MY_Model {
    
    public $delete_cache_on_save = TRUE;
    
#    public $plmds_connect;

    public function __construct() {
        $this->return_as = 'array';
        $this->timestamps = $this->soft_deletes;
        parent::__construct();
#        $this->plmds_connect = $this->load->database('plmds', true);
    }
    
    public function is_data_exists($primary_id = 0) {
        $where = array($this->primary_key => $primary_id);
        if (is_array($primary_id) && count($primary_id)) {
            $where = $primary_id;
        }
        $is_exists = $this->where($where)->count_rows();
        if (!$is_exists) {
            return false;
        } else {
            return true;
        }
    }
    
    public function get_data($condition, $fields = null, $order_by = array()) {
        if (!$order_by) {
            $order_by[0] = $this->primary_key;
            $order_by[1] = 'desc';
        }
        return $this->fields($fields)->order_by($order_by[0], $order_by[1])->get($condition);
    }
    
    public function get_cache_data($condition, $fields = '*', $order_by = array()) {
        if (is_array($condition)) {
            $cache_name = md5(json_encode($condition));
            if (!$order_by) {
                $order_by[0] = $this->primary_key;
                $order_by[1] = 'desc';
            }
            $result = $this->fields($fields)->order_by($order_by[0], $order_by[1])->set_cache($cache_name)->get_all($condition);
        } else {
            $cache_name = $this->primary_key.'_'.$condition;
            $result = $this->fields($fields)->set_cache($cache_name)->get($condition);
        }
        return $result;
    }
    
    public function get_all_data($condition = array(), $fields = '*', $order_by = array()) {
        if (!$order_by) {
            $order_by[0] = $this->primary_key;
            $order_by[1] = 'desc';
        }
        $all_data = $this->fields($fields)->order_by($order_by[0], $order_by[1])->get_all($condition);
        return ($all_data) ? $all_data : array();
    }
    
    public function update_data($conditioin = null, $new_data = array(), $is_escape = true) {
        if (!$new_data) {
            return false;
        }
        return $this->update($new_data, $conditioin, $is_escape);
    }
    
    public function truncate_data() {
        $this->db->truncate($this->table);
    }
    
    //plmds method
//    public function get_plmds_data($table) {
//        $sql = 'select * from '.$table;
//        return $this->plmds_connect->query($sql)->result_array();
//    }
}
