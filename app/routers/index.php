<?php


if(isset($_GET['posts'])) :
    

else: 
// ROUTE PAR DÉFAUT
// PATTERN: /
// CTRL: pagesController
// ACTION: home
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
endif;