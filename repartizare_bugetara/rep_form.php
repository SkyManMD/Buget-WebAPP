<?
	include_once '../sql_settings.php';
	
	$sel_localitate=mysql_query('SELECT * FROM localitate ORDER BY nume_localitate ASC');
	
	print "	<br/><div class='select_cl' style='float:left; margin-left:35px'>
			<select id='localit'>
			<option disabled>Alege Localitatea</option>
			<option selected value='-1'>Pentru toate localitățile împreună</option>";
	while($row=mysql_fetch_array($sel_localitate))
	{
		print "<option value='$row[0]'>".$row[1]."</option>";
	}
	print "</select></div>";
	
	print "	<div class='select_cl' style='float:left; margin-left:35px'>
			<select id='tip_vizualizare'>
			<option disabled>Alege tip vizualizare</option>
			<option value='1'>Vizualizare Compactă</option>
			<option selected value='2'>Vizualizare Extinsă</option>
			</select></div>";
	
	print "	<div class='select_cl' style='float:left; margin-left:35px'>
			<select id='tip_buget'>
			<option selected value='1'>Venituri</option>
			<option value='2'>Cheltuieli</option>
			</select></div><br/><br/><br/><hr style='clear:both'/>";
?>