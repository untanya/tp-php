<?php
require_once '../models/Rent.php';
$rent = new Rent();
$rents = $rent->getBooks();
?>

<h2>Toutes les locations</h2>
<link rel="stylesheet" href="../assets/css/form.css">

<ul>
<?php foreach ($rents as $r): ?>
    <li>
        Livre : <strong><?php echo htmlspecialchars($r['title']); ?></strong> — Loué par <?php echo htmlspecialchars($r['renter']); ?>
    </li>
<?php endforeach; ?>
</ul>
