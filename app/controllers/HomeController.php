<?php
require_once __DIR__ . '/../core/Controller.php';

class HomeController extends Controller {
    public function index() {
        session_start();
        $this->view('home');
    }
}