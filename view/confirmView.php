<?php

$title = 'Validé !';

ob_start(); 
    ?>
    <body >
    <div class="my-5 mx-5 text-center">
        <!-- Bouton pour revenir à la liste d'articles -->
        <div class="button mb-5">
            <a href="index.php?page=articles">
                <button class="btn btn-primary" type="submit">Aller à la liste des articles</button>
            </a>
        </div>
        <!-- Formulaire pour confirmer ou non la suppression de l'élément -->
        <form method="post">
        <p>Voulez-vous supprimer cet élément</p>
        <p>Oui<input type="radio" name="confirm" value="Oui"/></p>
        <p>Non<input type="radio" name="confirm" value="Non"/></p>
        <p><input type="submit" /></p>
        </form>
    </div>
    </body>
    <?php

$content = ob_get_clean();

require 'template.php';