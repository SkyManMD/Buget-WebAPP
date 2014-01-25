<?
	include_once '../sql_settings.php';
	class repartizareBugetara
	{
		private $table_name;
		private $join_table_name;
		private $data_inr;
		private $valoare;
		private $category_name;
		private $ID_categ_name;
		private $IDLocalitate;
		
		public function __construct($t_name, $j_t_n, $d_inr, $val, $id_loc, $categ_n, $id_categ_n)
		{
			$this->table_name=$t_name;
			$this->join_table_name=$j_t_n;
			$this->data_inr=$d_inr;
			$this->valoare=$val;
			$this->IDLocalitate=$id_loc;
			$this->category_name=$categ_n;
			$this->ID_categ_name=$id_categ_n;
		}
		
		public function vizualizare_compact()
		{
			$query=mysql_query("SELECT YEAR($this->data_inr), $this->category_name, MONTHNAME($this->data_inr), SUM($this->valoare)
						FROM $this->table_name AS A
						INNER JOIN $this->join_table_name AS B ON A.$this->ID_categ_name=B.$this->ID_categ_name
						WHERE id_localitate=$this->IDLocalitate
						GROUP BY YEAR($this->data_inr), A.$this->ID_categ_name, MONTH($this->data_inr)") or die(mysql_error());
	
			print'<table width="800" style="margin-left:80px"><tr><th>Nume Categorie</th><th>Luna</th><th>An</th><th>Suma</th></tr>';
			while($row=mysql_fetch_array($query))
			{
				print '<tr><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[0].'</td><td>'.$row[3].'</td></tr>';
			}
			print'</table>';
		}
		
		public function vizualizare_extins()
		{
			$sel_ani=mysql_query("SELECT DISTINCT(YEAR($this->data_inr)) FROM $this->table_name 
								  ORDER BY YEAR($this->data_inr) ASC"); //valorile anului sa nu se repete;
			while($row_ani=mysql_fetch_array($sel_ani))
			{
				print "<table width='970'><tr><th colspan='14'>".$row_ani[0]."</th></tr>";
				$sel_venit=mysql_query("SELECT * FROM $this->join_table_name");
				print"<tr><th>Nume Categorie</th><th>Ian</th><th>Febr</th><th>Mar</th><th>Apr</th><th>Mai</th>
							<th>Iun</th><th>Iul</th><th>Aug</th><th>Sept</th><th>Oct</th>
							<th>Noiem</th><th>Dec</th><th>Suma Anuală</th></tr>";
				while($row_venit=mysql_fetch_array($sel_venit))
				{
					$sum_anual=0; //suma anuala pe fiecare categorie;
					print "<tr><td>".$row_venit[1]."</td>";
					for($month=1;$month<=12;$month++)
					{
						$sel_buget=mysql_query("SELECT SUM($this->valoare) AS month_sum
												FROM $this->table_name
												WHERE MONTH($this->data_inr)='$month'
												AND YEAR($this->data_inr)='$row_ani[0]'
												AND $this->ID_categ_name='$row_venit[0]'
												AND id_localitate=$this->IDLocalitate") or die(mysql_error());

						$row_buget=mysql_fetch_assoc($sel_buget);
						if(!isset($row_buget['month_sum'])) print"<td>0</td>";
						else {	
							print "<td>".$row_buget['month_sum']."</td>";
							$sum_anual+=$row_buget['month_sum'];
						}
					}
					print"<td>".$sum_anual."</td></tr>";
				}
				$suma_anuala_total=mysql_query("SELECT SUM($this->valoare) AS sum_total
												FROM $this->table_name 
												WHERE YEAR($this->data_inr)='$row_ani[0]'
												AND id_localitate=$this->IDLocalitate");
				$row_s_t=mysql_fetch_assoc($suma_anuala_total);
				print"<tr><td colspan='13'><strong>TOTAL</strong></td><td><strong>".$row_s_t['sum_total']."</strong></td></tr></table><br/><hr/><br/>";
			}
		}
	}
	
	$_POST['id_localitate']==-1 ?  $id_localitate="id_localitate" : $id_localitate=$_POST['id_localitate'];
	$tip_viz=$_POST['tip_vizualizare'];
	$tip_buget=$_POST['tip_buget']; //venituri sau cheltuieli;
	
	if($tip_buget==1) 
	$r = new repartizareBugetara("buget_venit","venituri","data_inr_venit","valoare_venit",$id_localitate,"nume_venit","id_venit");
	else if($tip_buget==2)
	$r = new repartizareBugetara("buget_cheltuieli","cheltuieli","data_inr_cheltuiala","valoare_cheltuiala",$id_localitate,"nume_cheltuiala","id_cheltuiala");
	
	print '<div class="buget"  style="margin:0px">';
	if($tip_viz==1) $r->vizualizare_compact();
	else if($tip_viz==2) $r->vizualizare_extins();
	print '</div>';
	
?>