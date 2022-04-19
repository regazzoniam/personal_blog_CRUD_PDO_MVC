<?php

$title = 'Validé !';

//echo $objetElement->rowCount();//debug

if ($objetElement->rowCount() == 1){
    //quand on a 1 ligne de modifiée
    $content = '
    <body class="my-5 mx-5">
    <h2>Parfait, les données modifiées dans le formulaire ont bien été changées</h2>
    <div class="button mt-5">
        <a href="index.php?page=articles">
            <button class="btn btn-primary" type="submit">Aller à la liste des articles</button>
        </a>
    </div>
    <body>';
}else{
    //quand aucune ligne n'est modifiée
    $content = '
    <body class="my-5 mx-5">
    <h2>Attention, les données modifiées dans le formulaire n\'ont pas été changées
    </h2>
    <div class="button mt-5">
    <a href="index.php?page=articles">
        <button class="btn btn-primary" type="submit">Aller à la liste des articles</button>
    </a>
    </div>
    <body>';
}

require 'template.php';