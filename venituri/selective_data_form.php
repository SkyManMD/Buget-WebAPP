<?php
	include_once '../sql_settings.php';
	$sel_raion=mysql_query("SELECT * FROM raion");
	
	print"<div class='localitati'>";
	while($arr=mysql_fetch_array($sel_raion))
	{
		print "<strong>Raion ".$arr[1]."</strong><br/>";
		$sel_localitate=mysql_query("SELECT * FROM localitate WHERE id_raion='$arr[0]'");
		while($arr1=mysql_fetch_array($sel_localitate))
		{
			print"<input type='checkbox' onchange='customSelect(this)' name='localitate' value='$arr1[0]'> ".$arr1[1]."<br/>";
		}
	}
	print"</div>";
	
	print"<div class='categorii'>";
	$sel_categ = mysql_query("SELECT * FROM categorii_venituri");
	while($arr=mysql_fetch_array($sel_categ))
	{
		print "<strong>".$arr[1]."</strong><br/>";
		$sel_venit=mysql_query("SELECT * FROM venituri WHERE id_cat_venit='$arr[0]' ORDER BY nume_venit ASC");
		while($arr1=mysql_fetch_array($sel_venit))
		{
			print"<input type='checkbox' onchange='customSelect(this)' name='venit' value='$arr1[0]'> ".$arr1[1]."<br/>";
		}
	}
	print"</div>";
	
	print  "<div class='suma_and_data'>
				<strong>Interval sumă</strong><br/>
				<input type='number' name='sum_min' min='0' onchange='customSelect(this)'> <br/><br/>
				<input type='number' name='sum_max' min='0' onchange='customSelect(this)'> <br/><br/>
			</div>
			<div class='suma_and_data'>
				<strong>Interval dată</strong><br/>
				<input type='date' name='date_min' onchange='customSelect(this)'> <br/><br/>
				<input type='date' name='date_max' onchange='customSelect(this)'> <br/><br/>
			</div>";
	
	print " <hr style='clear:both;'/> <div class='selected_items'></div>";
?>