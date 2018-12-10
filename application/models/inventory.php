<?php

class Inventory_Model extends Common_Model {

    public function __construct() {
        $this->db = new Mysql_Driver();
    }
    
    public function ReadInventoryByLocation($location_id){
        $query = "SELECT * FROM inventory WHERE user_location_code = '". $this->db->escape($location_id)."' "
                . "GROUP BY user_location_code";
        return $this->db->executeQuery($query);
    }


    
}
