<?php ob_start() ?>

<script defer>
	function confirmation(){
		return confirm("Vous en etes sur?")
	}
</script>

<h2 class="text-center text-primary mt-5">Liste Clients</h2>

<table class="table table-strepid">
	<tr class="table-dark">
		<td>ID</td>
		<td>Prenom</td>
		<td>Nom</td>
		<td>Sexe</td>
		<td>Ville</td>
		<td>Role</td>
		<td>Action</td>

	</tr>

	<?php foreach ($pers as $personne) : ?>
		<tr> 
			
			<td> <?= $personne->getIdUser() ?> </td>
			<td> <?= $personne->getPrenom() ?> </td>
			<td> <?= $personne->getNom() ?> </td>
			<td> <?= $personne->getSexe() ?> </td>
			<td> <?= $personne->getVille() ?> </td>
			<td> <?= $personne->getRole() ?> </td>
			</a>
			<td>
				<a class="text-primary" href="?actionPers=modifier&is=<?= $personne->getIdUser(); ?>">Modifier</a>
				|
				<a class="text-danger" href="?actionPers=supprimer&ids=<?= $personne->getIdUser(); ?>">Supprimer</a>
			</td>
		</tr>
	<?php endforeach; ?>

</table>

<?php
$content = ob_get_clean();
include 'vues/template.php';
?>
