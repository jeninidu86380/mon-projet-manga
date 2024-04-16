<?php
    // Connexion à la BDD
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "to_do_list";

    // Établir la connexion
    $connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    /* Vérifier la connexion
    if (!$connexion) {
        die("Échec de la connexion : " . mysqli_connect_error());
    } else {
        echo "Connexion réussie à la base de données.<br>";
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Ma To-Do List !</h1>
        <form action="index.php" method="post">
            <input type="text" name="new_task" placeholder="Nouvelle tâche">
            <button type="submit" name="add">Ajouter</button>  
        </form>
        <form action="index.php" method="post">
            <button type="submit" name="delete">Supprimer</button>
            <hr>
            <h2>Liste des tâches</h2>
            <ul>
                <?php
                    // Affichage des tâches avec une case à cocher
                    $sql = "SELECT * FROM liste";
                    $resultat = mysqli_query($connexion, $sql);
                    if ($resultat) {
                        while ($liste = mysqli_fetch_assoc($resultat)) {
                            echo "<li>";
                            echo "<input type='checkbox' name='task[]' value='" . $liste['id'] . "'>";
                            echo "<label>" . $liste['title'] . "</label>";
                            echo "</li>";
                        }
                    } else {
                        echo "Erreur : " . mysqli_error($connexion);
                    }
                ?>
            </ul>
            <form action="index.php" method="post">
                <button type="submit" name="delete">Enregistrer</button>
            <form action="index.php" method="post">
                <button type="submit" name="delete">Supprimer</button>
            </form>
        </div>
    </body>
</html>

<?php
    // Vérifie si le formulaire de suppression a été soumis
    if(isset($_POST['delete'])) {
        // Vérifie si des tâches sont cochées pour suppression
        if(isset($_POST['task'])) {
            // Parcourt les tâches cochées
            foreach($_POST['task'] as $task_id) {
                // Supprime la tâche de la base de données
                $sql = "DELETE FROM liste WHERE id = $task_id";
                mysqli_query($connexion, $sql);
            }
            // Redirige vers la page principale après la suppression
            header("Location: index.php");
            exit();
        }
    }
    // Traitement de l'ajout de tâche
    if(isset($_POST['ajouter'])) {
        // Vérification si le champ de texte n'est pas vide
        if(!empty($_POST['nouvelle_tache'])) {
            // Récupération de la nouvelle tâche depuis le formulaire
            $nouvelle_tache = $_POST['nouvelle_tache'];
            
            // Création de la requête SQL pour insérer la nouvelle tâche dans la base de données
            $sql = "INSERT INTO liste (titre, fait) VALUES ('$nouvelle_tache', 0)";
            
            // Exécution de la requête SQL
            if(mysqli_query($connexion, $sql)) {
                // Recharge la page pour afficher la tâche ajoutée
                header("Location: index.php");
                exit();
            } else {
                echo "Erreur lors de l'ajout de la tâche : " . mysqli_error($connexion);
            }
        } else {
            echo "Veuillez saisir une nouvelle tâche.";
        }
    }
?>


