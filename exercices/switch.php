<?php
switch ($day) {
    case "lundi":
        echo "C'est le début de la semaine.";
        break;
    case 'Vendredi':
            echo "C'est bientôt le week-end.";
            break;
    default:
        echo "Un autre jour de la semaine.";
}

if ($day =='lundi') {
    echo "C'est le début de la semaine";
} else if ($day=='vendredi'){
    echo "C'est bientôt le week-end.";
} else {"Un autre jour de la semaine.";
}