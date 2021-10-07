<?php
	require_once("models/SubjectModel.php");

	//On répète car nous n'avons pas de BDD
	$tabSubjects = array();

	$subjectAlgorithm = new Subjects('Algorithmique', '20', 'Cours d\'algorithmique');
	$subjectAlgorithm->addToList($tabSubjects);

	$subjectEnglish = new Subjects('Anglais', '30', 'Cours d\'anglais');
	$subjectEnglish->addToList($tabSubjects);

	$subjectAngular = new Subjects('Angular', '120', 'Cours d\'angular');
	$subjectAngular->addToList($tabSubjects);

	$subjectDataBase = new Subjects('BDD', '30', 'Cour sur les BDD');
	$subjectDataBase->addToList($tabSubjects);

	$subjectServerDeployment = new Subjects('Déploiement serveur', '20', 'Cour sur le déploiement serveur');
	$subjectServerDeployment->addToList($tabSubjects);

	$subjectJavascript = new Subjects('Javascript', '60', 'Cour de Javascript');
	$subjectJavascript->addToList($tabSubjects);

	$subjectLinux = new Subjects('Linux', '30', 'Cour sur Linux');
	$subjectLinux->addToList($tabSubjects);

	$subjectMockUp = new Subjects('Maquettage', '21', 'Cour sur le maquettage');
	$subjectMockUp->addToList($tabSubjects);

	$subjectPhp = new Subjects('PHP', '60', 'Cour de PHP');
	$subjectPhp->addToList($tabSubjects);

	$subjectScrum = new Subjects('SCRUM', '30', 'Cour sur SCRUM');
	$subjectScrum->addToList($tabSubjects);

	$subjectStaticWeb = new Subjects('Web Statique', '60', 'Cour de web statique');
	$subjectStaticWeb->addToList($tabSubjects);

	$subjectToDelete = new Subjects('', '', '');
	$subjectToDelete->deleteSubjectFromIndex($tabSubjects, $tabParamUrl[2]);

	var_dump($tabSubjects);

	$list = "subjectDelete";
