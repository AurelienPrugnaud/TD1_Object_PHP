<h2 class="text-center mb-3">Liste des apprenants</h2>
<?php if(count($tabLearners) > 0): ?>
    <table class="table mb-3 text-center">
        <thead class="table-dark">
        <td>Nom</td>
        <td>Prénom</td>
        <td>Date de naissance</td>
        </thead>
        <?php foreach($tabLearners as $tabLearner):?>
            <tr>
                <td><?php echo $tabLearner["name"] ?></td>
                <td><?php echo $tabLearner["firstName"] ?></td>
                <td><?php echo $tabLearner["dateOfBirth"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
	<?php else: ?>
		<p>Aucun résultat trouvé pour les apprenants.</p>
<?php endif; ?>
