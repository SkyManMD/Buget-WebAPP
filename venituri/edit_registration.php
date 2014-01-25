<html> 
<head>
		<title>Editare : Venit</title>
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
		<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
<?php
	include_once '../sql_settings.php';
	
	$id_venit=(int)mysql_real_escape_string($_GET['ID_for_edit']);
	
	$select_q=mysql_query("SELECT data_inr_venit,valoare_venit FROM buget_venit
						   WHERE id_buget_venit='$id_venit'");
	$row=mysql_fetch_array($select_q);
	
	print "<div class='info'><form method='POST'><br/>
				<input type='date' value='".$row[0]."' name='calendar_value'/>&nbsp&nbsp&nbsp&nbsp
				<input type='number' value='".$row[1]."' name='summ_value', min='0'/>&nbsp&nbsp&nbsp&nbsp
				<input type='submit' value='Gata!' name='ok_edit_btn'/>
		   </form></div>";
	
	if(isset($_POST['ok_edit_btn']))
	{
		$data=mysql_real_escape_string($_POST['calendar_value']);
		$sum_val=(int)mysql_real_escape_string($_POST['summ_value']);
		
		if($data && $sum_val)
		$edit_q=mysql_query("UPDATE buget_venit
							 SET data_inr_venit='$data', valoare_venit='$sum_val'
							 WHERE id_buget_venit='$id_venit'");

		print "<br/><br/><br/><br/>
			   <div class='info'>";	
		if($edit_q) 
		{
			print "<img src='../img/succes.png' class='image'/><br/>";
			print "Înregistrare editată cu succes!<br/>";
		}
		else
		{
			print "<img src='../img/error.jpg' class='image'/><br/>";
			print "Eroare la editarea înregistrării! :( <br/>[".mysql_error()."]<br/>";
		}
	print "<br/><p><a href='index.php'><img src='../img/back.jpg' class='image' alt='Inapoi'/></a></p></div>";
	}
?>
</body></html>