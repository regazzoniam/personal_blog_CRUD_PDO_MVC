<?php

declare(strict_types=1);

//définition d'une classe articleModel sur le modele de ma base de données
class articleModel {
    private int $id;
    private string $author;
    private string $title;
    private string $content;
    private string $summary;
    private string $url_img;
    private string $date;

    public function hydrate(){
        $this->setAuthor($_POST['author']);
        $this->setTitle($_POST['title']);
        $this->setContent($_POST['content']);
        $this->setSummary($_POST['summary']);
        $this->setUrlImg($_POST['url_img']);
        $this->setDate($_POST['date']);
    }
    public function getId(){return $this->id;}
    public function setId($id){$this->id = $id;}

    public function getAuthor(){return $this->author;}
    public function setAuthor($author){$this->author = $author;}

    public function getTitle(){return $this->title;}
    public function setTitle($title){$this->title = $title;}

    public function getContent(){return $this->content;} 
    public function setContent($content){$this->content = $content;}

    public function getSummary(){return $this->summary;}
    public function setSummary($summary){$this->summary = $summary;}
    
    public function getUrlImg(){return $this->url_img;}
    public function setUrlImg($url_img){$this->url_img = $url_img;}

    public function getDate(){return $this->date;}
    public function setDate($date){$this->date = $date;}

    //méthode de validation des propriétés
    public static function validateAll() {
        //Verifie que tout les champs sont initialisés
        if (!isset($_POST['author']) || !isset($_POST['title']) || !isset($_POST['content']) || !isset($_POST['summary']) || !isset($_POST['url_img']) || !isset($_POST['date'])) {
            throw new Exception('L\'un des champs n\'est pas initialisé !<br>');
        }
        //Vérifie que tout les champs sont remplis
        if (empty($_POST['author']) || empty($_POST['title']) || empty($_POST['content']) || empty($_POST['summary']) || empty($_POST['url_img']) || empty($_POST['date'])) {
            throw new Exception('L\'un des champs est vide <br>');
        }
        //Vérification des données en fonction de la BDD
        if (strlen($_POST['author']) < 0 || strlen($_POST['author']) > 50 || !is_string($_POST['author'])) {
            throw new Exception('Le champ "Auteur" n\'est pas valide <br>');
        }
        if (strlen($_POST['title']) < 0 || strlen($_POST['title']) > 100 || !is_string($_POST['title'])) {
            throw new Exception('Le champ "Titre" n\'est pas valide <br>');
        }
        if (strlen($_POST['content']) < 0 || strlen($_POST['content']) > 500 || !is_string($_POST['content'])) {
            throw new Exception('Le champ "Contenu" n\'est pas valide <br>');
        }
        if (strlen($_POST['summary']) < 0 || strlen($_POST['summary']) > 200 || !is_string($_POST['summary'])) {
            throw new Exception('Le champ "Summary" n\'est pas valide <br>');
        }
        if (strlen($_POST['url_img']) < 0 || strlen($_POST['url_img']) > 500 || !is_string($_POST['url_img'])) {
            throw new Exception('Le champ "Url de l\'image" n\'est pas valide <br>');
        }
        if (strlen($_POST['date']) < 0 || strlen($_POST['date']) > 10 || !is_string($_POST['date'])) {
            throw new Exception('Le champ "Date" n\'est pas valide <br>');
        }
        return true;
    }
}