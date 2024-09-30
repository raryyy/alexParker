<?php 

namespace Core\Helpers;

function truncate (string $string, int $lg_max = 150):string {
    if (strlen($string) > $lg_max):
    $string = substr($string, 0, $lg_max);
    $last_space = strrpos($string, " ");
    return substr($string, 0, $last_space)."...";
    endif;
    return $string;
    }

    function formatDate($dateString) {
        // Créer un objet \DateTime à partir de la chaîne de caractères
        $dateTime = new \DateTime($dateString);
        
        // Retourner la date formatée au format jj/MM/YYYY
        return $dateTime->format('d/m/Y');
    }
