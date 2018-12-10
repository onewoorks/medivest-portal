<?php

class Request_Controller extends Common_Controller {

    public $par = URL_ARRAY;
    private $request;

    public function __construct() {
        $this->request = new Request_Model();
    }
    
    public function main(array $getVars, array $params = null) {
        $method = ucFirst(strtolower($this->UrlPath()[0]));
        $this->$method();
    }
    
    protected function Maintenance(){
        $input_data = array(
            'scanned_date' => '2018-11-30 19:22:22',
            'inventory_asset_no' => 'NSN001/000028',
            'user_location_code' => '01-G-349',
            'staff_id' => '1',
            'org_id' => '1'
        );
        $this->request->CreateNewMaintaince($input_data);
    }
    
    protected function MaintenanceServices(){
        $entityBody = file_get_contents('php://input');
//        print_r($entityBody);
        $this->request->CreateNewMaintenanceService($entityBody);
    }

}
