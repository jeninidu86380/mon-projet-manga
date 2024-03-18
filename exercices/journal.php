<?php
$file = fopen("journal.txt", "a");      
$txt = $_SERVER['REMOTE_ADDR'] . "\n" . date('d-m-Y h:i:s') . "\n"; /* "\n" = retour à la ligne*/
fwrite($file, $txt);
fclose($file);

/* IP visiteur*/
echo $_SERVER['REMOTE_ADDR']; 

echo '<br>';
/* Date heure courante*/ 
echo date('d-m-Y h:i:s');
?>