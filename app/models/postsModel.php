<?php 
namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion): array {
    $sql = "SELECT 
                    c.id AS category_id, 
                    c.name AS category_name, 
                    c.created_at AS category_created_at, 
                    p.*
            FROM posts p
            INNER JOIN categories c ON p.category_id = c.id
            ORDER BY p.created_at DESC
            LIMIT 10;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, int $id): array {
    $sql = "SELECT c.id AS category_id, c.name AS category_name, c.created_at AS category_created_at, p.*
            FROM posts p
            JOIN categories c ON p.category_id = c.id
            WHERE p.id = :id";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}

function deleteById(PDO $connexion, int $id) {
    // Requête pour supprimer un post
    $sql = "DELETE FROM posts WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    return $rs->execute();
}

function addOne(PDO $connexion, array $data): int {
    $sql = "INSERT INTO posts
            SET title = :title,
                text = :text,
                image = :image,
                quote = :quote,
                category_id = :category_id,
                created_at = NOW();";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
    $rs->bindValue(':image', $data['image'], PDO::PARAM_STR);
    $rs->bindValue(':quote', $data['quote'], PDO::PARAM_STR);
    $rs->bindValue(':category_id', $data['category_id'], PDO::PARAM_INT);
    $rs->execute();
    return $connexion->lastInsertId();
}

function updateOneById(PDO $connexion, int $id, array $data): bool {
    $sql = "UPDATE posts
            SET 
                title = :title,
                text = :text,
                quote = :quote,
                category_id = :category_id,
                image = :image
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
    $rs->bindValue(':image', $data['image'], PDO::PARAM_STR);
    $rs->bindValue(':quote', $data['quote'], PDO::PARAM_STR);
    $rs->bindValue(':category_id', $data['category_id'], PDO::PARAM_INT); 
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    return $rs->execute();
}
