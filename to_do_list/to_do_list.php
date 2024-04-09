<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>To-Do List</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div class="container">
        <!-- Bloc de la to-do liste -->
        <div class="to-do-list">
            <form id="task-form">
            <form method="post">
            <label
                >Nom :
                <input name="submitted-name" autocomplete="name" />
            </label>
            <button>Sauvegarder</button>
            </form>
                <h2>Liste des tâches : </h2>
                <ul id="tasks-list">
                    <!-- Les tâches seront ajoutées ici -->
                    <li>
                        <input type="checkbox">
                        <label>Faire les courses</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label>Aller à la pharmacie</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label>Rendez-vous au collège</label>
                    </li>
                </ul>
                <button id="save-btn">Enregistrer</button>
                <button id="clear-btn">Effacer les tâches effectuées</button>
            </form>
        </div>
        <!-- Bloc du formulaire d'ajout de tâches -->
        <div class="add-task">
            <h2>Ajouter une nouvelle tâche : </h2>
            <form id="task-form">
                <input type="text" id="task-input" placeholder="Entrez une nouvelle tâche">
                <button type="submit">Ajouter</button>
            </form>
        </div>
    </div>
</body>
</html>
