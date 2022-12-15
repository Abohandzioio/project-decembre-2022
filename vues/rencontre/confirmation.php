<?php ob_start() ?>

        <h4 class=" text-center text-dark mt-4" >Reservation Prise en compte</h4>

            <div>
                <a href="?actionR=listes" class="btn btn-outline-primary col-sm-2 text-center">Retour</a>
            </div>
        

   
<?php
$content = ob_get_clean();
include 'vues/template.php';
?>