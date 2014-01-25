<html> 
<head>
		<title>Adaugare Nume : Venit</title>
		<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
<?php
	include_once '../sql_settings.php';
	
	$id_cat_venit=(int)$_GET['id_cat_venit'];
	$nume_venit = mysql_real_escape_string($_GET['nume_venit']);

	if(strlen($nume_venit)>3 && isset($id_cat_venit))
	$insert = mysql_query("INSERT INTO venituri(id_venit,nume_venit,id_cat_venit) 
									   VALUES(null,'$nume_venit','$id_cat_venit')");
	
	print "<div class='info'>";	
	if($insert) 
	{
		print "<img src='../img/succes.png' class='image'/><br/>";
		print "Venit <strong>".$nume_venit."</strong> a fost introdusa in BD!<br/>";
	}
	else
	{
		 print "<img src='../img/error.jpg' class='image'/><br/>";
		 print "Eroare la introducere! :( <br/>[".mysql_error()."]<br/>";
		 if(strlen($nume_venit)<=3) print "Nu ați introdus (corect) denumirea venitului!<br/>";
		 if(!isset($id_cat_venit)) print "Nu ați ales categoria venitului!<br/>";
	}
	print "<br/><p><a href='index.php'><img src='../img/back.jpg' class='image' alt='Inapoi'/></a></p></div>";
?>
</body></html>