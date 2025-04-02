<?php
require_once '../models/Book.php';

echo "==== TEST BOOK ====\n";

$book = new Book();

// Ajouter un livre
$book->setBook([
    'title' => 'Dune',
    'author' => 'Frank Herbert',
    'year' => 1965,
    'category' => 'Science-fiction'
]);
echo "Livre ajouté ✅\n";

// Filtrer les livres
$filteredBooks = $book->getBooks(['title' => 'Dune']);
echo "Livres filtrés par titre :\n";
print_r($filteredBooks);
