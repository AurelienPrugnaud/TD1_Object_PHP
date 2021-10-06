<?php

/**
 *
 */
class Trainers {
	/**
	 * @var
	 */
	private $name;
	/**
	 * @var
	 */
	private $firstName;
	/**
	 * @var
	 */
	private $company;

	/**
	 * @param $name
	 * @param $firstName
	 * @param $company
	 */
	public function __construct($name, $firstName, $company){
		$this->name = $name;
		$this->firstName = $firstName;
		$this->company = $company;
	}

	/**
	 * @return mixed
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
	 * @return mixed
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * @param mixed $firstName
	 */
	public function setFirstName($firstName): void {
		$this->firstName = $firstName;
	}

	/**
	 * @return mixed
	 */
	public function getCompany() {
		return $this->company;
	}

	/**
	 * @param mixed $company
	 */
	public function setCompany($company): void {
		$this->company = $company;
	}

	/**
	 * Method getListTrainers display the table
	 * @param $tabTrainers
	 * @return mixed
	 */
	public function getListTrainers($tabTrainers) {
		return $tabTrainers;
	}

	/**
	 * Method addToList fill in the table the trainers
	 * @param $tabTrainers
	 */
	public function addToList(&$tabTrainers) {
		array_push($tabTrainers, $this);
	}

	/**
	 * Method deleteToList delete the row in the table
	 * @param $tabTrainers
	 */
	public function deleteToList(&$tabTrainers) {
		$index = array_search($this, $tabTrainers);
		unset($tabTrainers[$index]);
	}

	/**
	 * Method modifyList allow to modify the table
	 * @param $tabTrainers
	 * @param $name
	 * @param $firstName
	 * @param $company
	 */
	public function modifyList($tabTrainers, $name, $firstName, $company) {
		$index = array_search($this, $tabTrainers);
		if(!empty($name)):
			$tabTrainers[$index]->name = $name;
		endif;
		if (!empty($firstName)):
			$tabTrainers[$index]->firstName = $firstName;
		endif;
		if (!empty($company)):
			$tabTrainers[$index]->dateOfBirth = $company;
		endif;
	}



	/**
	 * Method allowing all trainers to be included in the Trainers class
	 * @return array
	 */
/*	public function getListTrainers() {
			$tabTrainers = array(
				array("name" => "DAVIGO", "firstName" => "Delphine", "company" => "Inconnue"),
				array("name" => "PEZET", "firstName" => "Pierre", "company" => "Gaido"),
				array("name" => "CHEVALIER", "firstName" => "Thomas", "company" => "Inconnue"),
				array("name" => "PONCIN", "firstName" => "Cindy", "company" => "Kyü Solutions"),
			);

			return $tabTrainers;
		}*/
	}