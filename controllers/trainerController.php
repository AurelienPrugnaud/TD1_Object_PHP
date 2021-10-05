<?php
	require_once("models/TrainerModel.php");

	$trainerDavigoDelphine = new Trainers('DAVIGO', 'Delphine', 'Inconnue');
	/*echo $trainerDavigoDelphine->getName();
	echo $trainerDavigoDelphine->getFirstName();
	echo $trainerDavigoDelphine->getCompany();*/

	$trainerPezetPierre = new Trainers('PEZET', 'Pierre', 'Gaido');
	/*echo $trainerPezetPierre->getName();
	echo $trainerPezetPierre->getFirstName();
	echo $trainerPezetPierre->getCompany();*/

	$trainerChevalierThomas = new Trainers('CHEVALIER', 'Thomas', 'Inconnue');
	/*echo $trainerChevalierThomas->getName();
	echo $trainerChevalierThomas->getFirstName();
	echo $trainerChevalierThomas->getCompany();*/

	$trainerPoncinCindy = new Trainers('PONCIN', 'Cindy', 'Kyü Solutions');
	/*echo $trainerPoncinCindy->getName();
	echo $trainerPoncinCindy->getFirstName();
	echo $trainerPoncinCindy->getCompany();*/

	//var_dump($trainers);

	$tabTrainers = array($trainerDavigoDelphine, $trainerChevalierThomas, $trainerPezetPierre, $trainerPoncinCindy);

	//variable pour l'appel de la liste des formateurs avec .htaccess
	$list = "trainersList";

	//besoin de cet include sans .htaccess
	//include("views/trainersList.php");
