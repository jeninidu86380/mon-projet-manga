<?php
/* Condition sur un âge pour déterminer si la personne est Mineur ou Majeur*/
$age = 26;
/* Si la personne est majeur ALORS afficher "Majeur" Sinon afficher "Mineur"*/
echo"Majeur";
echo '<br>';
if ($age > 18 ) {
    echo "Majeur";
} else {
    echo "Mineur";
}
echo '<br>';
/* Condition sur la taille du prénom 
Si le prénom est de taille sup à 20 caractères alors afficher "Prénom trop grand"*/
$prenom = 'Emmanuellerocher';
echo strlen($prenom); /* ou */
$prenomNombreCaracteres = strlen($prenom);
echo $prenomNombreCaracteres;
echo '<br>';
if (strlen($prenom) /* ou $prenomNombreCaracteres;*/ > 20){
    echo "Prénom trop grand";
}
/*Sinon si le prénom est de taille inf à 10 caractères alors afficher "Prénom trop petit"*/
else if (strlen($prenom) < 10){
    echo "Prénom trop petit";
}
/* Si le prénom est de taille inf à 20 caractères et sup à 10 alors afficher "Prénom moyen"*/
/* Inducations : un seul if et pas de else*/
if (strlen($prenom) < 20 && strlen($prenom) > 10){
    echo "Prénom moyen";
}
echo '<br>';
/* Si la taille du prénom est supérieur à 15 ET inf à 30 ET paire ALORS prénom ok*/
if (strlen($prenom)>15 /* si inf à 15*/
&& strlen($prenom)<30  /* et sup à 30*/
&& strlen($prenom)% 2==0 /* et nombre paire*/
) {
    echo "Prénom OK";   /* alors afficher 'prénom ok'*/
}


