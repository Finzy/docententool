<?php

// if there is no cookie we redirect the user to the login page
if (!isset($_COOKIE['loggedin'])) {
	header("location:?action=login");
}


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="profile">
		<h1>welkom <?php echo $ses_user; ?></h1>
		<div id="right">
			<h2></h2>
			<a href="?action=newform"><button>New form</button></a><br />
			<a href="?action=logout"><button>Logout</button></a>
		</div>
	</div>
</body>
</html>