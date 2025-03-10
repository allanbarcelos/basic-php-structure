<?php
require_once __DIR__ . '/../core/Controller.php';

class UserController extends Controller {
    public function index() {
        $this->view('user/index');
    }
}