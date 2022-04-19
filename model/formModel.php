<?php

class FormModel{
    //Début du formulaire
    public function __construct(string $nameForm, string $method){
        echo '<div class="text-center">';
        echo '<h2 class="py-2">'.$nameForm.'</h2>';
        echo'<form method="'.$method.'">';
        echo '<div>';
    }
    //Ajouter des champs
    public function field(string $typeField, string $placeholderField, string $nameField,$valueField=''){
        //si le type est textarea
        if($typeField=="text" || $typeField=="email" || $typeField=="date" || $typeField=="password" || $typeField=="number"){
            //Si les types de champs sont gérés    
            echo '<input class="form-label" type="'.$typeField.'" name="'.$nameField.'" placeholder="'.$placeholderField.'" value="'.$valueField.'" style="width: 21rem;"><br>';
        }else{
            //Si le type de champs n'est pas pris en charge
            echo 'Cet input n\'est pas pris en charge<br>';
        }
    }
    //fermeture du formulaire
    public function closeForm(){
        echo'<input class="btn btn-primary my-2" type="submit" value="Envoyer">';
        echo'</div>';
        echo '</form>';
        echo '</div>';
    }
}
?>