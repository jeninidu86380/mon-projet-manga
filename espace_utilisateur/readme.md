# Espace client
 
## Fonctionnalités
 
### Création de compte
### Connexion au compte
### Persistance de la session
### Déconnexion
 
## Pré-requis
 
### Dossier projet dans c:\wampp\...
### Création de la base, de la tables et des champs
- Base : compte-utilisateur
- Table : compte
  - id : INT AUTO INCREMENT,
  - nom : VARCHAR,
  - email : VARCHAR,
  - mot_de_passe : VARCHAR.
### Fichiers du projets
- creation-compte.php
- connexion-compte.php
- accueil-compte.php
- deconnexion-compte.php
 
## Etapes

### Créer la base, la table et les champs
### Créer les fichiers
### Mettre un commentaire en haut de chaque fichier et décrire ce qui doit être fait (étapes)

Créer un espace utilisateur exercice :

Dans cet exercice, nous allons explorer le cycle de gestion de compte utilisateur, qui englobe :

● la création du compte utilisateur,
● la connexion au compte utilisateur,
● la gestion de session utilisateur,
● la déconnexion du compte utilisateur.

Objectif

Développer un formulaire pour l'inscription des utilisateurs, puis traiter les données soumises et les insérer dans la base de données créée précédemment.

Tâches

1- Créer un formulaire avec balise HTML avec :  3- titre de la page : h1"création de compte utilisateur" et avec des champs : nom (input type text), email (input type text), mot de passe (input type text), bouton "valider" (input type submit).

Écrire un script PHP qui récupère les données du formulaire, les valider, puis les insère dans la base de données.
Assurez-vous d'utiliser une fonction de hashage (exemple :
hashage en MD5) pour le mot de passe avant de l'insérer en base.

Base de données et table utilisateur

Objectif

4 - Créer une base de données MySQL pour stocker les utilisateurs : 
5- connexion à la base.      
6- Vérification de validation du formulaire, requête d'insertion dans la base compte.
7- requête d'insertion dans la table compte.

Tâches

Créer une base de données utilisateurs contenant une table de 4 champs :
● id, 
● nom, 
● email, 
● mot_de_passe.

Sélectionner les formats et options des champs correspondants à l’usage (stocker du texte, un identifiant unique, …).

Formulaire d’inscription utilisateur

action de validation:
-détecter la validation formulaire
-récupérer les données du formulaire (nom,email...)
-enregistrement des données dans la bdd.

Formulaire de connexion utilisateur

Objectif

Implémenter un système de connexion pour les utilisateurs en utilisant PHP et MySQL.

Tâches

Créer un formulaire de connexion avec des champs email et mot de passe.
Écrire un script PHP qui vérifie l'email et le mot de passe soumis.
Si les identifiants sont corrects, démarrer une session et rediriger l'utilisateur vers une page de votre choix (à l’exception des pages connexion ou création de compte) .

Sécurisation de l'espace utilisateur

Protéger l'accès à la page de profil, permettant uniquement aux utilisateurs connectés de la voir.

Tâches

Créer une page de profil utilisateur simple.
Ajouter un script PHP au début de la page qui vérifie si un utilisateur est connecté (en vérifiant une variable de session).
Si ce n'est pas le cas, rediriger l'utilisateur vers la page de connexion.
Tester l'accès à la page sans être connecté, pour s'assurer que la redirection fonctionne correctement.

Déconnexion du compte utilisateur

Objectif

Permettre aux utilisateurs de se déconnecter de leur compte.

Tâches

Créer un bouton de déconnexion sur la page de profil html.
Faire une redirection vers la page de connexion.Écrire un script PHP qui détruit la session lorsque l'utilisateur clique sur le bouton de déconnexion.

[14:37] Emmanuel Rocher
<?php
Objectif : Permettre à l'utilisateur de se connecter à son compte
 
Contenu de la page : 

	Titre de la page : h1 "Connexion au compte utilisateur"

	Formulaire de création de compte : 

		- E-mail (email) : input type text - obligatoire

		- Mot de passe (mot_de_passe) : input type text - obligatoire

		- Bouton "Valider" (valider) : input type submit
 
Action à la validation du formulaire :

	- Détecter la validation formulaire

	- Récupérer les données du formulaire : email, mot_de_passe

	- Vérification de l'existance d'un utilisateur en base avec l'email et le mot de passe correspond
// 5) Connexion à la base
 
// 6) Texter la validation formulaire
 
// 7) Vérifier l'existance de cette utilisateur en base (email, mot de passe)

// $_POST['email'] - $_POST['mot_de_passe']

	$sql = 'SELECT * FROM ';
 
	// 8) Rediriger vers page accueil-compte.php
?>
<!-- // 1) Balises HTML 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> création compte utilisateur </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
</head>
<body>
<main class="container-fluid">
 // 3) Titre de la page 
<h1>Connexion compte utilisateur</h1>
 // 4) Formulaire de  connexion de compte 
<form action="" method="post">

	<label for="email">E-mail</label>

	<input type="email" name="email" id="email" required>

	<label for="mot_de_passe">Mot de passe</label>

	<input type="password" name="mot_de_passe" id="mot_de_passe" required>
 
	<input type="submit" name="connexion" value="Connexion"--
</form>
 // 2) Fin des balises HTML 
</main>
</body>
</html>-->