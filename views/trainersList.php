<h2 class="text-center mb-3">Liste des formateurs</h2>
<?php if(count($trainers) > 0): ?>
	<table class="table mb-3 text-center">
		<thead class="table-dark">
            <td>Nom</td>
            <td>Prénom</td>
            <td>Société</td>
		</thead>
		<?php foreach($trainers as $trainer): ?>
			<tr>
				<td><?php echo $trainer["name"]?></td>
				<td><?php echo $trainer["firstName"]?></td>
				<td><?php echo $trainer["company"]?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<?php else: ?>
		<p>Aucun résultat trouvé pour les formateurs.</p>
<?php endif; ?>
