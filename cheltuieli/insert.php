<html> 
<head>
		<title>Adaugare : Cheltuieli</title>
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
		<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
<?php
	include_once '../sql_settings.php';
	
	$localitate = mysql_real_escape_string($_POST['localitate']);
	$institutie = mysql_real_escape_string($_POST['institutie']);
	$subcategorie = mysql_real_escape_string($_POST['subcategorie']);
	$data = mysql_real_escape_string($_POST['calendar_value']);
	$summ_v = (int)mysql_real_escape_string($_POST['summ_value']);
	
	print "<div class='info'>";
	if(!$localitate || !$subcategorie || !$data || !$summ_v || !$institutie) print "<img src='../img/error.jpg' class='image'/><br/>";
	if(!$localitate) print "Nu ați ales localitatea!<br/>";
	if(!$institutie) print "Nu ați ales institutia!<br/>";
	if(!$subcategorie) print "Nu ați ales subcategoriea!<br/>";
	if(!$data) print "Nu ați ales data!<br/>";
	if(!$summ_v) print "Nu ați introdus valoarea!<br/>";
	
	if($localitate && $subcategorie && $data && $summ_v && $institutie) 
	$insert = mysql_query("INSERT INTO buget_cheltuieli(id_buget_cheltuieli,id_cheltuiala,data_inr_cheltuiala,valoare_cheltuiala,id_localitate,id_institutie)
										VALUES(null,'$subcategorie','$data','$summ_v','$localitate','$institutie')");
										
	if($insert) 
	{
		print "<img src='../img/succes.png' class='image'/><br/>";
		print "Date introduse cu succes!<br/>";
	}
	print "<br/><p><a href='index.php'><img src='../img/back.jpg' class='image' alt='Inapoi'/></a></p></div>";
?>
</body>
</html>