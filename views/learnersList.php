<h2 class="text-center mb-3">Liste des apprenants</h2>
<?php if(count($learners) > 0): ?>
    <table class="table mb-3 text-center">
        <thead class="table-dark">
        <td>Nom</td>
        <td>Prénom</td>
        <td>Date de naissance</td>
        </thead>
        <?php foreach($learners as $learner):?>
            <tr>
                <td><?php echo $learner["name"] ?></td>
                <td><?php echo $learner["firstName"] ?></td>
                <td><?php echo $learner["dateOfBirth"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
	<?php else: ?>
		<p>Aucun résultat trouvé pour les apprenants.</p>
<?php endif; ?>
