<?php

$Date = strtotime(' now ');

<<<<<<< HEAD
$name = "root";
$passworddb = "neirlxsb";
=======
$name = "docent";
$passworddb = "docent";
>>>>>>> 1f95f3e8d05a4d54e9e1c25d2a104594103f1db3
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $name, $passworddb) or die ("Could not connect or find database");

// to connect to the database
$select =  mysql_select_db("docententool");

$pincode = $_POST['Formpin'];

$query = "SELECT * FROM codes WHERE `Formpin` = '$pincode' LIMIT 1";


	// recieve the result to put it in a variable
	$resultB = mysql_query($query);

	$result2 = mysql_fetch_assoc($resultB);

	// check how many results we get back
	$count = mysql_num_rows($resultB);

	// checking if the right data is selected
	if ($count==1 && $Date < $result2['date']) {
		?>
		<h2 id="answerOutput"><?php echo $result2['questions']; ?></h2>

		<?php
		include('views/answer.html');
	} else {
		?>
			<script>
				alert('Incorrect code or expired');
			</script>
		<?php
	}



?>


