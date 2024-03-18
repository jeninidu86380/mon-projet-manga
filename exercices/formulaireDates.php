<!-- exercice 2 : -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire dates</title>
</head>
<body>
    <form action= "dates.php" method="post">
        <input type="date" id="dateDeNaissance" name="dateDeNaissance" required>
        <input type="submit" value="Envoyer le message">
    </form>
</body>
</html>

<?php
 echo '<br><br>';
/* print_r($_POST); 
if (!empty($_POST)){
    echo 'Ta date de naissance est le : ' . $_POST['naissance'];
} */
// Définition des deux dates: $date1 = '2024-02-20' et $date2 = '2023-12-25':
// Convertir les dates en timestamps
// Comparer les timestamps
// Afficher la date la plus récente
$date1 = '2024-02-20';
$date2 = '2023-12-25';
$timestamp1 = strtotime($date1);
$timestamp2 = strtotime($date2);

if ($timestamp1 > $timestamp2) {
    echo "$date1";
} elseif ($timestamp2 > $timestamp1) {
    echo "$date2";
} else {
    echo "Les deux dates sont égales.";
}
    echo '<br><br>';
// Définition des deux dates
// Convertir les dates en timestamps
// Calculer la différence en secondes entre les deux timestamps
// Convertir la différence en jours
// Afficher la différence en jours sur la page
$dateDebut = '2024-02-20';
$dateFin = '2024-12-31';

$timestampDebut = strtotime($dateDebut);
$timestampFin = strtotime($dateFin);

$differenceEnSecondes = $timestampFin - $timestampDebut;
$differenceEnJours = floor($differenceEnSecondes / (60 * 60 * 24)); /*floor = arrondir*/
    echo "$differenceEnJours";
    echo '<br><br>';
// Définition d'une date
// Convertir la date en timestamp
// Trouver le jour de la semaine correspondant au timestamp
// Afficher le jour
$date = '2024-02-20';
$timestamp = strtotime($date);
$jourDeLaSemaine = date("l", $timestamp);
    echo "$date $jourDeLaSemaine";
    echo '<br><br>';
// Définition d'une date de naissance
// Convertir la date de naissance en timestamp
// Obtenir le timestamp actuel
// Calculer la différence en secondes entre les deux timestamps
// Convertir la différence en années (pour info : il y a 31536000 secondes dans une année)
// Afficher l'âge
$dateDeNaissance = '1990-01-01';
$timestampNaissance = strtotime($dateDeNaissance);
$timestampActuel = time();

$differenceEnSecondes = $timestampActuel - $timestampNaissance;
$ageEnAnnees = floor($differenceEnSecondes / 31536000);
    echo "$ageEnAnnees";
    echo '<br><br>';

?>