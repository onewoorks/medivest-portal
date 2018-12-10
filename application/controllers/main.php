<?php

class Main_Controller extends Common_Controller {

    public $par = URL_ARRAY;

    public function __construct() {
        $this->title = 'Dashboard';
        $this->activeMenu = 'sb_dashboard';
        $this->breadcrumbs = array(
            array(
                'title' => 'Home',
                'href' => SITE_ROOT
            )
        );
    }
    
    public function __destruct() {
        $this->dashboardGraph();
        $this->footer();
    }

    public function main(array $getVars, array $params = null) {
        $request = $_SERVER['QUERY_STRING'];
        $parsed = explode('&', $request);
        $view = new View_Model('common/main');
        $content_result = $this->content_page($params);
        $view->assign('content', $content_result);
        $this->header();
    }
    
    private function content_page(array $params) {
        $result = array();
        switch ($params[$this->par]):
            default:
//                $location = new Location_Model();
//                $departments = $location->ReadDepartment();
//                $result['departments'] = $departments;
                break;
        endswitch;
        return $result;
    }
    
    protected function dashboardGraph(){
        $dashboard = new View_Model('modules/graphs/dashboard');
        $dashboard->assign('charts', 'ok');
    }
    
}
