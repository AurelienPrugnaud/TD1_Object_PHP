<?php
	require_once("models/LearnerModel.php");

	//tableau qui contiendras toutes les matières ajouter avec la method addToList
	$tabLearners = array();

	$learnerPrugnaudAurelien = new Learners('PRUGNAUD', 'Aurélien', '1992');
	/*echo $learnerPrugnaudAurelien->getName();
	echo $learnerPrugnaudAurelien->getFirstName();
	echo $learnerPrugnaudAurelien->getDateOfBirth();*/
	$learnerPrugnaudAurelien->addToList($tabLearners);


	$learnerBenSalemBassam = new Learners('BEN SALEM', 'Bassam', '1990');
	/*echo $learnerBenSalemBassam->getName();
	echo $learnerBenSalemBassam->getFirstName();
	echo $learnerBenSalemBassam->getDateOfBirth();*/
	$learnerBenSalemBassam->addToList($tabLearners);


	$learnerRossiChristophe = new Learners('ROSSI', 'Christophe', '1980');
	/*echo $learnerRossiChristophe->getName();
	echo $learnerRossiChristophe->getFirstName();
	echo $learnerRossiChristophe->getDateOfBirth();*/
	$learnerRossiChristophe->addToList($tabLearners);


	$learnerPreteDoryan = new Learners('PRÊTE', 'Doryan', '1991');
	/*echo $learnerPreteDoryan->getName();
	echo $learnerPreteDoryan->getFirstName();
	echo $learnerPreteDoryan->getDateOfBirth();*/
	$learnerPreteDoryan->addToList($tabLearners);


	$learnerPetitElie = new Learners('PETIT', 'Elie', '1985');
	/*echo $learnerPetitElie->getName();
	echo $learnerPetitElie->getFirstName();
	echo $learnerPetitElie->getDateOfBirth();*/
	$learnerPetitElie->addToList($tabLearners);


	$learnerChastelFrancois = new Learners('CHASTEL', 'François', '1995');
	/*echo $learnerChastelFrancois->getName();
	echo $learnerChastelFrancois->getFirstName();
	echo $learnerChastelFrancois->getDateOfBirth();*/
	$learnerChastelFrancois->addToList($tabLearners);


	$learnerMilletGuillaume = new Learners('MILLET', 'Guillaume', '1992');
	/*echo $learnerMilletGuillaume->getName();
	echo $learnerMilletGuillaume->getFirstName();
	echo $learnerMilletGuillaume->getDateOfBirth();*/
	$learnerMilletGuillaume->addToList($tabLearners);


	$learnerDeValmontLouis = new Learners('DE VALMONT', 'Louis', '1990');
	/*echo $learnerDeValmontLouis->getName();
	echo $learnerDeValmontLouis->getFirstName();
	echo $learnerDeValmontLouis->getDateOfBirth();*/
	$learnerDeValmontLouis->addToList($tabLearners);


	$learnerRodriguezMaricel = new Learners('RODRIGUEZ', 'Maricel', '1989');
	/*echo $learnerRodriguezMaricel->getName();
	echo $learnerRodriguezMaricel->getFirstName();
	echo $learnerRodriguezMaricel->getDateOfBirth();*/
	$learnerRodriguezMaricel->addToList($tabLearners);


	$learnerRomeuMarine = new Learners('ROMEU', 'Marine', '1992');
	/*echo $learnerRomeuMarine->getName();
	echo $learnerRomeuMarine->getFirstName();
	echo $learnerRomeuMarine->getDateOfBirth();*/
	$learnerRomeuMarine->addToList($tabLearners);

	//modification d'un élément du tableau
	//$learnerRomeuMarine->modifyList($tabLearners, 'a', 'a', '1');

	//création d'un objet permettant l'affichage du tableau
	/*$listLearners = new Learners('', '', '');
	$tabLearners = $listLearners->getListLearners($tabLearners);*/


	//$tabLearners = array($learnerBenSalemBassam, $learnerChastelFrancois, $learnerDeValmontLouis, $learnerMilletGuillaume, $learnerPetitElie, $learnerPreteDoryan, $learnerPrugnaudAurelien, $learnerRodriguezMaricel, $learnerRomeuMarine, $learnerRossiChristophe);

	//variable pour l'appel de la liste des apprenants avec .htaccess
	$list = "learnersList";

	//var_dump($learners);

	//besoin de cet includes sans .htaccess
	//includes("views/learnersList.php");

