<?php

class Maintenance_Controller extends Common_Controller {

    public $par = URL_ARRAY;
    private $maintenance;
    private $url_query;

    public function __construct() {
        $this->maintenance = new Maintenance_Model();
        $this->title = 'Maintenance Activity';
        $this->breadcrumbs = array(
            array(
                'title' => 'Home',
                'href' => SITE_ROOT
            ),
            array(
                'title' => 'Maintenance Activity',
                'href' => '#'
            )
        );
    }

    public function __destruct() {
        $vars = array(
            'active_menu' => 'sb-maintenance-tengku-jaafar'
        );
        $this->footer($vars);
    }

    public function main(array $getVars, array $params = null) {
        $view = new View_Model('maintenance/' . $this->UrlPath()[0]);
        $content_result = $this->content_page($params);
        $this->activeMenu = 'sb_maintenance';
        $this->header();
        $view->assign('content', $content_result);
    }

    private function content_page(array $params) {
        $result = array();
        if (count($params) > ($this->par + 1)):
            $method_name = $this->MethodNamer($params);
            $method_call = $method_name['method'] . 'Page';
            $this->url_query = $method_name['params'];
            $result = $this->$method_call();
        else:
            $result = $this->MaintenancePage();
        endif;
        return $result;
    }

    private function MaintenancePage() {
        $result = array();
        $data = $this->maintenance->ReadMaitenanceService();


        $result['maintenance_activity'] = $data;
        $result['maintenance_activity_nj'] = $this->MaintenanceData($data);
        return $result;
    }

    protected function MaintenanceActivitymobilescanPage() {
        $params = $this->url_query;
        $result = array();
        $data = $this->maintenance->ReadActivityMobileScan();
        $result['maintenance_activity'] = $data;
        
        return $result;
    }

    protected function MaintenanceServicesPage() {
        
    }

    private function MaintenanceData($data) {
        $maintenance_data = array();
        foreach ($data as $d):
            $parseJSON = json_decode($d['json_data'],true);
            $maintenance_data[] = array(
                'staff_id' => $parseJSON['staffId'],
                'location' => json_encode($parseJSON['location']),
                'json_data' => json_encode($parseJSON['activityData']),
                'timestamp' => $d['timestamp']
            );
        endforeach;
        return $maintenance_data;
    }

}
