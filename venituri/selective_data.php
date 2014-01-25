<?php
	include_once '../sql_settings.php';

	$chbox_localit=mysql_real_escape_string($_POST['chbox_localit']); //localitatile selectate;
	$chbox_venituri=mysql_real_escape_string($_POST['chbox_venituri']); //categoriee venituri selectate;
	$sum_min=$_POST['sum_min'];
	$sum_max=$_POST['sum_max'];
	$date_min=$_POST['date_min'];
	$date_max=$_POST['date_max'];
	
	$localit_arr = explode(",", $chbox_localit);  //transformare din string in array;
	$venituri_arr = explode(",", $chbox_venituri);

	for($i=0;$i<count($localit_arr);$i++)
	{
		$sel_localitate = mysql_query("SELECT * FROM localitate WHERE id_localitate='$localit_arr[$i]'");
		while($arr=mysql_fetch_array($sel_localitate))
		{
			print " <br/><p class='nume_localitate'>".$arr[1]."</p><br/>"; //afisare nume localitate;
			print"<table>";
			for($j=0;$j<count($venituri_arr);$j++)
			{
				$sel_venit = mysql_query("SELECT * FROM venituri WHERE id_venit='$venituri_arr[$j]'");
				while($arr_v=mysql_fetch_array($sel_venit))
				{
					print " <tr><th colspan='2'>".$arr_v[1]."</th></tr>"; //afisare venit;
				
					$sel_buget_venit=mysql_query("SELECT * FROM buget_venit 
													WHERE id_localitate='$arr[0]' 
													AND id_venit='$arr_v[0]' 
													AND valoare_venit BETWEEN $sum_min AND $sum_max
													AND data_inr_venit BETWEEN $date_min AND $date_max
													ORDER BY data_inr_venit ASC");  //selectare venit corespunzator localitatii si categoriei;
					while($arr1=mysql_fetch_array($sel_buget_venit))
					{
						print "<tr><td>".$arr1[2]."</td><td>".$arr1[3]."</td></tr>";
					}
				}
			}
			print"</table>";
		}
	}
	print "<br/><hr/><br/>";
?>