<?php
$prenom = 'Jennifer';
/*Déclaration d'une fonction d'affichage*/
function ditBonjour($prenom) {
    echo 'Bonjour ' . $prenom;
}
/*Execution de la fonction*/
ditBonjour($prenom);
echo '<br /><br/>';     /*=saut de ligne*/

/*Déclaration de la fonction d'addition*/
function additionner($nombre1, $nombre2)
{
    $addition = $nombre1 + $nombre2;
    return $addition;
}
/*Appel de la fonction d'addition avec 2 paramètres*/ 
echo additionner (5, 7);
echo '<br /><br/>';

/* Déclaration de la fonction de calcul de mètres cubes*/
/* Le nombre de m3 = longueur * largeur * hauteur*/
/* Appel de la fonction de calcul de mètres cubes*/
function multiplication ($nombre1, $nombre2, $nombre3) {
    $mutiplication = $nombre1 * $nombre2 * $nombre3;
    return $mutiplication;
}
echo multiplication (5, 7, 6);
echo '<br /><br/>';
/* function calculMetresCubes($longueur, $largeur, $hauteur)
{
    $calcul =$longueur*$largeur*$hauteur;
    return $calcul;
}
Appel de la fonction de calcul de mètres cubes.
echo 'Le nombre de mètres cubes est de : ' . calculMetresCubes(5, 7, 6);*/ 


/* Déclaration du tableau de fruits */
$fruits = ['pomme', 'banane', 'orange'];
/* Déclaration de la fonction qui liste le tableau de fruits*/
function listerFruits($fruits) 
{   /* Retourne la liste des fruits dans une chaine de caractères (string)*/
    $listeFruits = '';
    /*boucle sur la liste des fruits*/
    foreach ($fruits as $fruit) {
        $listeFruits .= $fruit . ' - ';
    }
    /*$listefruits .= 'test';*/
    return $listeFruits; 
}
/* Affichage de la liste des fruits= appl la fonction listerfruits et nomme les fruits*/
echo listerFruits($fruits);
