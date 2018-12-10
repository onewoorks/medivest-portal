<?php

class Login_Controller extends Common_Controller {

    public function __construct() {
        if ($_SERVER['REQUEST_METHOD']== "POST"):
            header("Location: http://localhost/medivest"); /* Redirect browser */
            exit();
        endif;
    }

    public function main(array $getVars) {
        $view = new View_Model('common/login');
    }

}
