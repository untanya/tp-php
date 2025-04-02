<h2>Rechercher une location</h2>
<form action="" method="GET">
    <input type="text" name="title" placeholder="Titre du livre">
    <input type="text" name="renter" placeholder="Nom du locataire">
    <button type="submit">Rechercher</button>
</form>
<link rel="stylesheet" href="../assets/css/form.css">


<?php
if ($_GET) {
    require_once '../models/Rent.php';
    $rent = new Rent();
    $filtered = $rent->getBooks($_GET);

    echo '<h3>Résultats :</h3><ul>';
    foreach ($filtered as $r) {
        echo "<li><strong>{$r['title']}</strong> — loué par {$r['renter']}</li>";
    }
    echo '</ul>';
}
?>
