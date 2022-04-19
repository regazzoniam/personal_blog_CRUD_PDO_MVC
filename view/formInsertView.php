<?php
//DEBUT ###### on définit le $title
$title = 'Formulaire rapide';
//FIN ###### on définit le $title

//DEBUT ###### on définit le $content
ob_start(); 
?>
<body>
    <!-- Bouton pour revenir à la liste d'articles -->
    <div class="m-5">
    <a href="index.php?page=articles">
        <button class="btn btn-secondary" type="submit">Aller à la liste des articles</button>
    </a>
    </div>
<?php
require 'connection/articleConnection.php';
//ENVOI CORRECT : condition pour laquelle on a tous nos champs de remplis
function display_form(){
    require 'model/formModel.php';
    $form = new FormModel('Création d\'un nouvel article','post');
    $form->field('text', 'Auteur de l\'article', 'author');
    $form->field('text', 'Titre de l\'article', 'title');
    $form->field('text', 'Contenu de l\'article', 'content');
    $form->field('text', 'Résumé de l\'article','summary');
    $form->field('text', 'Url de l\'image de l\'article','url_img');
    $form->field('text', 'Date de l\'article','date');
    $form->closeForm();
}
display_form();
?>
</body>
<?php
$content = ob_get_clean();
//FIN ###### on définit le $content

require 'template.php';