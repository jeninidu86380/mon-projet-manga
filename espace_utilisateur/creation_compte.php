<?php
    //Inclusion des fichiers de données et de fonctions
    include('accueil_compte.php');     
    include('connexion_compte.php');
    include('deconnexion_compte.php');

    // Connexion à la base de données
    $serveur = "localhost"; // Adresse du serveur MySQL
    $utilisateur = "root"; // Nom d'utilisateur MySQL
    $mot_de_passe = ""; // Mot de passe MySQL
    $base_de_donnees = "compte_utlilisateur"; // Nom de la base de données MySQL

    // Établir la connexion
    $connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    /* Vérifier la connexion
    if (!$connexion) {
        die("La connexion à la base de données a échoué: " . mysqli_connect_error());
    }*/

    // Vérifier si le formulaire a été soumis
    if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mot_de_passe'])) 
    {
        // Récupérer les données du formulaire
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $mot_de_passe = md5($_POST['mot_de_passe']); // Hashage du mot de passe avec MD5
        
        // Préparer la requête SELECT pour vérifier si l'utilisateur existe
        $verification ="SELECT * FROM compte WHERE email='$email'";
        $resultat_verification= mysqli_query($connexion, $verification);//l'utilisateur n'existe pas, l'insère dans la BDD 

        // Vérifier si l'utilisateur existe
        if(mysqli_num_rows($resultat_verification) > 0) {

        // Préparer la requête d'insertion
        $insertion = "INSERT INTO compte (nom, email, mot_de_passe) VALUES ('" . $_POST ['nom'] . "', '" . $_POST ['email'] . "', '" . $_POST ['mot_de_passe'] . "')";
        
        // Exécuter la requête d'insertion
        if (mysqli_query($connexion, $insertion)) {
            echo "Enregistrement réussi !";
        } else {
            echo "Erreur d'enregistrement: " . mysqli_error($connexion);
        }
        // Démarrer la session
        session_start();

        // Stocker l'email de l'utilisateur dans une variable de session
        $_SESSION['email'] = $email;

        // Rediriger l'utilisateur vers une page de votre choix
        header("Location: accueil_compte.php");

        exit();     // terminer l'exécution du script après la redirection
        } else {
        echo "email utilisé, entrer un autre email.";
        }

        //fermer le résultat de la requête de vérification
        mysqli_free_result($resultat_verification);
        } else {
        echo "Tous les champs du formulaire doivent être remplis.";
        }
        
        // Fermer la connexion à la base de données
        mysqli_close($connexion); 

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création compte utilisateur</title>
    <link href="accueil_compte.php" rel="stylesheet">
    <link href="connexion_compte.php" rel="stylesheet">
    <link href="deconnexion_compte.php" rel="stylesheet">
</head>
<body>
<main class="container-fluid">
    <h1> Formulaire de création utilisateur : </h1>

    <form action="" method="post">

        <label for="nom"> Nom / Prénom </label>
        <input type="text" name="nom" id="nom" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="mot_de_passe"> Mot de passe </label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" required>

        <input type="submit" value="Valider">

    </form>
</main>
</body>
</html>
