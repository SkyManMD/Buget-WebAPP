<?php
	include_once '../sql_settings.php';

	$chbox_localit=mysql_real_escape_string($_POST['chbox_localit']); //localitatile selectate;
	$chbox_chelt=mysql_real_escape_string($_POST['chbox_cheltuieli']); //cheltuieli selectate;
	$chbox_institutii=mysql_real_escape_string($_POST['chbox_institutii']); //inst. selectate
	$sum_min=$_POST['sum_min'];
	$sum_max=$_POST['sum_max'];
	$date_min=$_POST['date_min'];
	$date_max=$_POST['date_max'];
	$cond_sort=$_POST['sort_by'];

	if(strlen($chbox_localit)==0) print '<br/>Alege cel puțin o localitate!<br/>';
	if(strlen($chbox_institutii)==0) print '<br/>Alege cel puțin o institutie<br/>';
	if(strlen($chbox_chelt)==0) print '<br/>Alege cel puțin o categorie de cheltuieli!<br/>';

	if(strlen($chbox_localit) && strlen($chbox_institutii) && strlen($chbox_chelt))
	{
		$sel_buget_chelt=mysql_query("SELECT nume_localitate,nume_institutie,nume_cheltuiala,data_inr_cheltuiala,valoare_cheltuiala 
								  FROM buget_cheltuieli AS A
								  INNER JOIN localitate ON A.id_localitate=localitate.id_localitate
								  INNER JOIN institutie_chelt ON A.id_institutie=institutie_chelt.id_institutie
								  INNER JOIN cheltuieli ON A.id_cheltuiala=cheltuieli.id_cheltuiala
								  WHERE A.id_localitate IN (".$chbox_localit.")
								  AND A.id_cheltuiala IN (".$chbox_chelt.")
								  AND A.id_institutie IN (".$chbox_institutii.")
								  AND valoare_cheltuiala BETWEEN $sum_min AND $sum_max
								  AND data_inr_cheltuiala BETWEEN $date_min AND $date_max
								  ORDER BY ".$cond_sort." ASC");
		if(!$sel_buget_chelt) {die(mysql_error()); exit;}

		print"<br/><table>";
		print "<tr><th>Localitate</th><th>Instituție</th>"."<th>Categorie</th><th>Data</th>"."<th>Suma</th></tr>";
		while($arr1=mysql_fetch_array($sel_buget_chelt))
		{
			print "<tr><td>".$arr1[0]."</td><td>".$arr1[1]."</td><td>".$arr1[2]."</td><td>".$arr1[3]."</td><td>".$arr1[4]."</td></tr>";
		}
		print"</table>";
	}
	print "<br/><hr/><br/>";

	
	
	
	
	
	
	
	
	
	//$localit_arr = explode(",", $chbox_localit);  //transformare din string in array;
	//$cheltuieli_arr = explode(",", $chbox_chelt);
	//$institutii_arr = explode(",", $chbox_institutii);
	//... IN (join(',',$nume_array))
	
	/*for($i=0;$i<count($localit_arr);$i++)
	{
		$sel_localitate = mysql_query("SELECT * FROM localitate WHERE id_localitate='$localit_arr[$i]'");
		while($arr=mysql_fetch_array($sel_localitate))
		{
			print " <br/><p class='nume_localitate'>".$arr[1]."</p><br/>"; //afisare nume localitate;
			print"<table>";
			for($j=0;$j<count($cheltuieli_arr);$j++)
			{
				$sel_chelt = mysql_query("SELECT * FROM cheltuieli WHERE id_cheltuiala='$cheltuieli_arr[$j]'");
				while($arr_v=mysql_fetch_array($sel_chelt))
				{
					print " <tr><th colspan='2'>".$arr_v[1]."</th></tr>"; //afisare cheltuiala;
				
					$sel_buget_chelt=mysql_query("SELECT * FROM buget_cheltuieli 
													WHERE id_localitate='$arr[0]' 
													AND id_cheltuiala='$arr_v[0]' 
													AND valoare_cheltuiala BETWEEN $sum_min AND $sum_max
													AND data_inr_cheltuiala BETWEEN $date_min AND $date_max
													ORDER BY data_inr_cheltuiala ASC");  //selectare venit corespunzatorlocalitatii si categoriei;
					while($arr1=mysql_fetch_array($sel_buget_chelt))
					{
						print "<tr><td>".$arr1[2]."</td><td>".$arr1[3]."</td></tr>";
					}
				}
			}
			print"</table>";
		}
	}*/
?>