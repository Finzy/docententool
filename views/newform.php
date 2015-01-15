<?php

// if there is no cookie we redirect the user to the login page
if (!isset($_COOKIE['loggedin'])) {
	header("location:?action=login");
}


?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<form action="?action=form" method="POST">
	<div id="newform">
		<h1>Nieuw formulier</h1>
		<div id="right">
				<div id="buildyourform">
					<input class="field" type="text" name="question" placeholder="vraag"/><br />
				</div>
				<div id="newformButtons">
			<a href="#"><button class="goback" type="submit">Maak formulier</button></a><br />
			</form>
			<button onclick="window.history.go(-1); return false;">Ga terug</button></a>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/addfield.js"></script>
</body>
</html>