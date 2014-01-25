<?php

include_once '../sql_settings.php';

$sel_raion = mysql_query('SELECT * FROM raion');
if(!$sel_raion) return exit(mysql_error());

while($r1=mysql_fetch_array($sel_raion))
{
	printf("<div class='spoiler'> 
				<label class='spoiler_title' onclick='openOrCloseSpoiler(this.parentNode)'> %s
				</label> <div class='spoiler_body'>",$r1[1]); //afisare raion;
	
	$sel_localitate=mysql_query("SELECT * FROM localitate WHERE id_raion='$r1[0]'");
	while($r2=mysql_fetch_array($sel_localitate))
	{
		printf("<div class='spoiler'> 
				<label class='spoiler_title' onclick='openOrCloseSpoiler(this.parentNode)'> %s
				</label> <div class='spoiler_body'>",$r2[1]); //afisare localiate din raionul selectat;
		
		$sel_categ_venit=mysql_query("SELECT * FROM categorii_venituri");
		while($r3=mysql_fetch_array($sel_categ_venit))
		{
			printf("<div class='spoiler'> 
				    <label class='spoiler_title' onclick='openOrCloseSpoiler(this.parentNode)'> %s
					</label> <div class='spoiler_body'>",$r3[1]); //afisare categorie venituri;
					
			$sel_venit=mysql_query("SELECT * FROM venituri WHERE id_cat_venit='$r3[0]' ORDER BY nume_venit ASC");
			print "<table>";
			while($r4=mysql_fetch_array($sel_venit))
			{
				printf("<tr><th colspan='3'>%s</th></tr>",$r4[1]); //afiare venit corespuzator categoriei de mai sus;
				
				$sel_buget_venit=mysql_query("SELECT * FROM buget_venit
											  WHERE id_venit='$r4[0]'
											  AND id_localitate='$r2[0]' ORDER BY data_inr_venit ASC"); //selectam bugetul corespunzator categoriei si localitatii curente;

				while($r5=mysql_fetch_array($sel_buget_venit))
				{
					printf("<tr>
							<td>%s</td> <td>%s</td>",$r5[2],$r5[3]);
					print "<td width='90px'>
						   <button class='opt_btn' value='".$r5[0]."' onclick='openEditPage(this)'><img src='../img/edit.png' alt='Edit'></button> 
						   <button class='opt_btn' value='".$r5[0]."' onclick='openDeletePage(this)'><img src='../img/delete.png' alt='Delete'></button></td></tr>";
				}
			}
			print"</table></div></div>";
		}
		print"</div></div>";
	}
	print"</div></div>";
}
print"<br/><hr/><br/>";

?>