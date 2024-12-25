<?php
require_once 'models/User.php';

class UserController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new User($pdo);
    }

    public function store($name, $email) {
        $this->userModel->create($name, $email);
        echo "Usuário cadastrado com sucesso!";
    }

    public function index() {
        $users = $this->userModel->getAll();
        echo json_encode($users);
    }
}
