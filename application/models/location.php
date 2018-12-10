<?php

class Location_Model extends Common_Model {

    public function __construct() {
        $this->db = new Mysql_Driver();
    }
    
    public function ReadDepartment(){
        $query = "SELECT *,count(id) AS total_location "
                . "FROM organization_location GROUP BY user_department_code";
        return $this->db->executeQuery($query);
    }
    
    public function ReadDepartmentLocation($department_id){
        $query = "SELECT *, count(id) as total_asset "
                . "FROM organization_location "
                . "WHERE user_department_code = '". $this->db->escape($department_id)."' "
                . "GROUP BY user_location_code";
        return $this->db->executeQuery($query);
    }
    
}
