<?php 
namespace App\Controllers\PostsController;

use \PDO, \App\Models\PostsModel;

function showAction(PDO $connexion, int $id){

    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id);

    global $content,$title;
    $title = "Alex Parker - " . $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}

function createFormAction(PDO $connexion){

    global $title, $content;
    $title = "Alex Parker - Add a post";
    ob_start();
    include '../app/views/posts/createForm.php';
    $content = ob_get_clean();

}
