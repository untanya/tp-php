<?php
require_once '../models/User.php';

$user = new User();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($user->login($_POST['name'], $_POST['password'])) {
        header('Location: ../index.php');
        exit;
    } else {
        echo "Identifiants incorrects";
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    $user->logout();
    header('Location: ../index.php');
    exit;
}
