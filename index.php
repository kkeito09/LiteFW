<?php
require_once 'config/config.php';
require_once 'core/useRoute.php';

$request_uri = $_SERVER['REDIRECT_URL'];
$request_method = $_SERVER['REQUEST_METHOD'];

switch ($request_uri) {
    case '/' :
    case '/index' :
        if ($request_method == 'GET') {
            CallController('HomeController', 'index');
        }
        break;
    case '/ip-json':
        if ($request_method == 'GET') {
            CallController('IPController', 'ipJson');
        }
        break;
    default:
        http_response_code(404);
        require __DIR__ . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'error' . DIRECTORY_SEPARATOR . '404.php';
        break;
}
