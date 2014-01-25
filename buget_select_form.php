<?php
	include_once '/sql_settings.php';
	
	$sel_localitate=mysql_query('SELECT * FROM localitate ORDER BY nume_localitate ASC');
	
	print "	<br/><div class='select_cl' style='margin:0 auto;'>
			<select id='localit' name='localitate'>
			<option  disabled>Alege Localitatea</option>
			<option selected value='-1'>Pentru toate localitățile împreună</option>";
	while($row=mysql_fetch_array($sel_localitate))
	{
		print "<option value='$row[0]'>".$row[1]."</option>";
	}
	print "</select></div><br/>";
?>
