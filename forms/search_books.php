<h2>Rechercher un livre</h2>
<form action="" method="GET">
    <input type="text" name="title" placeholder="Titre">
    <input type="text" name="author" placeholder="Auteur">
    <button type="submit">Rechercher</button>
</form>
<link rel="stylesheet" href="../assets/css/form.css">


<?php
if ($_GET) {
    require_once '../models/Book.php';
    $book = new Book();
    $filtered = $book->getBooks($_GET);

    echo '<h3>Résultats :</h3><ul>';
    foreach ($filtered as $b) {
        echo "<li><strong>{$b['title']}</strong> par {$b['author']}</li>";
    }
    echo '</ul>';
}
?>
