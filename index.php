<?php

// getting info from db
include('includes/config.inc.php');
// db connect
include('includes/database.inc.php');

include('includes/bootstrap.inc.php');

include('views/head.php');

include('includes/action.php');

switch ($action) {

	case 'home':
			include('views/mainpage.php');
		break;
	case 'docent':
			include('views/docent.php');
		break;
	case 'leerling':
			include('views/leerling.php');
		break;  
	case 'login':
			include('logic/login.php');
			include('views/login.php');
		break;
	case 'profile':
			include('logic/getprofile.php');
			include('views/profile.php');
		break;
	case 'newform':
			include('logic/getquestions.php');
			include('views/newform.php');
		break;
	case 'logout':
			include('logic/logout.php');
		break;
	case 'results':
			include('views/results.php');
		break;
	case 'form';
		error_reporting(0);
		include('logic/form.php');
		include('views/form.php');
		break;
	case 'checkForm':
		include('logic/checkForm.php');
		break;
	default:
		include('views/mainpage.php');
		break;
	}
