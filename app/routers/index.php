<?php


if(isset($_GET['posts'])) :
    include_once '../app/routers/posts.php';

else: 
// ROUTE PAR DÉFAUT
// PATTERN: /
// CTRL: pagesController
// ACTION: home
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
endif;