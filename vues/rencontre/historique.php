<?php ob_start() ?>

<h2 class="text-center">HISTORIQUE ACHATS</h2>


<table class="table table-strepid">
    <tr class="table-primary">
        <td>DATE ACHAT BILLET</td>
        <td></td>
        <td>RENCONTRE</td>
        <td></td>
        <td></td>
        <td></td>
        
        <td>DATE</td>
        <td></td>
        <td></td>



    </tr>



    <?php foreach ($historiques as $historique) : ?>
        <tr>
        
            <td class="text-success"> <?= $historique->getDateAchat() ?></td>
            <td>|</td>
            <td class="text-success"> <?= $historique->getNomEquipeA() ?> vs <?= $historique->getNomEquipeB() ?></td>
            <td>____</td>
            
            <td><i>Match Joué le</i> </td>
            <td >|</td>
            <td> <?= $historique->getDateMatch() ?> </td>   
            <td class="">|</td>        
            <td>
            <?php if (strtotime($historique->getDateMatch()) > strtotime(date('d:m:y'))) : ?>
                
                 <a class="btn btn-outline-danger" href="?actionR=delete$idD=<?=strtotime($historique->getDateAchat())?>">Annuler</a>
            <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
<div class="text-center">
    <a class="text-danger text-center btn btn-outline-danger col-sm-3" href="">Vider l'historique</a>
</div>

<?php
$content = ob_get_clean();
include 'vues/template.php';
?>