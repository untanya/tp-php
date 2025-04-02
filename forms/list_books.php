<?php
require_once '../models/Book.php';
$book = new Book();
$books = $book->getBooks();
?>

<h2>Tous les livres</h2>
<link rel="stylesheet" href="../assets/css/form.css">

<ul>
<?php foreach ($books as $b): ?>
    <li>
        <strong><?php echo htmlspecialchars($b['title']); ?></strong>
        par <?php echo htmlspecialchars($b['author']); ?> (<?php echo $b['year']; ?>)
        - Catégorie : <?php echo htmlspecialchars($b['category']); ?>
    </li>
<?php endforeach; ?>
</ul>