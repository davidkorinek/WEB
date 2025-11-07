<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/User.php';

class AuthController extends Controller
{
    public function register(): void
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ok = User::create($_POST['name'], $_POST['email'], $_POST['password']);
            if($ok) {
                header('Location: index.php?page=login');
                exit;
            }
        }
        $this->render('register');
    }

    public function login(): void
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = User::findByEmail($_POST['email']);
            if($user && password_verify($_POST['password'], $user['password'])) {
                session_start();
                $_SESSION['user'] = $user;
                header('Location: index.php?page=home');
                exit;
            }
        }
        $this->render('login');
    }

    public function logout(): void
    {
        session_start();
        session_destroy();
        header('Location: index.php?page=home');
        exit;
    }
}