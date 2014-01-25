<?php
	include_once '../sql_settings.php';
	
	$sel_categorie=mysql_query('SELECT * FROM categorii_venituri');
	$sel_localitate=mysql_query('SELECT id_localitate,nume_localitate FROM localitate');
	
	print"<div class='insert_div'><br/><form action='insert.php' method='POST'>";
	print"<div class='select_cl'><select name='localitate'><option selected disabled>Alege Localitatea</option>";
	while($array=mysql_fetch_array($sel_localitate))
	{
		print "<option value='$array[0]'>".$array[1].'</option>';
	}
	print"</select> </div><br/> <br/>";
	
	print"<div class='select_cl'><select name='subcategorie' class='select_cl'><option selected disabled>Alege Categorie și Subcategorie</option>";
	while($array=mysql_fetch_array($sel_categorie))
	{
		print "<option disabled>-------------".$array[1]."-------------</option>"; //afisare categorie
		$sel_category_items=mysql_query("SELECT id_venit,nume_venit FROM venituri WHERE id_cat_venit='$array[0]' ORDER BY nume_venit ASC"); //selectare subcategorii pentru fiecare categorie;
		while($array_items=mysql_fetch_array($sel_category_items))
		{
			print"<option value='$array_items[0]'>".$array_items[1]."</option>";  //afisare subcategorie
		}
	}
	print"</select></div><br/> <br/>";
	
	print "<p>Data &nbsp &nbsp:  &nbsp &nbsp &nbsp<input type='date' name='calendar_value' class='calendar'> <br/> <br/>";
	print "<p>Vloare :  &nbsp &nbsp &nbsp<input type='number' name='summ_value', min='0'> </p><br/> <br/>";
	print "<input type='submit' value='Adaugă' name='add_button'>";
	
	print"</form></div>";
	print"<img src='../img/add_data_bd.png' id='right_image'/>";
?>