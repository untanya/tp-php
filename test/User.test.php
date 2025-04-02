<?php
require_once '../models/User.php';

echo "==== TEST USER ====\n";

$user = new User();

// Ajouter un utilisateur
$user->setUser([
    'name' => 'Alice',
    'age' => 30,
    'password' => 'secret123'
]);
echo "Utilisateur ajouté ✅\n";

// Connexion
if ($user->login('Alice', 'secret123')) {
    echo "Connexion réussie ✅\n";
    print_r($user->getLoggedUser());
} else {
    echo "Échec de la connexion ❌\n";
}

// Déconnexion
$user->logout();
echo "Déconnexion réussie ✅\n";
