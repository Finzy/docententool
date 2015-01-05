<?php

include('../includes/config.inc.php');
include('../includes/database.inc.php');

$con = mysql_connect("localhost","farhatTool","neirlxsb");
$db_selected = mysql_select_db('toetstool');

$name = $_POST['name'];
$class = $_POST['class'];
$answer = $_POST['answer'];

if (isset($_POST['submit'])	AND $name || $class || $answer != ''){
$query = "INSERT INTO answer (`id`, `name`, `class`, `antwoord`) VALUES
('null', '$name', '$class', '$answer')";
header("location: ../");
}else{
  echo "Iets in niet juist ingevuld";
  ?>
  <a href='../'>Naar home</a>
<?php
}




?>