<html> 
<head>
		<title>Adaugare : Venit</title>
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
		<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
<?php
	include_once '../sql_settings.php';
	
	$localitate = mysql_real_escape_string($_POST['localitate']);
	$subcategorie = mysql_real_escape_string($_POST['subcategorie']);
	$data = mysql_real_escape_string($_POST['calendar_value']);
	$summ_v = (int)mysql_real_escape_string($_POST['summ_value']);
	
	print "<div class='info'>";
	if(!$localitate || !$subcategorie || !$data || !$summ_v) print "<img src='../img/error.jpg' class='image'/><br/>";
	if(!$localitate) print "Nu ați ales localitatea!<br/>";
	if(!$subcategorie) print "Nu ați ales subcategoriea!<br/>";
	if(!$data) print "Nu ați ales data!<br/>";
	if(!$summ_v) print "Nu ați introdus valoarea!<br/>";
	
	if($localitate && $subcategorie && $data && $summ_v) 
	$insert = mysql_query("INSERT INTO buget_venit(id_buget_venit,id_venit,data_inr_venit,valoare_venit,id_localitate)
										VALUES(null,'$subcategorie','$data','$summ_v','$localitate')");
										
	if($insert) 
	{
		print "<img src='../img/succes.png' class='image'/><br/>";
		print "Date introduse cu succes!<br/>";
	}
	print "<br/><p><a href='index.php'><img src='../img/back.jpg' class='image' alt='Inapoi'/></a></p></div>";
?>
</body>
</html>