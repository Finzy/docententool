<?php

include('../includes/config.inc.php');
include('../includes/database.inc.php');

$con = mysql_connect("localhost","root","neirlxsb");
$db_selected = mysql_select_db('toetstool');

$name = $_POST['name'];
$class = $_POST['class'];
$answer = $_POST['answer'];

if (isset($_POST['submit'])){
$query = "INSERT INTO answer (`id`, `name`, `class`, `antwoord`) VALUES
('null', '$name', '$class', '$answer')";
}else{
  echo "nope";
}

if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  }


?>