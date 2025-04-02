<h2>Ajouter un Livre</h2>
<form action="../controllers/book.php" method="POST">
    <input type="text" name="title" placeholder="Titre" required><br>
    <input type="text" name="author" placeholder="Auteur" required><br>
    <input type="number" name="year" placeholder="Année" required><br>
    <input type="text" name="category" placeholder="Catégorie" required><br>
    <button type="submit">Ajouter</button>
</form>
<link rel="stylesheet" href="../assets/css/form.css">
