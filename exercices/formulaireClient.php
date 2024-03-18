<!--    Créer un formulaire d'une fiche client
    Nom (texte court)
    Prénom (texte court)
    Date de naissance (Date)
    Email (Email)
    Abonnement newsletter (Radio bouton)
    Intérêts (cases à cocher - multiple)
    Abonnement : Oui/Non
Intérêts : Chaussettes / Pulls / Pantalons / Jupes / Echarpes-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire client</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action= "formulaireClientConfirmation.php" method="POST">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required>
        </div>
        <br>
        <div>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" required>
        </div>
        <br>
        <div>
            <label for="dateDeNaissance">Date de naissance</label>
            <input type="date" id="dateDeNaissance" name="dateDeNaissance" required>
        </div>
        <br>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <br>
        <div>
            <label for="abonnementNewsletter">Abonnement Newsletter</label>
            <select name="abonnementNewsletter" id="abonnementNewsletter">
                <option value="oui">Non</option>
                <option value="non">Oui</option>
            </select>
        </div>
        <br>
        <div>
            <label for="produits">Produits</label>
            <select name="produits[]" id="produits" multiple>
                <option value="Chaussettes" required>Chaussettes</option>
                <option value="Pulls" required>Pulls</option>
                <option value="Pantalons" required>Pantalons</option>
                <option value="Jupes" required>Jupes</option>
                <option value="Echarpes" required>Echarpes</option>
            </select>
        </div>
        <br>
        <div>
            <input type="submit" value="Envoyer">
        </div>
</body>
</html>
