<?php
require_once '../models/Rent.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rent = new Rent();
    $rent->setBook([
        'title' => $_POST['title'],
        'renter' => $_POST['renter'],
    ]);
    header('Location: ../index.php');
    exit;
}
