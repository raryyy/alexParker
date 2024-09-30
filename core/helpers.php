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

// Fonction pour slugifier une chaine de caractère 
    function slugify($string){
    
        $string = strtolower($string);
        
        $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        
        $string = preg_replace('/[^a-z0-9\s-]/', '', $string);
        
        $string = preg_replace('/[\s-]+/', '-', $string);
        
        $string = trim($string, '-');
        
        return $string;
}
