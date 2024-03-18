<h1>Formation</h1>
<?php
    // h1 correspond à un titre qui est Formation 

    /* ou // perment de faire des commentaire perso */
    //if = si et else = sinon

    // Déclaration de la variable $prénom et affectation d'une chaine de caractères
$prenom = '<strong>Jennifer</strong>';

    // echo permet d'afficher le prénom 
echo 'Le prénom est :'.$prenom.'. C\'est un beau prénom.<br/>';
    // ou echo "Le prénom est : $prenom. <h5>C'est un beau prénom</h5>.";

    // Déclaration des variables $nombreAnees... et affectation des années en entier
$nombreAnneesCollege = (int) 5;
$nombreAnneesLycee = (int) 3;
$nombreAnneesUniversite = (int) 1;

    // Déclaration de la variable nombreAnneesActivite et affectation de l'addition des $nombreAnnees... 
$nombreAnneesActivite = $nombreAnneesCollege + $nombreAnneesLycee + $nombreAnneesUniversite;

    // echo $nombreAnneesActivite;

    // Affiche le $nombreAnneeActivite dans une phrase de présentation
echo 'Je suis en activité de formation et professionnelle depuis ' . $nombreAnneesActivite .' an. ';

    // Déclaration des variables $a et $b et affectation de nombres
$a = (int) 8;
$b = (int) 5;
    // Incrémentation ds variables $a et $b
$a++; // $a : 8+1=9
++$b; // $b : 5+1=6 

    // Si $b est supérieur à $a
if ($b > $a) {
    // Alors afficher que $b est supérieur à $a
    // Utilisation de simples côtes (apostrophes) avec concaténation des variables et de la chaine pas le '.'
    echo $b . ' est supérieur à ' . $a;
}
// Sinon
else {
    // Alors afficher que $b n'est pas supérieur à $a
    // Utilisatin des guillements avec injection des variables directement dans la chaine de caractère (avec les simples côtes ça ne fonctionnerait pas)
    echo "$b n'est pas supérieur à $a";
}

for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
    // La boucle s'éxécute 5 fois : Affiche : 1 2 3 4 5

for ($produitsPanier = 1; $produitsPanier < 5; ++$produitsPanier) {
        echo $produitsPanier. '<br/>';
}
/*Tables de multiplication : fonctionnalité attendue : affichage à l'écran des tables de multip comme ci-dessous
Table de 1 : 1*1=1    2*1=2   3*1=3
<h3>Table de 1</h3> 
<ul>
    <li>1 * 1 = <strong>1</strong></li>
    <li>2 * 1 = <strong>2</strong></li>
    <li>3 * 1 = <strong>3</strong></li>
</ul>
<h3>Table de 2</h3>
<ul>
    <li>1 * 1 = <strong>1</strong></li>
    <li>2 * 1 = <strong>2</strong></li>
    <li>3 * 1 = <strong>3</strong></li>
</ul>
<h3>Table de 2</h3>
<ul>
    <li>1 * 1 = <strong>1</strong></li>
    <li>2 * 1 = <strong>2</strong></li>
    <li>3 * 1 = <strong>3</strong></li>
</ul>
Déclaration et attribution de variables
$compteurTable = 1; Mise à 1 de la variable $compteurTable (numéro de la table courante)
$compteurMultiplicateur = 1; Mise à 1 de la variable $compteurMultiplicateurl (multiplicateur de la table courante)
Déclaration et attribution des variables $nombreDeTables et $nombreDeMultiplicateur
$nombreDeTable = 10; Nombres de tables à afficher
$nombreDeMultiplicateur = 10; Nombre de multiplicateur à afficher par table */

for ($i = 1; $i <= 10; $i++) {
    echo '<h3>Table de 1</h3>'; 
}





/*
echo '<h3>Table de 2</h3>';
echo '<h3>Table de 3</h3>';*/

?>