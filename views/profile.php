<?php

// if there is no cookie we redirect the user to the login page
if (!isset($_COOKIE['loggedin'])) {
	header("location:?action=login");
}


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="profile">
		<h1>welkom <?php echo $ses_user; ?></h1>
		<div id="right">
			<h2></h2>
			<a href="?action=newform"><button id="newFormBut">New form</button></a><br />
			<a href="?action=logout"><button id="logoutBut">Logout</button></a>
		</div>

<div id="content">
<?php
		$query1=mysql_connect("localhost","root","neirlxsb");
		mysql_select_db("toetstool",$query1);

		$start=0;
		$limit=6;


		$id = false;
		if(isset($_GET['id']))
		{
		$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS); 
		$start=($id-1)*$limit;
		}

		$query=mysql_query("SELECT name, class, antwoord from answer LIMIT $start, $limit");
		echo "<ul id='answerUl'>";
		while($query2=mysql_fetch_array($query))
		{
		echo "<li id='answerLi'>"."<p>Naam: ".$query2['name']."<br> Klas: ".$query2['class']."<br> Antwoord: ".$query2['antwoord']."</p></li>";
		}
		echo "</ul>";
		$rows=mysql_num_rows(mysql_query("SELECT name, class, antwoord from answer"));
		$total=ceil($rows/$limit);

		if($id>1)
		{
		echo "<a href='?action=profile&id=".($id-1)."' class='button'>PREVIOUS</a>";
		}
		if($id!=$total)
		{
		echo "<a href='?action=profile&id=".($id+1)."' class='button'>NEXT</a>";
		}

		echo "<ul class='pages'>";
		for($i=1;$i<=$total;$i++)
		{
		if($i==$id) { echo "<li class='current'>".$i."</li>"; }

		else { echo "<li><a href='?action=profile&id=".$i."'>".$i."</a></li>"; }
		}
		echo "</ul>";

		if (mysql_num_rows($query) == 0) { 
   			echo "niks gevonden"; 
		}
?>
		</div>
	</div>
</body>
</html>