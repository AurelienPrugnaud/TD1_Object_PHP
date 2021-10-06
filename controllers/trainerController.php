<?php
	require_once("models/TrainerModel.php");

	$tabTrainers = array();

	$trainerDavigoDelphine = new Trainers('DAVIGO', 'Delphine', 'Inconnue');
	/*echo $trainerDavigoDelphine->getName();
	echo $trainerDavigoDelphine->getFirstName();
	echo $trainerDavigoDelphine->getCompany();*/
	$trainerDavigoDelphine->addToList($tabTrainers);

	$trainerPezetPierre = new Trainers('PEZET', 'Pierre', 'Gaido');
	/*echo $trainerPezetPierre->getName();
	echo $trainerPezetPierre->getFirstName();
	echo $trainerPezetPierre->getCompany();*/
	$trainerPezetPierre->addToList($tabTrainers);

	$trainerChevalierThomas = new Trainers('CHEVALIER', 'Thomas', 'Inconnue');
	/*echo $trainerChevalierThomas->getName();
	echo $trainerChevalierThomas->getFirstName();
	echo $trainerChevalierThomas->getCompany();*/
	$trainerChevalierThomas->addToList($tabTrainers);

	$trainerPoncinCindy = new Trainers('PONCIN', 'Cindy', 'Kyü Solutions');
	/*echo $trainerPoncinCindy->getName();
	echo $trainerPoncinCindy->getFirstName();
	echo $trainerPoncinCindy->getCompany();*/
	$trainerPoncinCindy->addToList($tabTrainers);

	//modification d'un élément du tableau
	//$trainerDavigoDelphine->modifyList($tabTrainers, 'a', 'a', 'a');

	//création d'un objet permettant l'affichage du tableau
	/*$listTrainers = new Trainers('', '', '');
	$tabTrainers = $listTrainers->getListTrainers($tabTrainers);*/

	//var_dump($trainers);

	//$tabTrainers = array($trainerDavigoDelphine, $trainerChevalierThomas, $trainerPezetPierre, $trainerPoncinCindy);

	//variable pour l'appel de la liste des formateurs avec .htaccess
	$list = "trainersList";

	//besoin de cet includes sans .htaccess
	//includes("views/trainersList.php");
