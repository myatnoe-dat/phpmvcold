<?php

require_once './core/controller.php';
require_once './core/view.php';

//use core\View as view;

class generalSettingController extends Controller{

    private $controller;

    public static function index()
    {
        
        return new View('generalsettings');
    }
}

?>