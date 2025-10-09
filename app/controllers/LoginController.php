<?php
require_once __DIR__ . '/../models/User.php';
session_start();

class LoginController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $userModel = new User();
            $user = $userModel->login($email, $senha);

            if ($user) {
                $_SESSION['usuario_id'] = $user['id'];
                header('Location: ../public/tela-inicio.php');
                exit;
            } else {
                echo "<script>alert('E-mail ou senha inválidos!'); history.back();</script>";
            }
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $userModel = new User();
            if ($userModel->register($email, $senha)) {
                echo "<script>alert('Usuário registrado com sucesso!'); window.location.href='../public/login.php';</script>";
            } else {
                echo "<script>alert('Erro ao registrar usuário.'); history.back();</script>";
            }
        }
    }
}
?>