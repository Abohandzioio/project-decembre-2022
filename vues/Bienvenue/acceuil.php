<?php ob_start() ?>



   
    <h1 class="text-dark text-center" >Bienvenue sur notre site</h1>
   
    


<?php
$content = ob_get_clean();
include 'vues/template.php';
?>