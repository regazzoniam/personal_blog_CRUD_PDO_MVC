<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des articles</title>
</head>
<body class="my-5 mx-5">
    <!-- Bouton pour revenir à l'accueil -->
    <a href="index.php">
        <button class="btn btn-secondary" type="submit">Aller à l'accueil</button>
    </a>
    <?php
    //debug
    // echo'<pre>';
    // print_r($tableauObjetArticle);
    // echo'</pre>';

    //mettre un titre à la page + ouverture div de classe "row"
    echo '
    <h2 class="my-5 text-center">Tous les articles</h2>
    <div class="row justify-content-around">';
    //mettre des buttons "ajouter article", "modifier article","supprimer article"
    echo '
    <div class="container pb-5 text-center">
        <a href="?page=articles&action=action-insert">
            <button class="btn btn-success" type="submit"><i class="fa-solid fa-plus"></i> Créer un article</button>
        </a>
    </div>
    ';
    //on boucle dans le tableauObjetArticle obtenu dans le controller pour afficher les infos sur les articles
    foreach ($tableauObjetArticle as $id => $objet) {
        echo '
        <div class="card" style="width: 18rem;">
        <img src="'.$objet->getUrlImg().'" class="card-img-top" alt="'.$objet->getTitle().'" width="50">
        <div class="card-body">
            <h5 class="card-title">'.$objet->getTitle().'</h5>
            <p class="card-text">'.$objet->getSummary().'</p>
            <a href="?page=articles&id='.$objet->getId().'" class="btn btn-info">Voir l\'article</a>
            
            <a href="?page=articles&action=action-update&id='.$objet->getId().'">
                <button class="btn btn-secondary" type="submit"><i class="fa-solid fa-pen"></i></button>
            </a>
            <a href="?page=articles&action=action-delete&id='.$objet->getId().'">
                <button class="btn btn-danger" type="submit"><i class="fa-solid fa-ban"></i></button>
            </a>
        </div>        
        </div>
        ';
    }
    //fermeture div de classe "row"
    echo '</div>';    
    ?>   
</body>
</html>