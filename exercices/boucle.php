/* Faire une boucle for de 20 itérations permettant d'afficher un compteur de 1 à 20.
Ajouter en html des listes à puces pour chaque li*/

<?php 
for ($compteur = 1; $compteur <= 20; $compteur++) { 
    echo '<li>' . $compteur . '</li>';
}
echo '</ul>';

/*bouclé sur le tableau des fruits et afficher chacun d'entre eux*/
$fruits = ['Pomme', 'Banane', 'Fraise', 'Orange'];
$fruits = [

    ['nom' => 'Pomme'],
    ['nom' => 'Banane'],
    ['nom' => 'Fraise'],
    ['nom' => 'Orange'],
];

foreach ($fruits as $fruit) {
    echo 'nom : ' . $fruit['nom'];
}