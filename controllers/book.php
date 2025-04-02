<?php
require_once '../models/Book.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $book = new Book();
    $book->setBook([
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'year' => $_POST['year'],
        'category' => $_POST['category'],
    ]);
    header('Location: ../index.php');
    exit;
}
