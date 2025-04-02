<?php
require_once '../models/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new User();

    $user->setUser([
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'password' => $_POST['password'],
    ]);

    // Connexion directe après inscription
    $user->login($_POST['name'], $_POST['password']);
    header('Location: ../index.php');
    exit;
}
?>