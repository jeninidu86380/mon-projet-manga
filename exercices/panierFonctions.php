<?php

    $montantPanierTotalTTC=0;

{   /*boucle sur chaque fruit du panier*/

    $fruit = [
        ['nom' => 'Pomme'],
        ['nom' => 'Orange'], 
        ['nom' => 'Ananas'], 
        ['nom' => 'Pêche'],
    ];
    /* Boucle sur chaque fruit du panier*/
    foreach($panier as $fruit) {
    /*Calcul le montant total TTC du panier , règle de calcul: prixKgHT du fruit x quantité du fruits*/
        $montantPanierTotalTTC = $montantPanierTotalTTC+ ($fruit['prixKgHT']*$fruit['quantite']);
    }
    return $montantPanierTotalTTC;
}
function panierProduitPrixTotalHT ($quantite, $prixKgHT) {
   $prixTotalHT = $quantite * $prixKgHT;
   return $prixTotalHT;
}   
function panierMontantTotalHT ($panier)
{
    $montantHT = 0;
    foreach($panier as $fruit) {
    /* ou $montantHT = $montantHT + ($fruits['quantite'] * $fruit['prixKgHT']); */ 
    $montantHT += panierProduitPrixTotalHT($fruit['quantite'],$fruit['prixKgHT']); }
    return $montantHT;
}
function panierMontantTotalTTC ($panier, $tauxTVA)
{
    $montantHT = panierMontantTotalHT($panier);
    $montantTVA = $montantHT * $tauxTVA/100;
    $montantTTC = $montantHT + $montantTVA;     /* ou $montantTTC = panierMontantTotalHT($panier) + (panierMontantTotalHT($panier) * ($tauxTVA/100)); */
    return $montantTTC; 
}