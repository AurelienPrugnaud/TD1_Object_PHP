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

	$trainerToDelete = new Trainers('','','');
	$trainerToDelete->deleteTrainerFromIndex($tabTrainers, $tabParamUrl[2]);

	var_dump($tabTrainers);

	$list = "trainerDelete";