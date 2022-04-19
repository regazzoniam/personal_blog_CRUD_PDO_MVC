<?php

declare(strict_types=1);

//on utilise la connexion à la base de données
require 'connection/articleConnection.php';
require 'model/articleModel.php';

class articleManager{

    //fonction pour obtenir un article
    public static function getOneById() {
        $queryGetOne = $GLOBALS['db']->prepare("SELECT * FROM article WHERE id = :id");
        $queryGetOne->execute(['id' => $_GET['id']]);
        return $queryGetOne->fetchObject('articleModel');
    }
    //fonction pour obtenir tous les articles
    public static function getAll() {
        $queryGetAll = $GLOBALS['db']->query("SELECT * FROM article");
        return $queryGetAll->fetchAll(PDO::FETCH_CLASS,'articleModel');
    }
    //fonction pour insérer un article
    // public static function insertOne() {
    //     $queryInsertOne = $GLOBALS['db']->prepare("INSERT INTO article (author, title, content, summary, url_img, date) VALUES 
    //     (:author, :title, :content, :summary, :url_img,:date)");
    //     $queryInsertOne->execute([
    //         'author' => $_POST['author'],
    //         'title' => $_POST['title'], 
    //         'content' => $_POST['content'], 
    //         'summary' => $_POST['summary'], 
    //         'url_img' => $_POST['url_img'], 
    //         'date' => $_POST['date']
    //     ]);
    // }
    public static function insertOne($objet){//on passe par un objet pour insérer dans la bdd

        // var_dump($objet->getFamille());     
        $queryInsertOnePrepare = $GLOBALS['db']->prepare('INSERT INTO article (author, title, content, summary, url_img, date) VALUES (?,?,?,?,?,?)');//$GLOBAL est un tableau qui contient toutes les variables
        $queryInsertOnePrepare->execute([$objet->getAuthor(),$objet->getTitle(),$objet->getContent(),$objet->getSummary(),$objet->getUrlImg(),$objet->getDate()]);
        return $queryInsertOnePrepare;
    }


    // fonction pour mettre à jour un article
    public static function updateOne($objet){
      
        $queryUpdateOnePrepare = $GLOBALS['db']->prepare('UPDATE article SET author = ?, title = ?, content = ?, summary = ?, url_img = ?, date = ? WHERE id = ?');//$GLOBAL est un tableau qui contient toutes les variables
        $queryUpdateOnePrepare->execute([$objet->getAuthor(),$objet->getTitle(),$objet->getContent(),$objet->getSummary(),$objet->getUrlImg(),$objet->getDate(),$_GET['id']]);
        return $queryUpdateOnePrepare;
    }


    // fonction pour supprimer un article
    public static function deleteOne() {
        $queryDeleteOne = $GLOBALS['db']->prepare("DELETE FROM `article` WHERE id= :id");
        $queryDeleteOne->execute(['id' => $_GET['id']]);
        return $queryDeleteOne;
    }
}