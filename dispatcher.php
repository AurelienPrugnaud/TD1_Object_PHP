<?php
	//Manière de faire avec un fichier .htaccess
/*	if(!empty($_SERVER['REQUEST_URI'])):
		switch($_SERVER['REQUEST_URI']):
			case '/subjectsList':
				include('controllers/subjectController.php');
				break;
			case '/trainersList':
				include('controllers/trainerController.php');
				break;
			case '/promotionsList':
				include('controllers/promotionController.php');
				break;
			case '/learnersList':
				include('controllers/learnerController.php');
				break;
			default:
				include('views/errorPageNotFound.php');
				break;
		endswitch;
	endif;*/
//manière de faire sans .htacess
	if(!empty($_GET['page'])):
		switch($_GET['page']):
			case 'subjectsList':
				include('controllers/subjectController.php');
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
				include('views/errorPageNotFound.php');
				break;
		endswitch;
	endif;

/*    if(!empty($_GET['page']) && $_GET['page']=='subjectsList'):
		include("controllers/subjectController.php");
	endif;

	if(!empty($_GET['page']) && $_GET['page']=='trainersList'):
		include("controllers/trainerController.php");
	endif;

	if(!empty($_GET['page']) && $_GET['page']=='promotionsList'):
		include("controllers/promotionController.php");
	endif;

	if(!empty($_GET['page']) && $_GET['page']=='learnersList'):
		include("controllers/learnerController.php");
	endif;*/
