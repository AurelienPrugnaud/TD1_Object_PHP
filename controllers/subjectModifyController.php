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
	//fin de la répétition

	$subjectToModify = new Subjects("", "", "");

	if(!empty($_POST) && !empty($_POST['validate']) && isset($_POST['index']) && $_POST['index']>=0):
		$subjectToModify->modifySubjectByIndex($tabSubjects, $_POST['index'], $_POST['name'], $_POST['duration'], $_POST['description']);
		//$tabParamUrl[2] = $_POST['index'];
	endif;

	if(isset($tabParamUrl) && isset($tabParamUrl[2]) && $tabParamUrl[2]>=0):
		$subjectToModify = $subjectToModify->getSubjectByIndex($tabSubjects, $tabSubjects['index']);
	endif;

	$list = "subjectModify";
