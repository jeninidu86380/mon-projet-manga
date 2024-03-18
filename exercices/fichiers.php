<?php
$filename = "example.txt";
$content = file_get_contents($filename);    /*Lecture d’un fichier*/
echo $content;
?>

<?php
$filename = "example.txt";
$content = "Hello, Web Impulse!";
file_put_contents($filename, $content);     /*Ecriture d’un fichier*/
?>

<?php
$file = fopen("example.txt", "a");      /*Ouvrir et écrire dans un fichier*/
$txt = "coucou toi !\n";
fwrite($file, $txt);
fclose($file);
?>

<!--Les fonctions importantes pour manipuler les fichiers sont : -
- fopen() : Ouvre un fichier
- fwrite() : Écrit dans un fichier
- fread() : Lit un fichier
- fclose() : Ferme un fichier
- file_get_contents() : Lit tout un fichier dans une chaîne
- file_put_contents() : Écrit des données dans un fichier-->

