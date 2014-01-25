<html> 
<head>
		<title>Adaugare Nume : Cheltuieli</title>
		<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
<?php
	include_once '../sql_settings.php';
	
	$id_cat_chelt=(int)$_GET['id_cat_chelt'];
	$nume_chelt = mysql_real_escape_string($_GET['nume_cheltuieli']);

	if(strlen($nume_chelt)>3 && isset($id_cat_chelt))
	$insert = mysql_query("INSERT INTO cheltuieli(id_cheltuiala,nume_cheltuiala,id_cat_cheltuieli) 
									   VALUES(null,'$nume_chelt','$id_cat_chelt')");
	
	print "<div class='info'>";	
	if($insert) 
	{
		print "<img src='../img/succes.png' class='image'/><br/>";
		print "Cheltuială <strong>".$nume_chelt."</strong> a fost introdusa in BD!<br/>";
	}
	else
	{
		 print "<img src='../img/error.jpg' class='image'/><br/>";
		 print "Eroare la introducere! :( <br/>[".mysql_error()."]<br/>";
		 if(strlen($nume_chelt)<=3) print "Nu ați introdus (corect) denumirea cheltuielii!<br/>";
		 if(!isset($id_cat_chelt)) print "Nu ați ales categoria cheltuielii!<br/>";
	}
	print "<br/><p><a href='index.php'><img src='../img/back.jpg' class='image' alt='Inapoi'/></a></p></div>";
?>
</body></html>