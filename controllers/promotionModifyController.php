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

	$promotionToModify = new Promotions('','','','');

	if(!empty($_POST) && !empty($_POST['validate']) && isset($_POST['index']) && $_POST['index']>=0):
		$promotionToModify->modifyPromotionByIndex($tabPromotions, $_POST['index'], $_POST['name'], $_POST['startDate'], $_POST['endDate'], $_POST['numberOfLearner']);
	endif;

	if(isset($tabParamUrl) && isset($tabParamUrl[2]) && $tabParamUrl[2]>=0):
		$promotionToModify = $promotionToModify->getPromotionByIndex($tabPromotions, $tabPromotions['index']);
	endif;

	$list = 'promotionModify';
