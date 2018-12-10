<?php

class Maintenance_Model extends Common_Model {

    public function __construct() {
        $this->db = new Mysql_Driver();
    }
    
    public function ReadActivityMobileScan(){
        $query = "SELECT ams.*, i.asset_no, i.asset_description, i.manufacturer, i.brand, i.model, ol.user_location_name "
                . "FROM activity_mobile_scan ams "
                . "LEFT JOIN inventory i ON ams.inventory_asset_no = i.asset_no "
                . "LEFT JOIN organization_location ol ON ams.user_location_code = ol.user_location_code";
        return $this->db->executeQuery($query);
    }
    
    public function ReadMaitenanceService(){
        $query = "SELECT *, json_data->>'$.staffId' as staff_id, "
                . "json_data->>'$.location' as location FROM maintenance_service";
        return $this->db->executeQuery($query);
    }
    
}
