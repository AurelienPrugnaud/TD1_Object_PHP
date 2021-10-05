<?php
	require_once("models/PromotionModel.php");

	$promotionDwwmR4 = new Promotions('DWWM_R4_CF', '02/06/2021', '21/03/2022', 16);
	/*echo $promotionDwwmR4->getName();
	echo $promotionDwwmR4->getStartDate();
	echo $promotionDwwmR4->getEndDate();
	echo $promotionDwwmR4->getNumberOfLearners();*/

	$promotionDwwmPe1 = new Promotions('DWWM_R2_FOAD', '22/03/2021', '03/01/2022', 14);
	/*echo $promotionDwwmPe1->getName();
	echo $promotionDwwmPe1->getStartDate();
	echo $promotionDwwmPe1->getEndDate();
	echo $promotionDwwmPe1->getNumberOfLearners();*/

	$promotionCdaR19 = new Promotions('CDA_R19_VILL', '28/04/2021', '02/01/2022', 10);
	/*echo $promotionCdaR19->getName();
	echo $promotionCdaR19->getStartDate();
	echo $promotionCdaR19->getEndDate();
	echo $promotionCdaR19->getNumberOfLearners();*/

	$promotionCdaR2 = new Promotions('CDA_R2_CF', '18/08/2021', '06/08/2022', 18);
	/*echo $promotionCdaR2->getName();
	echo $promotionCdaR2->getStartDate();
	echo $promotionCdaR2->getEndDate();
	echo $promotionCdaR2->getNumberOfLearners();*/

	//var_dump($promotions);

	$tabPromotions = array($promotionCdaR2, $promotionCdaR19, $promotionDwwmPe1, $promotionDwwmR4);


	include("views/promotionsList.php");
