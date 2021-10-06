<?php

/**
 *
 */
class Learners {
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
	private $dateOfBirth;

	/**
	 * @param $name
	 * @param $firstName
	 * @param $dateOfBirth
	 */
	public function __construct($name, $firstName, $dateOfBirth) {
		$this->name = $name;
		$this->firstName = $firstName;
		$this->dateOfBirth = $dateOfBirth;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name): void {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * @param string $firstName
	 */
	public function setFirstName($firstName): void {
		$this->firstName = $firstName;
	}

	/**
	 * @return string
	 */
	public function getDateOfBirth() {
		return $this->dateOfBirth;
	}

	/**
	 * @param string $dateOfBirth
	 */
	public function setDateOfBirth($dateOfBirth): void {
		$this->dateOfBirth = $dateOfBirth;
	}

	/**
	 * Method addToList fill in the table the learners
	 * @param $tabLearners
	 */
	function addToList(&$tabLearners) {
		array_push($tabLearners, $this);
	}



	/**
	 * Method allowing all learners to be included in the Learners class
	 *
	 * @return array
	 */
/*	public function getListLearners() {
			$tabLearners = array(
				array("name" => "PRUGNAUD", "firstName" => "Aurélien", "dateOfBirth" => "1992"),
				array("name" => "BEN SALEM", "firstName" => "Bassam", "dateOfBirth" => "1990"),
				array("name" => "ROSSI", "firstName" => "Christophe", "dateOfBirth" => "1980"),
				array("name" => "PRÊTE", "firstName" => "Doryan", "dateOfBirth" => "1991"),
				array("name" => "PETIT", "firstName" => "Elie", "dateOfBirth" => "1985"),
				array("name" => "CHASTEL", "firstName" => "François", "dateOfBirth" => "1995"),
				array("name" => "MILLET", "firstName" => "Guillaume", "dateOfBirth" => "1992"),
				array("name" => "DE VALMONT", "firstName" => "Louis", "dateOfBirth" => "1990"),
				array("name" => "RODRIGUEZ", "firstName" => "Maricel", "dateOfBirth" => "1989"),
				array("name" => "ROMEU", "firstName" => "Marine", "dateOfBirth" => "1992"),
			);

			return $tabLearners;
		}*/
	}