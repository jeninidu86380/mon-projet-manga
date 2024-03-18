<?php
print_r($_POST);

echo'<ul>';
    foreach ($_POST['produits'] as $produit) {    
        echo '<li>'. $produit .'</li>';      
} 
echo'</ul>';
?>
<h2>Nous avons bien reçu vos informations !</h2>

Nom : <?php echo $_POST ["nom"] ; ?> <br/>
Prénom : <?php echo $_POST ["prenom"] ; ?> <br/>
Date de naissance : <?php echo $_POST ["dateDeNaissance"] ; ?> <br/>
E-MAIL : <?php echo $_POST ["email"] ; ?> <br/>
Newsletter :  <?php echo $_POST ["abonnementNewsletter"] ; ?> <br/>
Produits : <?php
    foreach ($_POST['produits'] as $produit) {    
         echo '<li>'. $produit .'</li>';      
} 
echo'</ul>';

// Récéption données clients : Chemin vers le fichier texte
$cheminFichier = "monFichier.txt";

// Ouvrir le fichier en mode écriture ('w' pour écraser le contenu existant)
$fichier = fopen($cheminFichier, "w");

// Contenu à écrire dans le fichier
$contenu = $_POST ['nom'] . '
    ' . $_POST ['prenom'] . '
    ' . $_POST ['dateDeNaissance'] . '
    ' . $_POST ['email'] . '
    ' . $_POST ['abonnementNewsletter'] . '
    ' 
;    

// Écrire le contenu dans le fichier
fwrite($fichier, $contenu);

foreach ($_POST['produits'] as $produit) {    
    fwrite ($fichier, $produit ) ;     
} 
// Fermer le fichier
fclose($fichier);
echo "Le contenu a été écrit avec succès dans le fichier.";
?> <br/>
