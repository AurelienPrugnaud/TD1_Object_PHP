<?php
	//Manière de faire avec un fichier .htaccess
	$tabParamUrl = explode('/', $_SERVER['REQUEST_URI'] );
	//début du tableau à l'index 1.
	if(!empty($tabParamUrl[1])):
		switch($tabParamUrl[1]):
			case 'subjectsList':
				include('controllers/subjectController.php');
				break;
			case 'subjectDelete':
				include('controllers/subjectDeleteController.php');
				break;
			case 'subjectModify':
				include('controllers/subjectModifyController.php');
				break;
			case 'trainersList':
				include('controllers/trainerController.php');
				break;
			case 'promotionsList':
				include('controllers/promotionController.php');
				break;
			case 'learnersList':
				include('controllers/learnerController.php');
				break;
			default:
				include('controllers/default.php');
				break;
		endswitch;
	endif;
	include("index.php");

//manière de faire sans .htacess
/*	if(!empty($_GET['page'])):
		switch($_GET['page']):
			case 'subjectsList':
				includes('controllers/subjectController.php');
				break;
			case 'trainersList':
				includes('controllers/trainerController.php');
				break;
			case 'promotionsList':
				includes('controllers/promotionController.php');
				break;
			case 'learnersList':
				includes('controllers/learnerController.php');
				break;
			default:
				includes('views/errorPageNotFoundView.php');
				break;
		endswitch;
	endif;*/

/*    if(!empty($_GET['page']) && $_GET['page']=='subjectsList'):
		includes("controllers/subjectController.php");
	endif;

	if(!empty($_GET['page']) && $_GET['page']=='trainersList'):
		includes("controllers/trainerController.php");
	endif;

	if(!empty($_GET['page']) && $_GET['page']=='promotionsList'):
		includes("controllers/promotionController.php");
	endif;

	if(!empty($_GET['page']) && $_GET['page']=='learnersList'):
		includes("controllers/learnerController.php");
	endif;*/
