<html> 
<head>
		<title>Adaugare Instituție : Cheltuieli</title>
		<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
<?php
	include_once '../sql_settings.php';
	
	$nume_instit = mysql_real_escape_string($_GET['nume_instit_chelt']);
	if(strlen($nume_instit)>3)
	$insert = mysql_query("INSERT INTO institutie_chelt(id_institutie,nume_institutie) 
									   VALUES(null,'$nume_instit')");
	
	print "<div class='info'>";	
	if($insert) 
	{
		print "<img src='../img/succes.png' class='image'/><br/>";
		print "Instituția <strong>".$nume_instit."</strong> a fost introdus in BD!<br/>";
	}
	else
	{
		 print "<img src='../img/error.jpg' class='image'/><br/>";
		 print "Eroare la introducere! :( <br/>[".mysql_error()."]<br/>";
		 if(strlen($nume_instit)<=3) print "Nu ați introdus corect denumirea instituției!<br/>";
	}
	print "<br/><p><a href='index.php'><img src='../img/back.jpg' class='image' alt='Inapoi'/></a></p></div>";
?>
</body></html>