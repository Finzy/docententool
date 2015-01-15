<div id="content">
<a href="?action=profile"><button id="resultBackBut">Back</button></a><br />
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
		echo "<li id='answerLi'>"."<p>Naam: ".$query2['name']."<br> Klas: ".$query2['class']."<br> Antwoord: ".$query2['antwoord']."</p></li><hr id='resulthr'>";
		}
		echo "</ul>";
		$rows=mysql_num_rows(mysql_query("SELECT name, class, antwoord from answer"));
		$total=ceil($rows/$limit);

		if($id>1)
		{
		echo "<a href='?action=results&id=".($id-1)."' class='button'><<</a>";
		}
		if($id!=$total)
		{
		echo "<a href='?action=results&id=".($id+1)."' class='button'>>></a>";
		}

		echo "<ul class='pages'>";
		for($i=1;$i<=$total;$i++)
		{
		if($i==$id) { echo "<li class='current'>".$i."</li>"; }

		else { echo "<li><a href='?action=results&id=".$i."'>".$i."</a></li>"; }
		}
		echo "</ul>";

		if (mysql_num_rows($query) == 0) { 
   			echo "niks gevonden"; 
		}
?>
		</div>