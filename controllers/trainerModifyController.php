<?php
	require_once("models/TrainerModel.php");

	$tabTrainers = array();

	$trainerDavigoDelphine = new Trainers('DAVIGO', 'Delphine', 'Inconnue');
	$trainerDavigoDelphine->addToList($tabTrainers);

	$trainerPezetPierre = new Trainers('PEZET', 'Pierre', 'Gaido');
	$trainerPezetPierre->addToList($tabTrainers);

	$trainerChevalierThomas = new Trainers('CHEVALIER', 'Thomas', 'Inconnue');
	$trainerChevalierThomas->addToList($tabTrainers);

	$trainerPoncinCindy = new Trainers('PONCIN', 'Cindy', 'Kyü Solutions');
	$trainerPoncinCindy->addToList($tabTrainers);

	$trainerToModify = new Trainers('','','');

	if(!empty($_POST) && !empty($_POST['validate']) && isset($_POST['index']) && $_POST['index']>=0):
		$trainerToModify->modifyTrainerByIndex($tabTrainers, $_POST['index'], $_POST['name'], $_POST['firstName'], $_POST['company']);
	endif;

	if(isset($tabParamUrl) && isset($tabParamUrl[2]) && $tabParamUrl[2]>=0):
		$trainerToModify = $trainerToModify->getTrainerByIndex($tabTrainers, $tabTrainers['index']);
	endif;

	$list = "trainerModify";