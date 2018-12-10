<?php

class Request_Model extends Common_Model {

    public function __construct() {
        $this->db = new Mysql_Driver();
    }
    
    public function CreateNewMaintaince($data){
        $query = "INSERT INTO activity_mobile_scan "
                . "(scanned_date, inventory_asset_no, user_location_code, staff_id, org_id) "
                . "VALUES "
                . "("
                . "'".$this->db->escape($data['scanned_date'])."', "
                . "'".$this->db->escape($data['inventory_asset_no'])."', "
                . "'".$this->db->escape($data['user_location_code'])."', "
                . "'".$this->db->escape($data['staff_id'])."', "
                . "'".$this->db->escape($data['org_id'])."'"
                . ")";
        return $this->db->executeQuery($query);
    }
    
    public function CreateNewMaintenanceService($data){
        $query = "INSERT INTO maintenance_service (json_data) VALUES ('$data') ";
        return $this->db->executeQuery($query);
    }
    
}
