<?php

// Login data to connect to the database
<<<<<<< HEAD
$name = "root";
$passworddb = "neirlxsb";
=======
$name = "docent";
$passworddb = "docent";
>>>>>>> 1f95f3e8d05a4d54e9e1c25d2a104594103f1db3
$hostname = "localhost";

// query to connect to the host
$dbhandle = mysql_connect($hostname, $name, $passworddb) or die ("Could not connect or find database");

// to connect to the database
$select =  mysql_select_db("docententool");

$query = mysql_query("SELECT * FROM users WHERE username='".$_SESSION['username']."'");

// while($row = mysql_fetch_assoc($query) )
// {
//     $info = $row['info'];
// }

?>