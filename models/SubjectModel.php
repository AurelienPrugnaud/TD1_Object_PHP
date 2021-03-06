<?php

/**
 *
 */
class Subjects {
	/**
	 * @var
	 */
	private $name;
	/**
	 * @var
	 */
	private $duration;
	/**
	 * @var
	 */
	private $description;

	/**
	 * @param $name
	 * @param $duration
	 * @param $description
	 */
	public function __construct($name, $duration, $description) {
		$this->name = $name;
		$this->duration = $duration;
		$this->description = $description;
	}

	/**
	 * Method getName() get the name
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name): void {
		$this->name = $name;
	}

	/**
	 * @param mixed $duration
	 */
	public function setDuration($duration): void {
		$this->duration = $duration;
	}

	/**
	 * @param mixed $description
	 */
	public function setDescription($description): void {
		$this->description = $description;
	}

	/**
	 * Method getDuration() get the duration
	 * @return string
	 */
	public function getDuration() {
		return $this->duration;
	}

	/**
	 * Method getDescription() get the description
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}


	/**
	 * @param $tabSubjects
	 * @return mixed
	 */
	public function getListSubjects($tabSubjects) {
		return $tabSubjects;
	}

	/**
	 * @param $tabSubjects
	 * @param $index
	 * @return mixed
	 */
	public function getSubjectByIndex($tabSubjects, $index) {
		return $tabSubjects[$index];
	}

	/**
	 * Method addToList fill in the table the subjects
	 * @param $tabSubjects
	 */
	public function addToList(&$tabSubjects) {
		//Utilisation du "&" pour récupérer la valeur modifier
		array_push($tabSubjects, $this);
		//si pas de "&" dans les paramêtres utilisation de mettre un return
		//return $tabSubjects;
	}

	/**
	 * Method deleteToList delete the row in the table
	 * @param $tabSubjects
	 */
	public function deleteToList(&$tabSubjects) {
		$index = array_search($this, $tabSubjects);
		unset($tabSubjects[$index]);
	}

	/**
	 * @param array $tabSubjects
	 * @param int $index
	 */
	public function deleteSubjectFromIndex(&$tabSubjects, $index){
		unset($tabSubjects[$index]);
	}

	/**
	 * Method modifyList allow to modify the table
	 * @param $tabSubjects
	 * @param $name
	 * @param $duration
	 * @param $description
	 */
	public function modifyList($tabSubjects, $name, $duration, $description) {
		$index = array_search($this, $tabSubjects);
		if(!empty($name)):
			$tabSubjects[$index]->name = $name;
		endif;
		if (!empty($duration)):
			$tabSubjects[$index]->duration = $duration;
		endif;
		if (!empty($description)):
			$tabSubjects[$index]->description = $description;
		endif;
	}

	/**
	 * @param $tabSubjects
	 * @param $index
	 * @param $name
	 * @param $duration
	 * @param $description
	 */
	public function modifySubjectByIndex(&$tabSubjects, $index, $name, $duration, $description) {
		if(!empty($name)):
			$tabSubjects[$index]->name = $name;
		endif;
		if (!empty($duration)):
			$tabSubjects[$index]->duration = $duration;
		endif;
		if (!empty($description)):
			$tabSubjects[$index]->description = $description;
		endif;
	}

	/**
	 * Method allowing all subjects to be included in the Subjects class
	 * @return array
	 */
/*	public function getListSubjects() {
			$tabSubjects = array(
				array("name" => "Algorithmique", "duration" => "8", "description" => "Cour d'algorithmique"),
				array("name" => "Anglais", "duration" => "6", "description" => "Cour d'anglais"),
				array("name" => "Angular", "duration" => "20", "description" => "Cour d'angular"),
				array("name" => "BDD", "duration" => "15", "description" => "Cour sur les BDD"),
				array("name" => "Déploiement serveur", "duration" => "8", "description" => "Cour sur le déploiement serveur"),
				array("name" => "Javascript", "duration" => "15", "description" => "Cour de Javascript"),
				array("name" => "Linux", "duration" => "10", "description" => "Cour sur Linux"),
				array("name" => "Maquettage", "duration" => "8", "description" => "Cour sur le maquettage"),
				array("name" => "PHP", "duration" => "25", "description" => "Cour de PHP"),
				array("name" => "SCRUM", "duration" => "10", "description" => "Cour sur SCRUM"),
				array("name" => "Web Statique", "duration" => "10", "description" => "Cour de web statique"),
				array("name" => "Algorithmique", "duration" => "8", "description" => "Cour d'algorithmique"),
			);

			return $tabSubjects;
		}*/
	}