<?php

require_once './core/controller.php';
require_once './core/view.php';

//use core\View as view;

class logoutController extends Controller{

    private $controller;

    public static function index()
    {
        return new View('login');
    }

    public static function logout($request)
    {
        // Create a new cURL resource
        $ch = curl_init('http://10.1.9.242/zabbix/api_jsonrpc.php');
        $payload = json_encode(array(
            'jsonrpc'=>  '2.0',
            'method'=>  'user.logout',

            'params'=> [],

            'id'=>  1,
            'auth'=>"16a46baf181ef9602e1687f3110abf8a"
        ));

        // Attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        // Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the POST request
        $result = curl_exec($ch);
       
        // Close cURL resource
        curl_close($ch);

        $view = new view('login');
    }
}

?>