<?php
	require_once("models/PromotionModel.php");

	$tabPromotions = array();

	$promotionDwwmR4 = new Promotions('DWWM_R4_CF', '02/06/2021', '21/03/2022', 16);
	$promotionDwwmR4->addToList($tabPromotions);

	$promotionDwwmPe1 = new Promotions('DWWM_R2_FOAD', '22/03/2021', '03/01/2022', 14);
	$promotionDwwmPe1->addToList($tabPromotions);


	$promotionCdaR19 = new Promotions('CDA_R19_VILL', '28/04/2021', '02/01/2022', 10);
	$promotionCdaR19->addToList($tabPromotions);

	$promotionCdaR2 = new Promotions('CDA_R2_CF', '18/08/2021', '06/08/2022', 18);
	$promotionCdaR2->addToList($tabPromotions);

	$promotionToDelete = new Promotions('','','','');
	$promotionToDelete->deletePromotionFromIndex($tabPromotions, $tabParamUrl[2]);

	var_dump($tabPromotions);


	$list = 'promotionDelete';