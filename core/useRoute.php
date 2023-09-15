<?php
function CallController($className, $methodName) {
    try {
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                $requestData = $_GET;
                break;
            default:
                $requestData = $_POST;
                break;
        }
        require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . $className . '.php';
        $instance = new $className();
        $instance->$methodName($requestData);
    } catch (\Throwable $th) {
        require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'error' . DIRECTORY_SEPARATOR . '404.php';
    }
}
