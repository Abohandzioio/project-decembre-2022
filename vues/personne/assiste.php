<?php ob_start() ?>

<h2 class="text-center">HISTORIQUE DE MATCH ASSISTES</h2>
<div class="">
    <a class="text-danger text-center btn btn-outline-danger col-sm-2 mb-1" href="#">Vider l'historique</a>
</div>

<table class="table table-strepid">
    <tr class="table-dark">

        
        <td></td>
        <td></td>
        <td>RENCONTRE</td>
        <td></td>
        <td>Lieu</td>
        <td></td>
        <td>DATE</td>
        <td></td>
        <td>Heure</td>
    </tr>
    
    <?php foreach ($historiques as $historique) : ?>

        <?php if (strtotime($historique->getDateMatch()) < strtotime(date('d:m:y'))): ?>
        
        <tr>
            <td></td>
            <td></td>
            
            
            <td class="text-primary"> <?= $historique->getNomEquipeA() ?> vs <?= $historique->getNomEquipeB() ?></td>
            <td>|</td>
            
            <td class="text-primary"><?= $historique->getLieu() ?></td>
            <td>|</td>
            <td class="text-success"> <?= $historique->getDateMatch() ?> </td>
            <td>|</td>
            <td class="text-primary"><?= $historique->getHeureMatch() ?></td>

        </tr>
        <?php endif; ?>
    <?php endforeach; ?>

</table>


<?php
$content = ob_get_clean();
include 'vues/template.php';
?>