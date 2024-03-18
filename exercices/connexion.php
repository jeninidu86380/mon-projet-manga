<?php
// paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "entreprise";
// établir la connexion 
$connexion = mysqli_connect
($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);
// vérifier la connexion
if (!$connexion) {
    die("echec de la connexion :". mysqli_connect_error());
} else {
    echo "connexion réussi à la bd.";
}
// exécuter une requête SELECT
$sql = "SELECT * FROM table";
$resultat = mysqli_query($connexion, $sql);
// vérifier si la requête à réussi
if ($resultat) {
    print_r($resultat);
} else {
    echo "erreur:". mysqli_error($connexion);
}
// fermer la connexion
mysqli_close($connexion);
// exemple de jointure INNER JOIN
$sql = "SELECT * FROM entreprise";
$resultat = mysqli_query($connexion, $sql);
// exemple de récupération des résultats
if ($resultat){
    foreach($resultat as $entreprise) {
        print_r($entreprise);
    }
} else {
    echo "erreur :". mysqli_error($connexion); 
}
?>