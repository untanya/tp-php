<?php
session_start();
$user = null;
if (file_exists('./data/session.json')) {
    $sessionData = json_decode(file_get_contents('./data/session.json'), true);
    if (!empty($sessionData['name'])) {
        $user = $sessionData['name'];
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bibliothèque</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="index.php">📚 MaBibliothèque</a>
            </div>
            <ul class="nav-links">
                <li class="dropdown">
                    <a href="#" class="dropbtn">Livres</a>
                    <div class="dropdown-content">
                        <a href="./forms/book.php">➕ Ajouter un livre</a>
                        <a href="./forms/search_books.php">🔍 Rechercher un livre</a>
                        <a href="./forms/list_books.php">📖 Tous les livres</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Location</a>
                    <div class="dropdown-content">
                        <a href="./forms/rent.php">➕ Nouvelle location</a>
                        <a href="./forms/search_rents.php">🔍 Rechercher une location</a>
                        <a href="./forms/list_rents.php">📋 Toutes les locations</a>
                    </div>
                </li>
                <?php if ($user): ?>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">👤 <?php echo htmlspecialchars($user); ?></a>
                        <div class="dropdown-content">
                            <a href="./controllers/connection.php?action=logout">Déconnexion</a>
                        </div>
                    </li>
                <?php else: ?>
                    <li><a href="./forms/connection.php">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Bienvenue dans la Bibliothèque</h1>
            <p>Gérez vos livres et vos locations facilement.</p>
        </section>
    </main>

    <script src="./assets/js/main.js"></script>
</body>
</html>