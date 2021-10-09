<div class="card shadow col p-3 m-3">
	<h2 class="text-center">Formulaire de modification d'un formateur</h2>
	<form class="" action="/trainerModify/<?php echo $tabParamUrl[2]?>" method="POST">
		<p>
			<label for="name" class="form-label">Nom</label>
			<input type="text" id="name" name="name" class="form-control"
				   value="<?php if(!empty($trainerToModify) && !empty($trainerToModify->getName())): echo $trainerToModify->getName(); endif;?>"/>
		</p>
		<p>
			<label for="firstName" class="form-label">Prénom</label>
			<input type="text" id="firstName" name="firstName" class="form-control"
				   value="<?php if(!empty($trainerToModify) && !empty($trainerToModify->getFirstName())): echo $trainerToModify->getFirstName(); endif;?>"/>
		</p>
		<p>
			<label for="company" class="form-label">Société</label>
			<input type="text" id="company" name="company" class="form-control"
				   value="<?php if(!empty($trainerToModify) && !empty($trainerToModify->getCompany())): echo $trainerToModify->getCompany(); endif;?>"/>
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