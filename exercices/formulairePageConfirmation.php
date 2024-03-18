<!-- Page qui traite le formulaire et affiche la confirmation -->
<!-- Champs : nom, email, telephone, message, objet, secret, checkbox, loisirs, contact( _ = inderscore) -->
<?php
print_r($_POST);

/* Contrôle du formulaire :

 Existe t-il un $_POST? */
if (empty($_POST)) {
    echo 'le formulaire n\'a pas été soumis correctement';
    exit();
}
/*Existe t-il un $_POST['nom'] et est-il différent de null?*/
if (isset($_POST)) {    /*if = si*/
    echo 'ok';      /*Cette variable existe, donc je peux l\'afficher.';*/
} else {        /* else = alors*/
    echo 'erreur sur le nom.';
    exit();
}

/* $_POST['nom'] est-il inférieur à 80 caractères? */

/* Utiliser isset et empty*/
?>
<h1>Nous avons bien reçu votre message !</h1>

Nom : <?php echo $_POST ["nom"] ; ?> <br/>
E-MAIL : <?php echo $_POST ["email"] ; ?> <br/>
Téléphone : <?php echo $_POST ["telephone"] ; ?> <br/>
Message : <?php echo $_POST ["message"] ; ?> <br/>  
Objet :  <?php echo $_POST ["objet"] ; ?> <br/>
Secret : <?php echo $_POST ["secret"] ; ?> <br/>
Checkbox : <?php echo $_POST ["majeur"] ; ?> <br/>
Loisirs : <?php echo $_POST ["loisirs"] ; ?> <br/>
Contact : <?php echo $_POST ["contact"] ; ?> <br/>