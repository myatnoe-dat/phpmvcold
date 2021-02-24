<?php

require_once './core/controller.php';
require_once './core/view.php';

//use core\View as view;

class OperationController extends Controller{

    private $controller;

    public static function index()
    {
        
        return new View('operationinformationduringexecution');
    }

    public static function error()
    {
        
        return new View('operationinformationerrorjobnet');
    }

    public static function jobnet()
    {
        
        return new View('operationinformationjobnet');
    }

    public static function jobResult()
    {
        
        return new View('jobresult');
    }
}

?>