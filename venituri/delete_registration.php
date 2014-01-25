<html> 
<head>
		<title>Ștergere : Venit</title>
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
		<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
<?php
	include_once '../sql_settings.php';
	
	$id_venit=(int)mysql_real_escape_string($_GET['ID_for_delete']);
	
	$delete_q=mysql_query("DELETE FROM buget_venit
						   WHERE id_buget_venit='$id_venit'");
	
	print "<div class='info'>";	
	if($delete_q) 
	{
		print "<img src='../img/succes.png' class='image'/><br/>";
		print "Înregistrare ștearsă cu succes!<br/>";
	}
	else
	{
		 print "<img src='../img/error.jpg' class='image'/><br/>";
		 print "Eroare la ștergerea înregistrării! :( <br/>[".mysql_error()."]<br/>";
	}
	print "<br/><p><a href='index.php'><img src='../img/back.jpg' class='image' alt='Inapoi'/></a></p></div>";
?>
</body></html>
