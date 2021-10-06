<h2 class="text-center mb-3">Liste des promotions</h2>
<?php if(count($tabPromotions) > 0): ?>
    <table class="table mb-3 text-center">
        <thead class="table-dark">
            <td>Nom</td>
            <td>Date de début</td>
            <td>Date de fin</td>
            <td>Nombre d'apprenant</td>
            <td>Actions</td>
        </thead>
        <?php foreach($tabPromotions as $promotion): ?>
            <tr>
                <td><?php echo $promotion->getName()?></td>
                <td><?php echo $promotion->getStartDate()?></td>
                <td><?php echo $promotion->getEndDate()?></td>
                <td><?php echo $promotion->getNumberOfLearners()?></td>
                <td>
                    <a class="btn btn-warning me-3" href="" title="modify">Modifier</a>
                    <a class="btn btn-danger" href="" title="delete">Supprimer</a>
                </td>            </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
		<p>Aucun résultat trouvé pour les promotions.</p>
<?php endif; ?>
