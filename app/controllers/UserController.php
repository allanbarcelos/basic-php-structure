<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/User.php';

class UserController extends Controller {
    public function index() {
        $userModel = new User();
        $users = $userModel->findAll();
        $this->view('user/index', ['users' => $users]);
    }
}