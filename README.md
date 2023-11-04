# Videodrome

lien webdev: https://e2395236.webdev.cmaisonneuve.qc.ca/videodrome-2/  
(le lien webdev ne fonctionne pas !)
lien GiHub:
DB: e2395236

sinon, installe le ton localhost avec la DB SQL inclus dans le fichier.

Bienvenue sur le projet Videodrome, une application web dynamique conçue pour gérer une collection de films. Avec Videodrome, les utilisateurs peuvent ajouter des informations sur les films, les réalisateurs et les genres, ainsi que créer des playlists personnalisées pour organiser leurs films préférés.

## Fonctionnalités

- **Ajouter des films :** Les utilisateurs peuvent ajouter de nouveaux films à la base de données en fournissant des détails comme le titre, l'année, le réalisateur et le genre.
- **Liste des réalisateurs :** Permet de consulter une liste des réalisateurs, ainsi que d'ajouter de nouveaux réalisateurs et de voir les films associés à chacun.
- **Genres :** Les utilisateurs peuvent consulter et ajouter de nouveaux genres cinématographiques.
- **Créer des playlists :** Les utilisateurs peuvent créer des playlists de films pour organiser leurs visionnages selon des thèmes, des réalisateurs ou tout autre critère de leur choix.

## Technologies Utilisées

- **PHP :** Le langage de script côté serveur pour la logique métier.
- **MySQL :** Pour la base de données où sont stockées toutes les informations sur les films, réalisateurs et genres.
- **Twig :** Moteur de template pour PHP utilisé pour rendre les vues.
- **Bootstrap :** Framework CSS pour un design réactif et moderne.

## Installation

Pour installer et exécuter le projet Videodrome sur votre serveur local, suivez les étapes suivantes :

1. Clonez le dépôt sur votre machine locale.
2. Configurez votre serveur web pour pointer vers le dossier cloné.
3. Importez le fichier `videodrome.sql` dans votre système de gestion de base de données pour créer la structure nécessaire.
4. Modifiez les fichiers de configuration pour vous connecter à votre base de données.



A la racine de votre projet changer le fichier .htaccess pour


  RewriteEngine On

  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f

  RewriteRule ^(.*)$ index.php?url=$1 [L]



Sur le fichier index.php . changer la ligne:

$url = isset($_SERVER['PATH_INFO']) ? explode ('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';


pour:

$url = isset($_GET["url"]) ? explode ('/', ltrim($_GET["url"], '/')) : '/';


---

Bonne création de playlists et gestion de votre collection de films avec Videodrome!
