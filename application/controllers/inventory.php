<?php

class Inventory_Controller extends Common_Controller {

    public $par = URL_ARRAY;
    private $inventory;
    private $url_query;

    public function __construct() {
        $this->activeMenu = 'sb_inventory';
        $this->inventory = new Inventory_Model();
        $this->title = 'Inventory';
        $this->breadcrumbs = array(
            array(
                'title' => 'Home',
                'href' => SITE_ROOT
            ),
            array(
                'title' => 'Inventory',
                'href' => ''
            )
        );
    }

    public function __destruct() {
        $this->footer();
    }

    public function main(array $getVars, array $params = null) {
        $view = new View_Model('inventory/' . $this->UrlPath()[0]);
        $content_result = $this->content_page($params);
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
            $result = $this->InventoryPage();
        endif;
        return $result;
    }

    private function InventoryPage() {
        
    }
    
    protected function InventorySitePage(){
        $this->breadcrumbs[] = array('title'=>'Tengku Jaafar', 'href'=> '#');
        $params = $this->url_query;
        $result = array();
        $location = new Location_Model();
        $result['departments'] = $location->ReadDepartment();
        return $result;
    }
    
    protected function InventorySiteDepartmentPage(){
        $params = $this->url_query;
        $this->breadcrumbs[] = array('title'=>'Tengku Jaafar', 'href'=> '#');
        $this->breadcrumbs[] = array('title'=>'Department '. $params['dept_id'],'href'=>'');
        $location = new Location_Model();
        $result['head_title'] = $params['dept_id'];
        $result['departments'] = $location->ReadDepartmentLocation($params['dept_id']);
        return $result;
    }

    protected function InventoryLocationPage() {
        $params = $this->url_query;
        $this->breadcrumbs[] = array('title'=>'Tengku Jaafar', 'href'=> '#');
        $this->breadcrumbs[] = array('title'=>'Department '. $params['dept_id'],'href'=>'');
        $this->breadcrumbs[] = array('title'=>'Location '. $params['loc_id'],'href'=>'');
        $result = array();
        $result['head_title'] = $params['loc_id'];
        $result['inventories'] = $this->inventory->ReadInventoryByLocation($params['loc_id']);
        return $result;
    }

}
