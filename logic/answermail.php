<?php

include('../includes/config.inc.php');
include('../includes/database.inc.php');

<<<<<<< HEAD
$con = mysql_connect("localhost","root","neirlxsb");
$db_selected = mysql_select_db('toetstool');
=======
$con = mysql_connect("localhost","docent","docent");
$db_selected = mysql_select_db('docententool');
>>>>>>> 1f95f3e8d05a4d54e9e1c25d2a104594103f1db3

$name = $_POST['name'];
$class = $_POST['class'];
$answer = $_POST['answer'];

if (isset($_POST['submit'])	AND $name || $class || $answer != ''){
$query = "INSERT INTO answer (`id`, `name`, `class`, `antwoord`) VALUES
('null', '$name', '$class', '$answer')";
header('Location: ../');
}else{
  echo "Iets in niet juist ingevuld";
  ?>
  <a href='../'>Naar home</a>
<?php
}




?>