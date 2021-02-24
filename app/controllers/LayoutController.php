<?php

require_once './core/controller.php';
require_once './core/view.php';

//use core\View as view;

class LayoutController extends Controller{

    private $controller;

    public static function header()
    {
        
        return new View('header-layout');
    }
}

?>