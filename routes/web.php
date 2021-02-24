<?php

// require '/path/to/vendor/autoload.php';
require_once './vendor/autoload.php';

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/user/index', 'homeController::index');
    $r->addRoute('GET', '/user/view/{id}', 'homeController::view');
    $r->addRoute('GET', '/user/edit/{id}', 'homeController::edit');
    $r->addRoute('POST', '/user/update/{id}', 'homeController::update');
    $r->addRoute('GET', '/user/create', 'homeController::create');
    $r->addRoute('POST', '/user/store', 'homeController::store');
    $r->addRoute('GET', '/user/delete/{id}', 'homeController::delete');

    $r->addRoute('GET', '/', 'loginController::index');
    $r->addRoute('POST', '/', 'loginController::login');

    $r->addRoute('GET', '/logout', 'loginController::index');
    $r->addRoute('POST', '/logout', 'logoutController::logout');

    $r->addRoute('GET', '/csrf', 'csrfController::index');
    $r->addRoute('GET', '/object/list', 'objectController::index');
    $r->addRoute('GET', '/object-right-side', 'objectController::rightSide');
    $r->addRoute('GET', '/job/execution/management', 'jobExeManagementController::index');
    $r->addRoute('GET', '/job/execution/result', 'jobExeResultController::index');
    $r->addRoute('GET', '/general/setting', 'generalSettingController::index');
    $r->addRoute('GET', '/operation-information-during-execution', 'OperationController::index');
    $r->addRoute('GET', '/operation-information-error-jobnet', 'OperationController::error');
    $r->addRoute('GET', '/operation-information-jobnet', 'OperationController::jobnet');
    $r->addRoute('GET', '/job-result', 'OperationController::jobResult');
    $r->addRoute('GET', '/header-layout', 'LayoutController::header');

    
    $r->addRoute('GET', '/job-edit', 'jobEditController::index');
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
    print_r('404');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
    print_r('405');
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = ($httpMethod == 'POST')? $_POST : $routeInfo[2];

        $controller = explode('::',$handler)[0];

        require_once "./app/controllers/$controller.php";

        $handler($vars);
        // ... call $handler with $vars
        
        break;
}