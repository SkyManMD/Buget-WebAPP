<html> 
<head>
		<title>Adaugare Categorie : Cheltuilei</title>
		<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
<?php
	include_once '../sql_settings.php';
	
	$nume_categ = mysql_real_escape_string($_GET['nume_categ_cheltuilei']);
	if(strlen($nume_categ)>3)
	$insert = mysql_query("INSERT INTO categorii_cheltuieli(id_cat_cheltuieli,nume_categ) 
									   VALUES(null,'$nume_categ')");
	
	print "<div class='info'>";	
	if($insert) 
	{
		print "<img src='../img/succes.png' class='image'/><br/>";
		print "Categoria <strong>".$nume_categ."</strong> a fost introdusa in BD!<br/>";
	}
	else
	{
		 print "<img src='../img/error.jpg' class='image'/><br/>";
		 print "Eroare la introducere! :( <br/>[".mysql_error()."]<br/>";
		 if(strlen($nume_categ)<=3) print "Nu ați introdus (corect) denumirea categoriei!<br/>";
	}
	print "<br/><p><a href='index.php'><img src='../img/back.jpg' class='image' alt='Inapoi'/></a></p></div>";
?>
</body></html>