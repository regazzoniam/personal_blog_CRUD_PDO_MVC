<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Police Google -->
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet"> 
</head>
<body>
    <?php

    if (!empty($_GET['page'])) {//si le paramètre page n'est pas vide
        if ($_GET['page'] === "articles") {//si la valeur du paramètre page est 'elements'
            require("controller/articleController.php");//utilise ElementsController
        } else{
            require("view/homeView.php");//si la valeur du paramètre page n'est pas 'elements' alors on retourne à la page d'accueil
        }
    

    }else {
        // Redirige vers la page d'accueil
        require("view/homeView.php");
    }

    ?>
</body>
</html>