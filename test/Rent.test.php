<?php
require_once '../models/Rent.php';

echo "==== TEST RENT ====\n";

$rent = new Rent();

// Ajouter une location
$rent->setBook([
    'title' => 'Dune',
    'renter' => 'Alice'
]);
echo "Location ajoutée ✅\n";

// Filtrer les locations
$filteredRents = $rent->getBooks(['renter' => 'Alice']);
echo "Locations filtrées :\n";
print_r($filteredRents);
