<h2 class="text-center mb-3">Liste des formateurs</h2>
<?php if(count($tabTrainers) > 0): ?>
	<table class="table mb-3 text-center">
		<thead class="table-dark">
            <td>Nom</td>
            <td>Prénom</td>
            <td>Société</td>
            <td>Actions</td>
		</thead>
		<?php foreach($tabTrainers as $index => $trainer): ?>
			<tr>
				<td><?php echo $trainer->getName()?></td>
				<td><?php echo $trainer->getFirstName()?></td>
				<td><?php echo $trainer->getCompany()?></td>
                <td>
                    <a href="/trainerModify/<?php echo $index ?>" title="modifier" class="btn btn-warning me-3">Modifier</a>
                    <a href="/trainerDelete/<?php echo  $index?>" title="supprimer" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
		<?php endforeach; ?>
	</table>
	<?php else: ?>
		<p>Aucun résultat trouvé pour les formateurs.</p>
<?php endif; ?>
