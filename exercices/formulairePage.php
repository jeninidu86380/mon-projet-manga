<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>
<body>

    <h1>Formulaire de contact</h1>
    <form action= "formulaireConfirmation.php" method="POST">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required>
        </div>
        <br>
        <div>
            <label for="telephone">Téléphone</label>
            <input type="tel" name="telephone" id="telephone" required>
        </div>
        <br>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <br>
        <div>
            <label for="message">Message</label>
            <textarea type="message" name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <br>
        <div>
            <label for="objet">Objet</label>
            <select name="objet" id="objet">
                <option value="reclamation">Réclamation</option>
                <option value="question">Question</option>
                <option value="demande">Demande</option>
            </select>
        </div>
        <br>
        <div>
            <input type="hidden" name="secret" id="secret" required>
        </div>
        <br>
        <div>
            <label for="majeur">Majeur</label>
            <input type="checkbox" name="majeur" id="majeur">
        </div>
        <br>
        <div>
            <label for="loisirs">Loisirs</label>
                <input type="radio" name="loisirs" value="sport" required>
                <input type="radio" name="loisirs" value="lecture" required>
                <input type="radio" name="loisirs" value="musique" required>
            </select>
        </div>
        <br>
        <div>
            <label for="contact">contact</label>
            <select name="contact" id="contact" multiple="multiple">
                <option value="telephone">telephone</option> 
                <option value="mail">mail</option> 
                <option value="courrier">courrier</option> 
            </select>
        </div>
        <br>
        <div>
            <input type="submit" value="Envoyer le message">
        </div>
    </form>
    
</body>
</html>