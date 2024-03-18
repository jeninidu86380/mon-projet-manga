<?php include('panierDonnees.php');     
    include('panierFonctions.php');     

/*Inclusion des fichiers de données et de fonctions*/

?><html>
<head>

</head>
<body>   

<!--Affichage du panier client-->

    <h1>Mon panier</h1>
    <ul>
        <?php foreach ($panier as $fruit) { ?>  
            <li>
                Produit : <?php echo $fruit['nom'];?> <br>
                Quantité : <?php echo $fruit['quantite'];?> <br>
                Prix kg HT : <?php echo $fruit['prixKgHT'];?> <br>
                Prix total HT : <?php echo panierProduitPrixTotalHT($fruit['quantite'], $fruit['prixKgHT']);?> € <br>
            </li>
        <?php } ?>  
    </ul>
    <strong>TOTAL PANIER HT : <?php echo panierMontantTotalHT ($panier); ?> </strong><br/>
    <strong>TOTAL PANIER TTC : <?php echo panierMontantTotalTTC ($panier, $tauxTVA); ?> </strong>
 
</body> 
</html>