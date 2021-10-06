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
	public function getName()
	{
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
	 * Method addToList fill in the table the trainers
	 * @param $tabTrainers
	 */
	public function addToList(&$tabTrainers) {
		array_push($tabTrainers, $this);
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