<?php
//DEBUT ###### on définit le $title
$title = 'Blog';
//FIN ###### on définit le $title

//DEBUT ###### on définit le $content
ob_start(); 
?>
<body style="background-image : url('assets/img/home.jpg');background-size: cover;background-repeat: no-repeat;"> 
        <div class="flex-column text-center">
                <div class="my-5">
                    <h1>Sparking joy</h1>
                    <h2 class="welcome">Le blog</h2>
                </div>
            <!-- Création d'un lien qui passe en paramètre d'url ?page=articles et  sera rediriger vers le controller articleController ==> voir index.php-->
            <h2><a href="?page=articles" >Accéder aux articles du blog</a></h2>
        </div>
</body>
<?php
$content = ob_get_clean();
//FIN ###### on définit le $content

require 'template.php';