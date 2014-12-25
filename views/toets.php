<?php
include("../inc/config.php");
include("../inc/open.php");
 

// If this thingy is zet
if (isset($_POST['submit']))
{
	if (isset($_POST['vraag'])) {
                // We assign a value to the variable
        $vraag = $_POST['vraag'];
 
        // Inser the query
        $insert = $mysqli->query("INSERT INTO `vragen` (`id`,  `vraag`, `currentStamp`) VALUES (null, '$vraag', null)");

	}else{
		          
	}
}

function Formpin($length = 6) {
    $validCharacters = "234567890abcdefghijklmnpqrstuxyvwzABCDEFGHIJKLMNPQRSTUXYVWZ";
    $validCharNumber = strlen($validCharacters);
 
    $result = "";
 
    for ($i = 0; $i < $length; $i++) {
        $index = mt_rand(0, $validCharNumber - 1);
        $result .= $validCharacters[$index];
    }
 
    return $result;
}

$Frmopin = Formpin();
echo $Frmopin;

$Date = strtotime(' + 1 week');

$query = "INSERT INTO codes (Formpin, date, questions) VALUES ('".$Frmopin."', '".$Date."', '".$_POST['vraag']."')";


	// recieve the rsult to put it in a variable
	$resultA = mysql_query($query);
 
$result = $mysqli->query("SELECT vraag FROM vragen");

?>

<form method="POST">
	<input type="text" name="vraag">
	<input type="submit" name="submit">
</form>




<!--     results from database   -->
<div id="comment_result">
	<?php

	//Haalt 'vraag' uit de DB
 while ($row = $result->fetch_assoc())
{
echo $row['vraag'] . "<br><br><br>";
echo $Frmopin;
}

?>

