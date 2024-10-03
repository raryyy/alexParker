<?php

use \App\Controllers\PostsController;
include_once '../app/controllers/postsController.php';

switch ($_GET['posts']):

// ROUTE DU DETAIL D'UN POST
// CTRL: postController
// ACTION: showAction

    case 'show':
        PostsController\showAction($connexion, $_GET['id']);
    break;

// ROUTE D'AJOUT D'UN POST: affichage du formulaire
// PATTERN: /posts/add/form.html
// CTRL: postsController
// ACTION: createFormAction

    case 'form':
        PostsController\createFormAction($connexion);
    break;

// ROUTE DE SUPPRESSION D'UN POST 
// PATTERN: /posts/id/slug-du-post/delete.html
// CTRL: postsControllers
// ACTION: deleteAction

    case 'delete':
        PostsController\deleteAction($connexion, $_GET['id']);
    break;

// ROUTE DE MODIFICATION D'UN POST: Affichage du formulaire
// PATTERN: /posts/id/slug-du-post/edit/form.html
// CTRL: postsController
// ACTION: editFormAction

    case 'editForm':
        PostsController\editFormAction($connexion, $_GET['id']);
    break;

// ROUTE DE MODIFICATION D'UN POST: UPDATE
// PATTERN: /posts/id/slug-du-post/edit/update.html
// CTRL: postsController
// ACTION: editUpdateAction

    case 'editUpdate':
        PostsController\editUpdateAction($connexion, $_GET['id']);
    break;

// ROUTE D'AJOUT D'UN POST: INSERT
// PATTERN: /posts/add/insert.html
// CTRL: postsController
// ACTION: addAction

    case 'add':
        PostsController\addAction($connexion, $_POST);
    break;
    
// ROUTE PAR DEFAUT: liste des posts
// PATTERN: /
// CTRL: pagesController
// ACTION: homeAction
// TITLE: Alex Parker - Blog
    default:
        \App\Controllers\PagesController\homeAction($connexion);
    break;

endswitch;
