<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un monument</title>
</head>
<body class="my-5 mx-5">
    <!-- Bouton pour revenir à la liste d'articles -->
    <a href="index.php?page=articles">
        <button class="btn btn-secondary" type="submit">Aller à la liste des articles</button>
    </a>
    <?php
    //debug
    //var_dump($objetArticle);
    //on affiche les infos détaillées de l'article 
    echo'
    <div class="container my-5 text-center">
        <div class="">
                <h2>'.$objetArticle->getTitle().'</h2>
                <h3>Auteur : '.$objetArticle->getAuthor().'</h3>
                <h5>Date : '.$objetArticle->getDate().'</h5>
                <img src="'.$objetArticle->getUrlImg().'" alt="'.$objetArticle->getTitle().'" width ="400" class="my-5" >
                <p class="my-5">'.$objetArticle->getContent().'</p>
        </div>
    </div>
    ';
    ?>
       
</body>
</html>