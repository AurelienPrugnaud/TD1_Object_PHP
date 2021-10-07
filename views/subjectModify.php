<div class="card shadow col p-3 m-3">
    <h2 class="text-center">Formulaire de modification d'une matière</h2>
	<form class="" action="/subjectModify/<?php echo $tabParamUrl[2]?>" method="POST">
		<p>
			<label for="name" class="form-label">Nom</label>
			<input type="text" id="name" name="name" class="form-control"
                   value="<?php if(!empty($subjectToModify) && !empty($subjectToModify->getName())): echo $subjectToModify->getName(); endif;?>"/>
		</p>
		<p>
			<label for="duration" class="form-label">Durée</label>
			<input type="number" id="duration" name="duration" class="form-control"
                   value="<?php if(!empty($subjectToModify) && !empty($subjectToModify->getDuration())): echo $subjectToModify->getDuration(); endif;?>"/>
		</p>
		<p>
			<label for="description" class="form-label">Description</label>
			<textarea id="description" name="description" class="form-control"/><?php if(!empty($subjectToModify) && !empty($subjectToModify->getDescription())): echo $subjectToModify->getDescription(); endif;?></textarea>
		</p>
		<p>
            <?php if(isset($tabParamUrl) && isset($tabParamUrl[2]) && $tabParamUrl[2]>=0): ?>
                <input type="hidden" id="index" name="index"
                       value="<?php echo $tabParamUrl[2]; ?>">
            <?php endif; ?>
			    <input type="submit" class="btn btn-dark" name="validate" value="valider"/>
		</p>
		<a href="../index.php" class="card-link link-dark" title="">Retour à l'index</a>
	</form>
</div>