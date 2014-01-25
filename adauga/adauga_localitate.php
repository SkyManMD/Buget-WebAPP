<html> 
<head>
		<title>Adaugare Localitate : Venit</title>
		<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
<?php
	include_once '../sql_settings.php';
	
	$id_raion=(int)$_GET['id_raion'];
	$nume_localitate = mysql_real_escape_string($_GET['nume_localitate']);

	if(strlen($nume_localitate)>3 && isset($id_raion))
	$insert = mysql_query("INSERT INTO localitate(id_localitate,nume_localitate,id_raion) 
									   VALUES(null,'$nume_localitate','$id_raion')");
	
	print "<div class='info'>";	
	if($insert) 
	{
		print "<img src='../img/succes.png' class='image'/><br/>";
		print "Localitatea <strong>".$nume_localitate."</strong> a fost introdusa in BD!<br/>";
	}
	else
	{
		 print "<img src='../img/error.jpg' class='image'/><br/>";
		 print "Eroare la introducere! :( <br/>[".mysql_error()."]<br/>";
		 if(strlen($nume_localitate)<=3) print "Nu ați introdus corect denumirea localitatii!<br/>";
		 if(!isset($id_raion)) print "Nu ați ales raionul localității!<br/>";
	}
	print "<br/><p><a href='index.php'><img src='../img/back.jpg' class='image' alt='Inapoi'/></a></p></div>";
?>
</body></html>