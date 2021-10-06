<?php

/**
 *
 */
class Promotions {
	/**
	 * @var
	 */
	private $name;
	/**
	 * @var
	 */
	private $startDate;
	/**
	 * @var
	 */
	private $endDate;
	/**
	 * @var
	 */
	private $numberOfLearners;

	/**
	 * @param $name
	 * @param $startDate
	 * @param $endDate
	 * @param $numberOfLearners
	 */
	public function __construct($name, $startDate, $endDate, $numberOfLearners) {
		$this->name = $name;
		$this->startDate = $startDate;
		$this->endDate = $endDate;
		$this->numberOfLearners = $numberOfLearners;
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
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * @param string $startDate
	 */
	public function setStartDate($startDate): void {
		$this->startDate = $startDate;
	}

	/**
	 * @return string
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * @param string $endDate
	 */
	public function setEndDate($endDate): void {
		$this->endDate = $endDate;
	}

	/**
	 * @return numeric
	 */
	public function getNumberOfLearners() {
		return $this->numberOfLearners;
	}

	/**
	 * @param numeric $numberOfLearners
	 */
	public function setNumberOfLearners($numberOfLearners): void {
		$this->numberOfLearners = $numberOfLearners;
	}

	/**
	 * Method getListPromotions display the table
	 * @param $tabPromotions
	 * @return mixed
	 */
	public function getListPromotions($tabPromotions) {
		return $tabPromotions;
	}

	/**
	 * Method addToList fill in the table the promotions
	 * @param $tabPromotions
	 */
	public function addToList(&$tabPromotions) {
		array_push($tabPromotions, $this);
	}

	/**
	 * Method deleteToList delete the row in the table
	 * @param $tabPromotions
	 */
	public function deleteToList(&$tabPromotions) {
		$index = array_search($this, $tabPromotions);
		unset($tabPromotions[$index]);
	}


	/**
	 * Method modifyList allows to modify the table
	 * @param $tabPromotions
	 * @param $name
	 * @param $startDate
	 * @param $endDate
	 * @param $numberOfLearner
	 */
	public function modifyList($tabPromotions, $name, $startDate, $endDate, $numberOfLearner) {
		$index = array_search($this, $tabPromotions);
		if(!empty($name)):
			$tabPromotions[$index]->name = $name;
		endif;
		if (!empty($startDate)):
			$tabPromotions[$index]->firstName = $startDate;
		endif;
		if (!empty($endDate)):
			$tabPromotions[$index]->dateOfBirth = $endDate;
		endif;
		if (!empty($numberOfLearner)):
			$tabPromotions[$index]->dateOfBirth = $numberOfLearner;
		endif;
	}



	/**
	 * Method allowing all promotions to be included in the Promotions class
	 * @return array
	 */
	/*public function getListPromotions() {
			$tabPromotions = array(
				array("name" => "DWWM_R4_CF", "startDate" => "02/06/2021", "endDate" => "21/03/2022", "numberOfLearners" => 16),
				array("name" => "DWWM_R2_FOAD", "startDate" => "22/03/2021", "endDate" => "03/01/2022", "numberOfLearners" => 14),
				array("name" => "DWWM_PE1_CF", "startDate" => "15/12/2020", "endDate" => "02/08/2021", "numberOfLearners" => 12),
				array("name" => "CDA_R19_VILL", "startDate" => "28/04/2021", "endDate" => "02/01/2022", "numberOfLearners" => 10),
				array("name" => "CDA_R2_CF", "startDate" => "18/08/2021", "endDate" => "06/08/2022", "numberOfLearners" => 18),
			);
			return $tabPromotions;
		}*/
	}