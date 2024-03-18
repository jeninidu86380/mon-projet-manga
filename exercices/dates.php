<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>
<body>
    <form action= "dates.php" method="post">
        
    </form>
</body>
</html>

<?php
/*exercice 1 : 
Afficher la date et l'heure du jour=*/
//Définition de la date du jour et de l'heure
//Affiche la date et l'heure du jour
$maintenant = Date('Y-m-d H:i:s');
echo $maintenant;
echo '<br><br>';
/*Afficher le mois actuel en lettres=*/
//Définition du mois actuel en lettre
//Affiche le mois actuel en lettre
$moisActuel = date('F');
echo "$moisActuel";
echo'<br><br>';
/*Ajouter 7 jours à la date actuelle=*/
//Définition de la date actuelle
//Ajoute 7 jours à la date actuelle
//Le format de l'affichage de la date sera année-mois-jours
//Affiche la date finale
$dateActuelle = new DateTime();
$dateActuelle->modify('+7 days');
$dateAffichage = $dateActuelle->format('Y-m-d');
echo "$dateAffichage";
echo '<br><br>';

?>
<!--
// Définir une date de naissance
$dateDeNaissance = '1990-01-01';
// Convertir la date de naissance en timestamp
$timestampNaissance = strtotime($dateDeNaissance);
// Obtenir le timestamp actuel
$timestampActuel = time();
// Calculer la différence en secondes entre les deux timestamps
$differenceSecondes = $timestampActuel - $timestampNaissance;
// Convertir la différence en années
$age = floor($differenceSecondes / 31536000); // 31536000 secondes dans une année
// Afficher l'âge
echo 'Age: ' . $age . ' ans';-->
<?php
if (!empty($_POST)) {
    // Etape 1 : Transformer les dates en timestamp
    $dateActuelle = date("Y-m-d");
    $dateActuelleTimestamp = strtotime($dateActuelle);
    $dateNaissance = $_POST['naissance'];
    // Récupération de la date du prochaine anniversaire
    $dateNaissanceTableau = explode("-", $dateNaissance);
    print_r($dateNaissanceTableau);
    // 2024-09-18
    $dateAnniversaire = date("Y") . '-' . $dateNaissanceTableau[1] . '-' . $dateNaissanceTableau[2]; // 2024-09-18
    // Affichage du nombre de jours restant avant la date anniversaire
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>
<body>
    <form action="" method="post">
        <input type="date" name="naissance" />
        <input type="submit" name="valider" value="valider" />
    </form>
    
</body>
</html>