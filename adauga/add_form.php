<?php
	include_once '../sql_settings.php';
	
	print "<div class='categorii_adaugare' style='height:143px;'><p>Adaugare raion</p><hr/><br/>
			<form action='adauga_raion.php' method='GET'>
				<input type='text' name='nume_raion' maxlength='20'/>
				<input type='submit' value='Adaugă'/>
			</form></div>";
	
	#-----------------------------------------------------
	
	$select_raion=mysql_query('SELECT * FROM raion');
	print "<div class='categorii_adaugare'><p>Adaugare localitate</p><hr/><br/>
			<form action='adauga_localitate.php' method='GET'>
				<div class='select_cl'><select name='id_raion'> <option disabled selected>Alege raionul localitții</option>";
	while($arr=mysql_fetch_array($select_raion))
				print "<option value='$arr[0]'>".$arr[1]."</option>";
				
	print "     </select></div><br/>
				<input type='text' name='nume_localitate'/>
				<input type='submit' value='Adaugă'/>
			</form></div>";
	
	#-----------------------------------------------------
	
	print "<div class='categorii_adaugare'><p>Adaugare categorie CHELTUIELI</p><hr/><br/>
			<form action='adauga_categorie_cheltuilei.php' method='GET'>
				<input type='text' name='nume_categ_cheltuilei'/>
				<input type='submit' value='Adaugă'/>
			</form></div>";
			
	#-----------------------------------------------------
	
	print "<div class='categorii_adaugare'><p>Adaugare categorie VENIT</p><hr/><br/>
			<form action='adauga_categorie_venit.php' method='GET'>
				<input type='text' name='nume_categ_venit'/>
				<input type='submit' value='Adaugă'/>
			</form></div>";
	#-----------------------------------------------------
	
	$select_cat_chelt=mysql_query('SELECT * FROM categorii_cheltuieli');
	print "<div class='categorii_adaugare'><p>Adaugare nume CHELTUIELI</p><hr/><br/>
			<form action='adauga_nume_cheltuieli.php' method='GET'>
				<div class='select_cl'><select name='id_cat_chelt'> <option disabled selected>Alege categoria cheltuielii</option>";
	while($arr=mysql_fetch_array($select_cat_chelt))
				print "<option value='$arr[0]'>".$arr[1]."</option>";
				
	print "     </select></div><br/>
				<input type='text' name='nume_cheltuieli'/>
				<input type='submit' value='Adaugă'/>
			</form></div>";	
			
	#-----------------------------------------------------
	
	$select_cat_venit=mysql_query('SELECT * FROM categorii_venituri');
	print "<div class='categorii_adaugare'><p>Adaugare nume VENIT</p><hr/><br/>
			<form action='adauga_nume_venit.php' method='GET'>
				<div class='select_cl'><select name='id_cat_venit'> <option disabled selected>Alege categoria venitului</option>";
	while($arr=mysql_fetch_array($select_cat_venit))
				print "<option value='$arr[0]'>".$arr[1]."</option>";
				
	print "     </select></div><br/>
				<input type='text' name='nume_venit'/>
				<input type='submit' value='Adaugă'/>
			</form></div>";
			
	#-----------------------------------------------------
	
	print "<div class='categorii_adaugare'><p>Adaugare instituție CHELTUIELI</p><hr/><br/>
			<form action='adauga_institutie_cheltuieli.php' method='GET'>
				<input type='text' name='nume_instit_chelt'/>
				<input type='submit' value='Adaugă'/>
			</form></div>";
?>