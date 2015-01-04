<?php

// Login data to connect to the database
$name = "root";
$passworddb = "hc4l";
$hostname = "localhost";

// query to connect to the host
$dbhandle = mysql_connect($hostname, $name, $passworddb) or die ("Could not connect or find database");

// to connect to the database
$select =  mysql_select_db("toetstool");

if (isset($_POST['submit'])) {
	//error_reporting(0);

	// getting the details from the form
	$username = $_POST['username'];
	$password = $_POST['password'];

	// to prefent that hackers can use a mysql injection
	$username = stripslashes($username);
	$password = stripslashes($password);

	// the query that will return the result en looks if the data is right
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

	// recieve the rsult to put it in a variable
	$result = mysql_query($query);

	// to load te profile

	$result2 = mysql_fetch_assoc($result);

	$id = $result2['id'];

	// check how many results we get back
	$count = mysql_num_rows($result);

	// checking if the right data is selected
	if ($count==1) {
		// a cooking to prefent hackers can login without account or the acount logs out after a certain time
		$seconds = 300 + time();
		$_SESSION['username'] = $username;
		setcookie(loggedin, date("F jS - g:i a"), $seconds);
		// to select witch page you want to load
		header("location:?action=profile&id=1");
	} else {
		?>
			<script>
				alert('Incorrect username or password');
			</script>
		<?php
	}
}

?>