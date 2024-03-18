<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mon super blog !!!</h1>

    <?php
    $articles = scandir('./blog');
                                         /*print_r ($articles);*/
    foreach ($articles as $article) {   /* lire le contenu de l'article*/
        echo file_get_contents('./blog/' . $article)
                                        /* afficher le contenu de l'article*/
    }
    ?>
    
</body>
</html>