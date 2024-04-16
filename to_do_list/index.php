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
// Affichage des tâches avec une case à cocher
$sql = "SELECT * FROM liste";
$resultat = mysqli_query($connexion, $sql);
if ($resultat) {
    while ($liste = mysqli_fetch_assoc($resultat)) {
        echo "<li>";
        echo "<input type='checkbox' name='task[]' value='" . $liste['id'] . "'>";
        echo "<label>" . $liste['titre'] . "</label>";
        echo "</li>";
    }
} else {
    echo "Erreur : " . mysqli_error($connexion);
}
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
if(isset($_POST['ajouter'])) {
    // Ajoute la nouvelle tâche à la base de données
    $sql = "INSERT INTO liste (titre, fait) VALUES ('$nouvelle_tache', 0)";
    mysqli_query($connexion, $sql);

    // Redirige vers la page principale après l'ajout
    header("Location: index.php");
    exit();
}
?>
