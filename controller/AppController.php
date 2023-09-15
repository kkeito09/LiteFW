<?php
class AppController {
    protected function returnView($viewFile,$data) {
        require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . $viewFile . '.php';
    }

    protected function returnJson($data,$responseCode = 200){
        header("Access-Control-Allow-Origin: *");
        http_response_code($responseCode);
        echo json_encode($data);
    }
}