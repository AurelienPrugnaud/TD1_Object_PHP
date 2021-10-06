<?php
	require_once("models/SubjectModel.php");

	//tableau qui contiendras toutes les matières ajouter avec la method addToList
	$tabSubjects = array();

	$subjectAlgorithm = new Subjects('Algorithmique', '20', 'Cours d\'algorithmique');
	/*echo $subjectAlgorithm->getName();
	echo $subjectAlgorithm->getDuration();
	echo $subjectAlgorithm->getDescription();*/
	$subjectAlgorithm->addToList($tabSubjects);

	$subjectEnglish = new Subjects('Anglais', '30', 'Cours d\'anglais');
	/*echo $subjectEnglish->getName();
	echo $subjectEnglish->getDuration();
	echo $subjectEnglish->getDescription();*/
	$subjectEnglish->addToList($tabSubjects);

	$subjectAngular = new Subjects('Angular', '120', 'Cours d\'angular');
	/*echo $subjectAngular->getName();
	echo $subjectAngular->getDuration();
	echo $subjectAngular->getDescription();*/
	$subjectAngular->addToList($tabSubjects);

	$subjectDataBase = new Subjects('BDD', '30', 'Cour sur les BDD');
	/*echo $subjectDataBase->getName();
	echo $subjectDataBase->getDuration();
	echo $subjectDataBase->getDescription();*/
	$subjectDataBase->addToList($tabSubjects);

	$subjectServerDeployment = new Subjects('Déploiement serveur', '20', 'Cour sur le déploiement serveur');
	/*echo $subjectServerDeployment->getName();
	echo $subjectServerDeployment->getDuration();
	echo $subjectServerDeployment->getDescription();*/
	$subjectServerDeployment->addToList($tabSubjects);

	$subjectJavascript = new Subjects('Javascript', '60', 'Cour de Javascript');
	/*echo $subjectJavascript->getName();
	echo $subjectJavascript->getDuration();
	echo $subjectJavascript->getDescription();*/
	$subjectJavascript->addToList($tabSubjects);

	$subjectLinux = new Subjects('Linux', '30', 'Cour sur Linux');
	/*echo $subjectLinux->getName();
	echo $subjectLinux->getDuration();
	echo $subjectLinux->getDescription();*/
	$subjectLinux->addToList($tabSubjects);

	$subjectMockUp = new Subjects('Maquettage', '21', 'Cour sur le maquettage');
	/*echo $subjectMockUp->getName();
	echo $subjectMockUp->getDuration();
	echo $subjectMockUp->getDescription();*/
	$subjectMockUp->addToList($tabSubjects);

	$subjectPhp = new Subjects('PHP', '60', 'Cour de PHP');
	/*echo $subjectPhp->getName();
	echo $subjectPhp->getDuration();
	echo $subjectPhp->getDescription();*/
	$subjectPhp->addToList($tabSubjects);

	$subjectScrum = new Subjects('SCRUM', '30', 'Cour sur SCRUM');
	/*echo $subjectScrum->getName();
	echo $subjectScrum->getDuration();
	echo $subjectScrum->getDescription();*/
	$subjectScrum->addToList($tabSubjects);

	$subjectStaticWeb = new Subjects('Web Statique', '60', 'Cour de web statique');
	/*echo $subjectStaticWeb->getName();
	echo $subjectStaticWeb->getDuration();
	echo $subjectStaticWeb->getDescription();*/
	$subjectStaticWeb->addToList($tabSubjects);

	//Exemple de setter
	/*$subjectStaticWeb->setName("WEB STATIQUE");
	echo $subjectStaticWeb->getName();*/

	//modification d'un élément du tableau
	//$subjectStaticWeb->modifyList($tabSubjects, 'a', 'a', '1');

	//création d'un objet permettant l'affichage du tableau
	/*$listSubjects = new Subjects('', '', '');
	$tabSubjects = $listSubjects->getListSubjects($tabSubjects);*/

	//var_dump($subjects);

	//tableau qui contient toutes les matières sans utiliser une method
	//$tabSubjects = array($subjectAlgorithm, $subjectAngular, $subjectDataBase, $subjectEnglish, $subjectJavascript, $subjectLinux, $subjectMockUp, $subjectScrum, $subjectServerDeployment, $subjectStaticWeb, $subjectPhp);


	//variable pour l'appel de la liste des étudiants avec .htaccess
	$list = "subjectsList";

	//besoin de cet includes sans .htaccess
	//includes("views/subjectsList.php");



