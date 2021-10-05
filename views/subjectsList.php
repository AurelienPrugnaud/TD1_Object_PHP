<h2 class="text-center mb-3">Liste des matières</h2>
<?php if(count($subjects) > 0): ?>
    <table class="table mb-3 text-center">
        <thead class="table-dark">
            <td>Nom</td>
            <td>Durée</td>
            <td>Description</td>
        </thead>
        <?php foreach($subjects as $subject):?>
            <tr>
                <td><?php echo $subject["name"] ?></td>
                <td><?php echo $subject["duration"] ?></td>
                <td><?php echo $subject["description"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
        <p>Aucun résultat trouvé pour les matières.</p>
<?php endif; ?>
