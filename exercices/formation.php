<h1>Formation</h1>    
<?php                 /* ou // perment de faire des commentaire perso */
                    //if = si et else = sinon
                     // Déclaration de la variable $prénom et affectation d'une chaine de caractères
$prenom = '<strong>Jennifer</strong>';
         // echo permet d'afficher le prénom 
echo 'Le prénom est :'.$prenom.'. C\'est un beau prénom.<br/>';
        // ou echo "Le prénom est : $prenom. <h5>C'est un beau prénom</h5>.";
        // Déclaration des variables $nombreAnnees... et affectation des années en entier
$nombreAnneesCollege = (int) 5;
$nombreAnneesLycee = (int) 3;
$nombreAnneesUniversite = (int) 1;
         // Déclaration de la variable nombreAnneesActivite et affectation de l'addition des $nombreAnnees... 
$nombreAnneesActivite = $nombreAnneesCollege + $nombreAnneesLycee + $nombreAnneesUniversite;
         // echo $nombreAnneesActivite;

    // Affiche le $nombreAnneeActivite dans une phrase de présentation
echo 'Je suis en activité de formation et professionnelle depuis ' . $nombreAnneesActivite .' ans. ';
             // Déclaration des variables $a et $b et affectation de nombres
$a = (int) 8;
$b = (int) 5;
            // Incrémentation ds variables $a et $b
$a++;        // $a : 8+1=9
++$b;       // $b : 5+1=6 
             // Si $b est supérieur à $a
    if ($b > $a) {
             // Alors afficher que $b est supérieur à $a
             // Utilisation de simples côtes (apostrophes) avec concaténation des variables et de la chaine pas le '.'
echo $b . ' est supérieur à ' . $a;
}
    else {     // Sinon 
         // Alors afficher que $b n'est pas supérieur à $a
         // Utilisatin des guillements avec injection des variables directement dans la chaine de caractère (avec les simples côtes ça ne fonctionnerait pas)
    echo "$b n'est pas supérieur à $a";
}
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}        // La boucle s'éxécute 5 fois : Affiche : 1 2 3 4 5
for ($produitsPanier = 1; $produitsPanier < 5; ++$produitsPanier) {
        echo $produitsPanier. '<br/>
        ';
}
/* Table multiplication : */
$premiereBoucleCompteur = 1;
$deuxiemeBoucleCompteur = 1;
for (
    $premiereBoucleCompteur = 1;    /* l'état du compteur au départ de la boucle*/
    $premiereBoucleCompteur <= 9;   /* tant que le compteur est inférieur ou égal à 9 */
    ++$premiereBoucleCompteur     /* a chaque itération de boucle, ajoute 1 au compteur */
) { 
    echo '<h3>Table n°' . $premiereBoucleCompteur . '</h3>    
    ';                                    /* affiche la valeur du compteur de la première boucle */   
    echo '<ul>';
    for (
        $deuxiemeBoucleCompteur = 1;    /* l'état du compteur au départ de la boucle*/
        $deuxiemeBoucleCompteur <= 9;   /* tant que le compteur est inférieur ou égal à 9 */
        ++$deuxiemeBoucleCompteur     /* a chaque itération de boucle, ajoute 1 au compteur */
    ) {
        $resultat = $premiereBoucleCompteur * $deuxiemeBoucleCompteur;
         echo '<li>' . $premiereBoucleCompteur . ' * ' . $deuxiemeBoucleCompteur . ' = ' . $resultat;    /* affiche la valeur du compteur*/
        } 
        echo '</ul>';  
}       /*for () Paramètres de la boucle , départ, arrêt, incrémentation
        {} Code éxecuté dans la boucle*/

         /*$resultat = $premiereBoucleCompteur * $deuxiemeBoucleCompteur;
         echo $premiereBoucleCompteur . ' * ' . $deuxiemeBoucleCompteur . ' = <br/>';  affiche la valeur du compteur de la deuxième boucle
         echo $resultat.'<br/>';*/
/* Tableau : */
$liste = ['pomme', 'banane', 'orange'];     /* création du <tableau></tableau>*/
/*$liste[] = 'kiwi';                        = liste = ajout d'éléments dans le tableau*/ 
$fruits = [
    [
        'nom' => 'orange',
        'prix' => 15, 
        'ref' => '5564'
    ],
    [
        'nom' => 'kiwi',
        'prix' => 3, 
        'ref' => '6455'
    ],
    [
        'nom' => 'banane',
        'prix' => 5, 
        'ref' => '6489'
    ],
];
foreach($fruits as $fruit) {
    echo 'nom : ' . $fruit['nom'] . ', prix : ' . $fruit['prix'] . '<br/>';
} 
/*Créer un tableau qui liste les personnes de la formation, chaque personne sera composée des éléments suivants:
-prenom (string)   -nom (string)  -email (string)   -telephone (string)   -age (integer=nombre entier sans '')   -vacciné covid (booléan=true:vrai , false:faux)*/
$personnes = [
    [   /* ligne 0 */     /*supprimer une personne = unset($personnes[]) */
        'prenom' => 'A',
        'nom' => 'B', 
        'email' => 'a.b@gmail.fr',
        'telephone' => '0680084054',
        'age' => 34, 
        'vacciné covid' => true     /*vrai*/
    ],
    [   /* ligne 1*/
        'prenom' => 'C',
        'nom' => 'D', 
        'email' => 'C.D@gmail.fr',
        'telephone' => '0780084054',
        'age' => 38, 
        'vacciné covid' => false    /*faux*/
    ],
$personnes[] =  [       /*ligne 2 / ajouter une personne = $personne[]*/
        'prenom' => 'e',
        'nom' => 'F', 
        'email' => 'e.F@gmail.fr',
        'telephone' => '0640548008',
        'age' => 28, 
        'vacciné covid' => false
    ]
];
/*ajouter une personne / supprimer une personne / mélanger le tableau en ordre aléatoire / filtrer les éléments */    
shuffle($personnes);                /* mélanger le tableau*/
unset($personnes[0]);              /*supprimer une personne*/
foreach($personnes as $personne) {
    if ( $personne['vacciné covid'] ==true ) {
        echo
        'prenom : ' . $personne['prenom'] . 
        ', nom : ' . $personne['nom'] . 
        ', email : ' . $personne['email'] . 
        ', telephone : ' . $personne['telephone'] .
        ', age : ' . $personne['age'] . 
        ', vacciné covid : ' . $personne['vacciné covid'] . 
        '<br/>';  
    }
 }     
 
/* Lister les voitures : nom, modèle / Ajouter le nom de la marque*/ 
$voitures = [
    [
        'nom' => 'C3',
        'modele' => '2023',
        'marque' => [
            'nom' => 'Citroën',
            'ville' => [
                'nom' => 'Paris',
                'latitude' => 0.785,
                'longitude' => 1.865,
            ],
            'chiffreAffaires' => 13679403,
        ],
    ],
    [
        'nom' => 'GLE',
        'modele' => '2023',
        'marque' => [
            'nom' => 'Mercedes',
            'ville' => [
                'nom' => 'Berlin',
                'latitude' => 0.785,
                'longitude' => 1.865,
            ],
            'chiffreAffaires' => 97324546804,
        ],
    ],
    [
        'nom' => 'Dacia',
        'modele' => '2012',
        'marque' => [
            'nom' => 'Renault',
            'ville' => [
                'nom' => 'Poitiers',
                'latitude' => 0.785,
                'longitude' => 1.865,
            ],
            'chiffreAffaires' => 5000,
        ],
    ]
];
foreach($voitures as $voiture) {                                                    /*Lister les voitures : nom, modèle*/
    echo 'nom : ' . $voiture['nom'] . ', modele : ' . $voiture['modele'] . '<br/>';   
    echo $voiture['marque']['nom'] . '<br/>';
} 

?>