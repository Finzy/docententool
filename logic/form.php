
<!-- vraag output html -->

<div id="questionOutput"> 
<?php echo $_POST['question']; ?>  
</div>

<!-- end -->

<?php

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
?>

<!-- Code output html -->

<div id="codeOutput">
<?php echo $Frmopin; ?>
</div>

<!-- end -->

<?php
$Date = strtotime(' + 1 week');

$name = "root";
$passworddb = "hc4l";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $name, $passworddb) or die ("Could not connect or find database");

// to connect to the database
$select =  mysql_select_db("toetstool");

$query = "INSERT INTO codes (Formpin, date, questions) VALUES ('".$Frmopin."', '".$Date."', '".$_POST['question']."')";


	// recieve the rsult to put it in a variable
	$resultA = mysql_query($query);


?>