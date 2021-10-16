<div class="card shadow col p-3 m-3">
	<h2 class="text-center">Formulaire de modification d'une promotion</h2>
	<form class="" action="/promotionModify/<?php echo $tabParamUrl[2]?>" method="POST">
		<p>
			<label for="name" class="form-label">Nom</label>
			<input type="text" id="name" name="name" class="form-control"
				   value="<?php if(!empty($promotionToModify) && !empty($promotionToModify->getName())): echo $promotionToModify->getName(); endif;?>"/>
		</p>
		<p>
			<label for="startDate" class="form-label">Date de début</label>
			<input type="date" id="startDate" name="startDate" class="form-control"
				   value="<?php if(!empty($promotionToModify) && !empty($promotionToModify->getStartDate())): echo $promotionToModify->getStartDate(); endif;?>"/>
		</p>
		<p>
			<label for="endDate" class="form-label">Date de fin</label>
			<input type="date" id="endDate" name="endDate" class="form-control"
				   value="<?php if(!empty($promotionToModify) && !empty($promotionToModify->getEndDate())): echo $promotionToModify->getEndDate(); endif;?>"/>
		</p>
		<p>
			<label for="numberOfLearners" class="form-label">Date de fin</label>
			<input type="text" id="numberOfLearners" name="numberOfLearners" class="form-control"
				   value="<?php if(!empty($promotionToModify) && !empty($promotionToModify->getNumberOfLearners())): echo $promotionToModify->getNumberOfLearners(); endif;?>"/>
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