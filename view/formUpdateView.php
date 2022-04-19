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
function display_form($objet){
    require 'model/formModel.php';
    $form = new FormModel('Modification d\'un article','post');
    $form->field('text', 'Auteur de l\'article', 'author',$objet->getAuthor());
    $form->field('text', 'Titre de l\'article', 'title',$objet->getTitle());
    $form->field('text', 'Contenu de l\'article', 'content',$objet->getContent());
    $form->field('text', 'Résumé de l\'article','summary',$objet->getSummary());
    $form->field('text', 'Url de l\'image de l\'article','url_img',$objet->getUrlImg());
    $form->field('text', 'Date de l\'article','date',$objet->getDate());
    $form->closeForm();
}
display_form($unObjetArticle);
?>
</body>
<?php
$content = ob_get_clean();
//FIN ###### on définit le $content

require 'template.php';