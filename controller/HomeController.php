<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'AppController.php';
class HomeController extends AppController{
    public function index($request) {
        $data = ['title' => 'Home Page'];
        $this->returnView('home', $data);
    }
}