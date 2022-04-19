<?php

$id = 'root';
$mdp = '';

//capturer l'erreur

try {//on met en place un bloc try catch pour attraper l'erreur (nommée PDOException) et éviter de mettre nos id et mdp dans notre erreur publique

    //définir le nom de la bdd
    $nomDeLaBDD = 'projets-perso';
    //définir le SGBD utilisé et l'adresse ip du serveur ainsi que le charset (on peut ajouter ici le mode d'erreur => par défaut en exception)
    $dsn = 'mysql:host=localhost;charset=utf8;dbname='.$nomDeLaBDD;

    //créér une nouvelle PDO
    $db = new PDO ($dsn, $id, $mdp);

}catch(PDOException $e){//on a une clsse qui est dédiée aux exceptions PDO, c'est PDOException
    
    die('Erreur : '.$e->getMessage());//die = arrete le script
}