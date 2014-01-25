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
	#---------------------------------------------------------
	$sel_instit=mysql_query("SELECT * FROM institutie_chelt");
	print"<div class='institutie_chelt'><strong>Instituție<br/></strong>";
	while($arr=mysql_fetch_array($sel_instit))
	{
		print"<input type='checkbox' onchange='customSelect(this)' name='institutie_chelt' value='$arr[0]'> ".$arr[1]."<br/>";
	}
	print"</div>";
	#---------------------------------------------------------
	$sel_categ = mysql_query("SELECT * FROM categorii_cheltuieli");
	print"<div class='categorii'>";
	while($arr=mysql_fetch_array($sel_categ))
	{
		print "<strong>".$arr[1]."</strong><br/>";
		$sel_venit=mysql_query("SELECT * FROM cheltuieli WHERE id_cat_cheltuieli='$arr[0]' ORDER BY nume_cheltuiala ASC");
		while($arr1=mysql_fetch_array($sel_venit))
		{
			print"<input type='checkbox' onchange='customSelect(this)' name='venit' value='$arr1[0]'> ".$arr1[1]."<br/>";
		}
	}
	print"</div>";
	#---------------------------------------------------------
	print  "<div class='suma_and_data'>
				<strong>Interval sumă</strong><br/>
				<input type='number' name='sum_min' min='0' onchange='customSelect(this)'> <br/><br/>
				<input type='number' name='sum_max' min='0' onchange='customSelect(this)'> <br/><br/>
				<strong>Interval dată</strong><br/>
				<input type='date' name='date_min' onchange='customSelect(this)'> <br/><br/>
				<input type='date' name='date_max' onchange='customSelect(this)'> <br/><br/>
				
				<strong>Condiție sortare</strong><br/>
				<input type='radio' name='cond_sortare' value='nume_localitate' onchange='customSelect(this)' checked/>Nume localitate<br/>
				<input type='radio' name='cond_sortare' value='nume_institutie' onchange='customSelect(this)'/>Nume institutie<br/>
				<input type='radio' name='cond_sortare' value='nume_cheltuiala' onchange='customSelect(this)'/>Nume cheltuiala<br/>
				<input type='radio' name='cond_sortare' value='data_inr_cheltuiala' onchange='customSelect(this)'/>Dată<br/>
				<input type='radio' name='cond_sortare' value='valoare_cheltuiala' onchange='customSelect(this)'/>Sumă<br/>
			</div>";
	
	print " <hr style='clear:both;'/> <div class='selected_items'></div>";
?>