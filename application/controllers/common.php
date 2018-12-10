<?php

class Common_Controller {
    
    protected $breadcrumbs;
    protected $title;
    public $activeMenu;

    public function RenderOutput($file, $vars = null) {
        if (is_array($vars) && !empty($vars)) {
            extract($vars);
        }
        ob_start();
        include VIEW . '/' . $file . '.php';
        return ob_get_clean();
    }

    public static function MethodNamer(array $params_urls) {
        $result = array();
        $naming = '';
        foreach ($params_urls as $key => $paging):
            if ($key >= URL_ARRAY):
                $clean_name = explode('?', $paging);
                $naming .= ucfirst(strtolower($clean_name[0]));
            endif;
        endforeach;
        $params = explode('?', $paging);
        $result['method'] = $naming;
        $result['params'] = (isset($params[1])) ? self::ParamSplitter($params[1]) : false; 
        return $result;
    }

    private static function ParamSplitter($params) {
        $p = explode('&', $params);
        $result = array();
        foreach ($p as $key):
            $d = explode('=', $key);
            $result[$d[0]] = $d[1];
        endforeach;
        return $result;
    }

    public static function UrlPath() {
        $urlPath = explode('/', $_SERVER['REDIRECT_URL']);
        $result = array();
        foreach ($urlPath as $key => $path):
            if ($key >= URL_ARRAY):
                $result[] = strtolower($path);
            endif;
        endforeach;
        return array_reverse($result);
    }
    
    protected function header($vars = false){
        $header = new View_Model('common/header');
        $header->assign('title', $this->title);
        $header->assign('breadcrumbs', $this->breadcrumbs);
        $header->assign($this->activeMenu, true);
    }
    
    protected function footer(array $vars = null){
        $footer = new View_Model('common/footer');
        $footer->assign('variables', $vars);
    }

}
