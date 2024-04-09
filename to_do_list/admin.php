<?php
    //Connexion à la BDD
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "to_do_list";
    // Établir la connexion
    $connexion = mysqli_connect($serveur, $utilisateur,
    $mot_de_passe, $base_de_donnees);
    // Vérifier la connexion
    if (!$connexion) {
        die("Échec de la connexion : " . mysqli_connect_error());
    } else {
		echo "Connexion réussie à la base de données.";
    }
    $sql = "SELECT * FROM taches";
	$resultat = mysqli_query($connexion, $sql);
	// Exemple de récupération des résultats
	if ($resultat) {
		print_r($resultat);
	foreach($resultat as $taches) {
		print_r($resultat);
	}
	} else {
	echo "Erreur : " . mysqli_error($connexion);
	}
	// Fermer la connexion
	mysqli_close($connexion);
?>