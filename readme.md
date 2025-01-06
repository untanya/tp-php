# Gestion d'une Bibliothèque pour l'École du CESI

## Contexte
Vous allez créer une application PHP minimaliste pour gérer une bibliothèque dédiée aux étudiants et professeurs de l'école du CESI. Cette bibliothèque contiendra des ouvrages techniques et scolaires spécialisés en informatique et développement. L'objectif est de proposer une application simple avec des formulaires HTML pour gérer les livres et les emprunts.

---

## Objectifs de l'atelier
1. Apprendre à manipuler les bases de l'algorithmique avec PHP : tableaux, boucles, conditions, fonctions.
2. Lire et écrire des fichiers JSON ou CSV pour stocker des données.
3. Créer une interface utilisateur simple avec PHP et HTML.
4. Utiliser Git et GitHub pour versionner le projet.

---

## Fonctionnalités

1. **Gestion des livres**
    - Ajouter un livre via un formulaire HTML (titre, auteur, année, domaine).
    - Afficher tous les livres disponibles.
    - Rechercher des livres par titre ou auteur.

2. **Gestion des emprunts**
    - Emprunter un livre via un formulaire HTML.
    - Retourner un livre emprunté.
    - Lister les livres actuellement empruntés.

---

## Structure du projet

Voici l'arborescence initiale que vous devez utiliser :

```
cesi-bibliotheque/
├── index.php       // Page principale pour le menu
├── livres.php      // Gestion des livres
├── emprunts.php    // Gestion des emprunts
├── livres.txt      // Stockage des livres (JSON ou CSV)
├── emprunts.txt    // Stockage des emprunts (JSON ou CSV)
├── style.css       // Design minimaliste
├── README.md       // Documentation du projet
```

---

## Instructions de développement

### 1. Préparation de l'environnement

1. Installez un serveur local comme XAMPP, WAMP ou Laragon.
2. Clonez ce dépôt Git sur votre machine locale.
3. Assurez-vous que votre serveur local peut exécuter les fichiers PHP depuis le répertoire du projet.

### 2. Implémentation des fonctionnalités

#### Gestion des livres

1. **Ajouter un livre :**
    - Créez un formulaire HTML dans `livres.php` pour saisir le titre, l'auteur, l'année et le domaine d'un livre.
    - Enregistrez les informations saisies dans `livres.txt` au format JSON ou CSV.

2. **Lister les livres disponibles :**
    - Créez une fonction dans `livres.php` qui lit le fichier `livres.txt` et affiche les livres sous forme de tableau HTML.

3. **Rechercher un livre :**
    - Ajoutez un champ de recherche dans `livres.php` permettant de filtrer les livres par titre ou auteur.

#### Gestion des emprunts

1. **Emprunter un livre :**
    - Créez un formulaire HTML dans `emprunts.php` permettant de saisir le titre du livre à emprunter et le nom de l'emprunteur.
    - Ajoutez une entrée dans `emprunts.txt` et retirez le livre correspondant de `livres.txt`.

2. **Retourner un livre :**
    - Créez une page dans `emprunts.php` permettant de marquer un livre comme retourné. Cela réajoute le livre dans `livres.txt` et le supprime de `emprunts.txt`.

3. **Lister les emprunts :**
    - Ajoutez une section dans `emprunts.php` pour afficher tous les livres actuellement empruntés.

#### Interface utilisateur

1. **Page principale (`index.php`)**
    - Créez un menu simple en HTML avec des liens vers :
        - Gestion des livres (ajout, affichage, recherche).
        - Gestion des emprunts (emprunter, retourner, lister).

2. **Design minimaliste**
    - Ajoutez un fichier CSS (`style.css`) pour rendre l'interface plus attrayante.

---

## Documentation du projet

1. **README.md**
    - Détaillez le contexte et les objectifs du projet.
    - Expliquez comment installer et exécuter le projet.
    - Listez les fonctionnalités implémentées.

2. **Versionnement avec Git :**
    - Faites des commits fréquents pour chaque fonctionnalité.
    - Utilisez des messages de commit clairs (ex. : "Ajout du formulaire d'ajout de livres").

---

## Suggestions d'amélioration (bonus)

1. Ajouter une validation des données (par exemple, empêcher les champs vides).
2. Implémenter une gestion des erreurs pour les fichiers manquants ou corrompus.
3. Ajouter un compteur indiquant combien de livres sont actuellement disponibles.

---

Bonne chance pour cet atelier, et n'oubliez pas d'utiliser GitHub pour partager votre avancement !
