<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projet manga</title>
</head>
<body>
    <h1>Mon site de manga</h1>
    <?php
    // Connexion à la BDD
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "mon_projet_manga";
    // Établir la connexion
    $connexion = mysqli_connect($serveur, $utilisateur,
    $mot_de_passe, $base_de_donnees);
    // Vérifier la connexion
    if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
    } else {
    echo "Connexion réussie à la base de données.";
    }
    // Requête SELECT

    // Boucle foreach pour afficher toutes les création


    ?>
</body>
</html>