<?php

declare(strict_types=1);

require 'manager/articleManager.php';

if ((!empty($_GET['page']) && $_GET['page'] === "articles")) {

    //si on a ni un nom ni un id en paramètre dans l'url
    if(!empty($_GET['action'])){
        // if($_GET['action'] == 'action-insert'){
        //     require 'view/formInsertiew.php';
        //     try{
        //         articleModel::validateAll();
        //         //une fois que tout est validé, on fait la requete INSERT INTO
        //         articleManager::insertOne();
        //     }catch (Exception $e){
        //         echo $e->getMessage();
        //     }
        if($_GET['action'] == 'action-insert'){
            
            if(!empty($_POST)){//on vérifie que le $_POST n'est pas vide
                try{
                    articleModel::validateAll();//on valide les données
                    $objet = new articleModel;//on crée un nouvel objet
                    $objet->hydrate();
                    //une fois que tout est validé, on fait la requete INSERT INTO
                    $unObjetArticle = articleManager::insertOne($objet);//dans $objet j'ai le PDOStatement return par l'execute
                    require 'view/validationInsertView.php';//affiche la confirmation de l'insertion
                }catch (Exception $e){
                    require 'view/formInsertView.php';
                }
            }else{
                require 'view/formInsertView.php';
            }
        }elseif($_GET['action'] == 'action-update'){
            if($unObjetArticle = articleManager::getOneById()){
            //var_dump($_POST);//debug
            }
            if(!empty($_POST)){//on vérifie que le $_POST n'est pas vide
                try{
                    articleModel::validateAll();//on valide les données
                    $objet = new articleModel;//on crée un nouvel objet
                    $objet->hydrate();
                    //une fois que tout est validé, on fait la requete INSERT INTO
                    $objetElement = articleManager::updateOne($objet);//dans $objet j'ai le PDOStatement return par l'execute
                    require 'view/validationUpdateView.php';//affiche la confirmation de l'insertion
                    
                }catch (Exception $e){
                    require 'view/formUpdateView.php';
                }
            }else {
                require 'view/formUpdateView.php';
            }


        }elseif($_GET['action'] == 'action-delete'){
            if(!empty($_POST['confirm']) && $_POST['confirm'] == 'Oui'){
                try{
                    $objetElement = articleManager::deleteOne();//dans $objet j'ai le PDOStatement return par l'execute
                    require 'view/validationDeleteView.php';//affiche la confirmation de l'insertion

                }catch (Exception $e){
                    echo 'Erreur '.$e->getMessage;
                }
            }elseif(!empty($_POST['confirm']) && $_POST['confirm'] == 'Non'){
                $tableauObjetArticle = articleManager::getAll();
                require('view/articlesListView.php');
            }else{
                require 'view/confirmView.php';//on affiche le formualire si le $post['confirm'] est vide
        }
        }else{
            // Affiche une erreur
            require('view/errorView.php');
        }
    //si on a une id en paramètre dans l'url
    }elseif (!empty($_GET['id'])){
            if($objetArticle = articleManager::getOneById($_GET['id'])){
                require 'view/articleView.php';
            }else {
                // Affiche une erreur
                require('view/errorView.php');
            }    
    }else{
        $tableauObjetArticle = articleManager::getAll();
        require('view/articlesListView.php');
    }
}