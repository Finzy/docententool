<?php

$Date = strtotime(' now ');

$name = "root";
$passworddb = "neirlxsb";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $name, $passworddb) or die ("Could not connect or find database");

// to connect to the database
$select =  mysql_select_db("toetstool");

$pincode = $_POST['Formpin'];

$query = "SELECT * FROM codes WHERE `Formpin` = '$pincode' LIMIT 1";


	// recieve the result to put it in a variable
	$resultB = mysql_query($query);

	$result2 = mysql_fetch_assoc($resultB);

	// check how many results we get back
	$count = mysql_num_rows($resultB);

	// checking if the right data is selected
	if ($count==1 && $Date < $result2['date']) {

		echo $result2['questions'];
	} else {
		?>
			<script>
				alert('Incorrect code or expired');
			</script>
		<?php
	}

?>