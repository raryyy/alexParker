<?php
// ROUTER PRINCIPAL
// ROUTE DES AUTHORS
// PATERN: /?authors
if(isset($_GET['authors'])) :
    

else: 
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
endif;