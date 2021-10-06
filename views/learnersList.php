<h2 class="text-center mb-3">Liste des apprenants</h2>
<?php if(count($tabLearners) > 0): ?>
    <table class="table mb-3 text-center">
        <thead class="table-dark">
        <td>Nom</td>
        <td>Prénom</td>
        <td>Date de naissance</td>
        <td>Actions</td>
        </thead>
        <?php foreach($tabLearners as $learner):?>
            <tr>
                <td><?php echo $learner->getName() ?></td>
                <td><?php echo $learner->getFirstName() ?></td>
                <td><?php echo $learner->getDateOfBirth() ?></td>
                <td>
                    <a class="btn btn-warning me-3" href="" title="modify">Modifier</a>
                    <a class="btn btn-danger" href="" title="delete">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
	<?php else: ?>
		<p>Aucun résultat trouvé pour les apprenants.</p>
<?php endif; ?>
