<h2 class="text-center mb-3">Liste des matières</h2>
<?php if(count($tabSubjects) > 0): ?>
    <table class="table mb-3 text-center">
        <thead class="table-dark">
            <td>Nom</td>
            <td>Durée</td>
            <td>Description</td>
        </thead>
        <?php foreach($tabSubjects as $tabSubject):?>
            <tr>
                <td><?php echo $tabSubject["name"] ?></td>
                <td><?php echo $tabSubject["duration"] ?></td>
                <td><?php echo $tabSubject["description"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
        <p>Aucun résultat trouvé pour les matières.</p>
<?php endif; ?>
