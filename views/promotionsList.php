<h2 class="text-center mb-3">Liste des promotions</h2>
<?php if(count($tabPromotions) > 0): ?>
    <table class="table mb-3 text-center">
        <thead class="table-dark">
            <td>Nom</td>
            <td>Date de début</td>
            <td>Date de fin</td>
            <td>Nombre d'apprenant</td>
        </thead>
        <?php foreach($tabPromotions as $tabPromotion): ?>
            <tr>
                <td><?php echo $tabPromotion["name"]?></td>
                <td><?php echo $tabPromotion["startDate"]?></td>
                <td><?php echo $tabPromotion["endDate"]?></td>
                <td><?php echo $tabPromotion["numberOfLearners"]?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
		<p>Aucun résultat trouvé pour les promotions.</p>
<?php endif; ?>
