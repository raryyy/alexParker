<?php

use \App\Controllers\PostsController;
include_once '../app/controllers/postsController.php';

switch ($_GET['posts']):
    
    case 'show':
        PostsController\showAction($connexion, $_GET['id']);
    break;

    case 'form':
        PostsController\createFormAction($connexion);
    break;

    // ROUTE DE SUPPRESSION D'UN POST:
    // PATTERN: /posts/id/slug-du-post/delete.html
    // CTRL: postsController
    // ACTION: delete
    case 'delete':
        PostsController\deleteAction($connexion, $_GET['id']);
    break;

    case 'add':
        PostsController\addAction($connexion, $_POST);
    break;


    default:
    \App\Controllers\PagesController\homeAction($connexion);
    break;

    endswitch;