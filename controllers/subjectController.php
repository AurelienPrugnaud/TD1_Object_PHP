<?php
	require_once("models/SubjectModel.php");

	$subjectAlgorithm = new Subjects('Algorithmique', '20', 'Cours d\'algorithmique');
	/*echo $subjectAlgorithm->getName();
	echo $subjectAlgorithm->getDuration();
	echo $subjectAlgorithm->getDescription();*/

	$subjectEnglish = new Subjects('Anglais', '30', 'Cours d\'anglais');
	/*echo $subjectEnglish->getName();
	echo $subjectEnglish->getDuration();
	echo $subjectEnglish->getDescription();*/

	$subjectAngular = new Subjects('Angular', '120', 'Cours d\'angular');
	/*echo $subjectAngular->getName();
	echo $subjectAngular->getDuration();
	echo $subjectAngular->getDescription();*/

	$subjectDataBase = new Subjects('BDD', '30', 'Cour sur les BDD');
	/*echo $subjectDataBase->getName();
	echo $subjectDataBase->getDuration();
	echo $subjectDataBase->getDescription();*/

	$subjectServerDeployment = new Subjects('Déploiement serveur', '20', 'Cour sur le déploiement serveur');
	/*echo $subjectServerDeployment->getName();
	echo $subjectServerDeployment->getDuration();
	echo $subjectServerDeployment->getDescription();*/

	$subjectJavascript = new Subjects('Javascript', '60', 'Cour de Javascript');
	/*echo $subjectJavascript->getName();
	echo $subjectJavascript->getDuration();
	echo $subjectJavascript->getDescription();*/

	$subjectLinux = new Subjects('Linux', '30', 'Cour sur Linux');
	/*echo $subjectLinux->getName();
	echo $subjectLinux->getDuration();
	echo $subjectLinux->getDescription();*/

	$subjectMockUp = new Subjects('Maquettage', '21', 'Cour sur le maquettage');
	/*echo $subjectMockUp->getName();
	echo $subjectMockUp->getDuration();
	echo $subjectMockUp->getDescription();*/

	$subjectPhp = new Subjects('PHP', '60', 'Cour de PHP');
	/*echo $subjectPhp->getName();
	echo $subjectPhp->getDuration();
	echo $subjectPhp->getDescription();*/

	$subjectScrum = new Subjects('SCRUM', '30', 'Cour sur SCRUM');
	/*echo $subjectScrum->getName();
	echo $subjectScrum->getDuration();
	echo $subjectScrum->getDescription();*/

	$subjectStaticWeb = new Subjects('Web Statique', '60', 'Cour de web statique');
	/*echo $subjectStaticWeb->getName();
	echo $subjectStaticWeb->getDuration();
	echo $subjectStaticWeb->getDescription();*/

	//Exemple de setter
	/*$subjectStaticWeb->setName("WEB STATIQUE");
	echo $subjectStaticWeb->getName();*/

	//var_dump($subjects);

	$tabSubjects = array($subjectAlgorithm, $subjectAngular, $subjectDataBase, $subjectEnglish, $subjectJavascript, $subjectLinux, $subjectMockUp, $subjectScrum, $subjectServerDeployment, $subjectStaticWeb, $subjectPhp);

	//variable pour l'appel de la liste des étudiants avec .htaccess
	$list = "subjectsList";

	//besoin de cet include sans .htaccess
	//include("views/subjectsList.php");



