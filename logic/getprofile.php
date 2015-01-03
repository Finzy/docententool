<?php

// Login data to connect to the database
$name = "root";
$passworddb = "neirlxsb";
$hostname = "localhost";

// query to connect to the host
$dbhandle = mysql_connect($hostname, $name, $passworddb) or die ("Could not connect or find database");

// to connect to the database
$select =  mysql_select_db("tool");

$query = mysql_query("SELECT * FROM users WHERE username='".$_SESSION['username']."'");

while($row = mysql_fetch_assoc($query) )
{
    $info = $row['info'];
}

?>