<?php
//DEBUT ###### on définit le $title
$title = 'Erreur';
//FIN ###### on définit le $title

//DEBUT ###### on définit le $content
ob_start(); 
?>
<body>
    <div class="my-5 text-center">
        <img src="assets/img/error404.jpg" alt="Erreur 404" width="500">
    </div>
</body>
<?php
$content = ob_get_clean();
//FIN ###### on définit le $content

require 'template.php';