<html> 
<head>
		<title>Adaugare Raion : Venit</title>
		<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
<?php
	include_once '../sql_settings.php';
	
	$nume_raion = mysql_real_escape_string($_GET['nume_raion']);
	if(strlen($nume_raion)>3)
	$insert = mysql_query("INSERT INTO raion(id_raion,nume_raion) 
									   VALUES(null,'$nume_raion')");
	
	print "<div class='info'>";	
	if($insert) 
	{
		print "<img src='../img/succes.png' class='image'/><br/>";
		print "Raionul <strong>".$nume_raion."</strong> a fost introdus in BD!<br/>";
	}
	else
	{
		 print "<img src='../img/error.jpg' class='image'/><br/>";
		 print "Eroare la introducere! :( <br/>[".mysql_error()."]<br/>";
		 if(strlen($nume_raion)<=3) print "Nu ați introdus corect denumirea raionului!<br/>";
	}
	print "<br/><p><a href='index.php'><img src='../img/back.jpg' class='image' alt='Inapoi'/></a></p></div>";
?>
</body></html>