<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'AppController.php';
class IPController extends AppController{
    public function ipJson() {
        $data = ['ip' => $_SERVER['REMOTE_ADDR']];
        $this->returnJson($data);
    }
}