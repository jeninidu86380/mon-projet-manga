<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    // Connexion à la base de données
    $serveur = "localhost"; // Adresse du serveur MySQL
    $utilisateur = "root"; // Nom d'utilisateur MySQL
    $mot_de_passe = ""; // Mot de passe MySQL
    $base_de_donnees = "to_do_list"; // Nom de la base de données MySQL

    // Établir la connexion
    $connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    /* Vérifier la connexion
    if (!$connexion) {
        die("Échec de la connexion : " . mysqli_connect_error());
    } else {
        echo "Connexion réussie à la base de données.<br>";
    }*/
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="style.css" rel="stylesheet"> <!-- Inclusion du fichier de style -->
</head>
<body>
    <div class="container">
        <h1>Ma To-Do List !</h1>
        <!-- Formulaire pour ajouter une nouvelle tâche -->
        <form action="index.php" method="post">
            <input type="text" name="new_task" placeholder="Nouvelle tâche">
            <button type="submit" name="add">Ajouter</button>  
        </form>
        <hr>
        <h2>Liste des tâches :</h2>
        <ul>
            <?php 
                // Traitement de l'ajout de tâche
                if(isset($_POST['add'])) { // Vérifie si le formulaire d'ajout est soumis
                    if(!empty($_POST['new_task'])) { // Vérifie si le champ de texte n'est pas vide
                        $nouvelle_tache = $_POST['new_task']; // Récupère la nouvelle tâche
                        $sql = "INSERT INTO liste (titre, fait) VALUES ('$nouvelle_tache', 0)"; // Requête SQL pour ajouter la tâche
                        if(mysqli_query($connexion, $sql)) { // Exécute la requête SQL
                            header("Location: index.php"); // Redirige vers la page principale après l'ajout
                            exit();
                        } else {
                            echo "Erreur lors de l'ajout de la tâche : " . mysqli_error($connexion); // Affiche une erreur en cas d'échec de l'ajout
                        }
                    } else {
                        echo "Veuillez saisir une nouvelle tâche."; // Message si le champ de texte est vide
                    }
                }
                // Affichage des tâches avec une case à cocher
                $sql = "SELECT * FROM liste"; // Requête SQL pour récupérer les tâches
                $resultat = mysqli_query($connexion, $sql); // Exécute la requête SQL
                if ($resultat) { // Vérifie si la requête a réussi
                    while ($liste = mysqli_fetch_assoc($resultat)) { // Parcourt les résultats de la requête
                        echo "<li>";
                        echo "<input type='checkbox' name='task[]' value='" . $liste['id'] . "'>"; // Affiche une case à cocher pour chaque tâche
                        echo "<label>" . $liste['titre'] . "</label>"; // Affiche le titre de la tâche
                        echo "</li>";
                    }
                } else {
                    echo "Erreur : " . mysqli_error($connexion); // Affiche une erreur en cas d'échec de la requête SQL
                }
                if(isset($_POST['delete'])) { // Vérifie si le formulaire de suppression est soumis
                    if(isset($_POST['task'])) { // Vérifie si des tâches sont sélectionnées pour suppression
                        foreach($_POST['task'] as $task_id) { // Parcourt les tâches sélectionnées
                            $sql = "DELETE FROM liste WHERE id = $task_id"; // Requête SQL pour supprimer la tâche de la base de données
                            if(mysqli_query($connexion, $sql)) { // Exécute la requête SQL de suppression
                                header("Location: index.php"); // Redirige vers la page principale après la suppression
                                exit();
                            }
                        }    
                    }
                }
            ?>
        </ul>
        <!-- Formulaire pour enregistrer les tâches -->
        <form action="index.php" method="post">
            <button type="submit" name="save">Enregistrer</button> <!-- Bouton pour enregistrer les tâches -->
        </form>
        <!-- Formulaire pour supprimer les tâches -->
        <form action="index.php" method="post">
            <button type="submit" name="delete">Supprimer</button> <!-- Bouton pour supprimer les tâches sélectionnées -->
        </form>
    </div>
</body>
</html>