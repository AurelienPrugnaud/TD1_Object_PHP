<?php
	require_once("models/LearnerModel.php");

	$learnerPrugnaudAurelien = new Learners('PRUGNAUD', 'Aurélien', '1992');
	/*echo $learnerPrugnaudAurelien->getName();
	echo $learnerPrugnaudAurelien->getFirstName();
	echo $learnerPrugnaudAurelien->getDateOfBirth();*/

	$learnerBenSalemBassam = new Learners('BEN SALEM', 'Bassam', '1990');
	/*echo $learnerBenSalemBassam->getName();
	echo $learnerBenSalemBassam->getFirstName();
	echo $learnerBenSalemBassam->getDateOfBirth();*/

	$learnerRossiChristophe = new Learners('ROSSI', 'Christophe', '1980');
	/*echo $learnerRossiChristophe->getName();
	echo $learnerRossiChristophe->getFirstName();
	echo $learnerRossiChristophe->getDateOfBirth();*/

	$learnerPreteDoryan = new Learners('PRÊTE', 'Doryan', '1991');
	/*echo $learnerPreteDoryan->getName();
	echo $learnerPreteDoryan->getFirstName();
	echo $learnerPreteDoryan->getDateOfBirth();*/

	$learnerPetitElie = new Learners('PETIT', 'Elie', '1985');
	/*echo $learnerPetitElie->getName();
	echo $learnerPetitElie->getFirstName();
	echo $learnerPetitElie->getDateOfBirth();*/

	$learnerChastelFrancois = new Learners('CHASTEL', 'François', '1995');
	/*echo $learnerChastelFrancois->getName();
	echo $learnerChastelFrancois->getFirstName();
	echo $learnerChastelFrancois->getDateOfBirth();*/

	$learnerMilletGuillaume = new Learners('MILLET', 'Guillaume', '1992');
	/*echo $learnerMilletGuillaume->getName();
	echo $learnerMilletGuillaume->getFirstName();
	echo $learnerMilletGuillaume->getDateOfBirth();*/

	$learnerDeValmontLouis = new Learners('DE VALMONT', 'Louis', '1990');
	/*echo $learnerDeValmontLouis->getName();
	echo $learnerDeValmontLouis->getFirstName();
	echo $learnerDeValmontLouis->getDateOfBirth();*/

	$learnerRodriguezMaricel = new Learners('RODRIGUEZ', 'Maricel', '1989');
	/*echo $learnerRodriguezMaricel->getName();
	echo $learnerRodriguezMaricel->getFirstName();
	echo $learnerRodriguezMaricel->getDateOfBirth();*/

	$learnerRomeuMarine = new Learners('ROMEU', 'Marine', '1992');
	/*echo $learnerRomeuMarine->getName();
	echo $learnerRomeuMarine->getFirstName();
	echo $learnerRomeuMarine->getDateOfBirth();*/

	$tabLearners = array($learnerBenSalemBassam, $learnerChastelFrancois, $learnerDeValmontLouis, $learnerMilletGuillaume, $learnerPetitElie, $learnerPreteDoryan, $learnerPrugnaudAurelien, $learnerRodriguezMaricel, $learnerRomeuMarine, $learnerRossiChristophe);

	//variable pour l'appel de la liste des apprenants avec .htaccess
	$list = "learnersList";

	//var_dump($learners);

	//besoin de cet include sans .htaccess
	//include("views/learnersList.php");

