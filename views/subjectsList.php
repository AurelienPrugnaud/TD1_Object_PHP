<h2 class="text-center mb-3">Liste des matières</h2>
<?php if(count($tabSubjects) > 0): ?>
    <table class="table mb-3 text-center">
        <thead class="table-dark">
            <td>Nom</td>
            <td>Durée</td>
            <td>Description</td>
            <td>Actions</td>
        </thead>
        <?php foreach($tabSubjects as $subject):?>
            <tr>
                <td><?php echo $subject->getName() ?></td>
                <td><?php echo $subject->getDuration() ?></td>
                <td><?php echo $subject->getDescription() ?></td>
                <td><button class="btn btn-warning me-3">Modifier</button><button class="btn btn-danger">Supprimer</button></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
        <p>Aucun résultat trouvé pour les matières.</p>
<?php endif; ?>
