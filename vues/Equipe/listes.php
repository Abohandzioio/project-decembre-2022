<?php ob_start() ?>

<h2 class="text-center text-success mt-5">Liste Equipes</h2>
<div class="container-fluid">
	<table class="table table-strepid">
		<tr class="table-dark">
			
			
			<td>  </td>
			<td>  </td>
			<td>  </td>
			<td>  </td>
			<td>  </td>
			<td><b>NOMS EQUIPES</b></td>
			<td> </td>
			<td>  </td>
			<td>  </td>
			<td><b>ACTION</b></td>
			<td>  </td>
			<td>  </td>

		</tr>

		<?php foreach ($equipes as $equipe) : ?>
			<tr class="">
				
				
				<td>  </td>
				<td>  </td>
				<td>  </td>
				<td>  </td>
				<td>  </td>
				<td> <?= $equipe->getNomEquipe() ?> </td>
				<td> </td>
				<td>  </td>
				<td > | </td>
				<td>					
					<a class="text-danger" href="?actionEq=sup&nomEq=<?=$equipe->getNomEquipe() ?>"><i>Supprimer</i> </a>
				</td>
				<td>  </td>
				<td>  </td>
			</tr>
		<?php endforeach; ?>

	</table>
</div>

<?php
$content = ob_get_clean();
include 'vues/template.php';
?>