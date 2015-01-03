<?php
//echo aangevinkte vraag
echo $_POST['question'] . "<br>";

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

$name = "root";
$passworddb = "neirlxsb";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $name, $passworddb) or die ("Could not connect or find database");

// to connect to the database
$select =  mysql_select_db("toetstool");

$query = "INSERT INTO codes (Formpin, date, questions) VALUES ('".$Frmopin."', '".$Date."', '".$_POST['question']."')";


	// recieve the rsult to put it in a variable
	$resultA = mysql_query($query);


?>