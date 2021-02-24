<?php

require_once './core/controller.php';
require_once './core/view.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/Api/loginAPI.php';

//use core\View as view;

class loginController extends Controller{

    private $controller;

    public static function index()
    {
        $token = bin2hex(openssl_random_pseudo_bytes(16));
        setcookie("CSRFtoken", $token, time() + 60 * 60 * 24);
        
        $view = new view('login');
        $view->assign('token', $token);
    }
    
    public static function login($request)
    {
        $result = APIFunc::AuthPathAPI();

        $final = json_decode($result);

        if(isset($final->result->sessionid))
        {
            if ($request['csrf'] == $_COOKIE['CSRFtoken'])
            {
                $view = new view('Main');
            } 
        }   
        else
        {
            echo '<script>alert("A username or password is inaccurate.")</script>'; 
            self::index(); 
        }
    }
}

?>