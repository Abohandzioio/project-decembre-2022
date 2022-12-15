<?php ob_start() ?>

<h2 class="text-center">Liste des Rencontres</h2>

<table class="table table-striped">
    <tr class="table-dark">
        <td></td>
        <td>ID</td>
        <td></td>
        <td>Equipe 1</td>
        <td></td>
        <td></td>
        <td></td>
        <td>Equipe2</td>
        <td></td>
        <td>Lieu</td>
        <td></td>
        <td>Date</td>
        <td></td>
        <td>Heure</td>
        <td></td>
        <td>Action</td>

    </tr>

    <?php foreach ($rencontres as $rencontre) : ?>
       
            <tr>
                <td></td>
                <td><?= $rencontre->getIdRencontre() ?></td>
                <td>|</td>
                <td><b> <?= $rencontre->getNomEquipeA() ?> </b></td>
                <td><i>Vs</i></td>
                <td></td>
                <td></td>
                <td><b> <?= $rencontre->getNomEquipeB() ?></b> </td>
                <td>|</td>
                <td> <?= $rencontre->getLieu() ?> </td>
                <td>|</td>
                <td><b> <?= $rencontre->getdateMatch() ?> </b></td>
                <td>|</td>
                <td> <?= $rencontre->getHeureMatch() ?> </td>
                <td>|</td>
                <td> <a class="text-primary" href="?actionR=reserver&idRe=<?=$rencontre->getIdRencontre(); ?>">acheter</a></td>
            </tr>
    <?php endforeach; ?>

</table>

<?php
$content = ob_get_clean();
include 'vues/template.php';
?>