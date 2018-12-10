<?php

class Department_Controller extends Common_Controller {

    public $par = URL_ARRAY;
    private $location;
    private $url_query;

    public function __construct() {
        $this->location = new Location_Model();
    }

    public function main(array $getVars, array $params = null) {
        $view = new View_Model('department/'.$this->UrlPath()[0]);
        $content_result = $this->content_page($params);
        $header = include_once VIEW . '/common/header.php';
        $view->assign('header', $header);
        $view->assign('content', $content_result);
    }

    private function content_page(array $params) {
        $result = array();
        if (count($params) > ($this->par+1)):
            $method_name = $this->MethodNamer($params);
            $method_call = $method_name['method'].'Page';
            $this->url_query = $method_name['params'];
            $result = $this->$method_call();
        else:
            $result = $this->DepartmentPage();
        endif;
        return $result;
    }

    private function DepartmentPage() {
        $departments = $this->location->ReadDepartment();
        $result['departments'] = $departments;
        return $result;
    }

    private function DepartmentLocationPage() {
        $params = $this->url_query;
        $result = array();
        $result['locations'] = $this->location->ReadDepartmentLocation($params['dept_id']);
        return $result;
    }

}
