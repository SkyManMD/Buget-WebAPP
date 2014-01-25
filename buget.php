<?
	class BugetQuery{
		private $table_name;
		private $data_inr;
		private $valoare;
		private $IDLocalitate;
		
		public function __construct($t_name, $d_inr, $val, $id_loc)
		{
			$this->table_name=$t_name;
			$this->data_inr=$d_inr;
			$this->valoare=$val;
			$this->IDLocalitate=$id_loc;
			include_once 'sql_settings.php';
		}
		
		public function year()
		{
			$query=mysql_query("SELECT YEAR($this->data_inr),SUM($this->valoare)
								FROM $this->table_name
								WHERE id_localitate=$this->IDLocalitate
								GROUP BY YEAR($this->data_inr)");
								
			print '<div class="scrool_table" style="height:79px"><table width="300px"><tr><th>An</th><th>Suma</th></tr>';
			while($row=mysql_fetch_array($query))
			{
				print '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td>';
			}
			print '</table></div>';
		}
		
		public function month()
		{
			$query=mysql_query("SELECT YEAR($this->data_inr), MONTH($this->data_inr), SUM($this->valoare)
								FROM $this->table_name
								WHERE id_localitate=$this->IDLocalitate
								GROUP BY YEAR($this->data_inr), MONTH($this->data_inr)");
			
			print '<div class="scrool_table"><table width="300px"><tr><th>An</th><th>Luna</th><th>Suma</th></tr>';
			while($row=mysql_fetch_array($query))
			{
				print '<tr><td>'.$row[0].'</td><td>'.date("F", mktime(0, 0, 0, $row[1], 10)).'</td><td>'.$row[2].'</td></tr>';
			}
			print '</table></div>';
		}
		
		public function day()
		{
			$query=mysql_query("SELECT $this->data_inr,SUM($this->valoare)
								FROM $this->table_name
								WHERE id_localitate=$this->IDLocalitate
								GROUP BY $this->data_inr") or die(mysql_error());
			
			print '<div class="scrool_table"><table width="300px"><tr><th>Dată</th><th>Suma</th></tr>';
			while($row=mysql_fetch_array($query))
			{
				print '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td</tr>';
			}
			print '</table></div>';
		}
	}
	
	$_POST['id_localitate']==-1 ?  $id_localitate="id_localitate" : $id_localitate=$_POST['id_localitate'];
	
	print '<div class="buget"><strong>BUGET VENITURI</strong><hr/>';
	$buget_venit=new BugetQuery("buget_venit","data_inr_venit","valoare_venit",$id_localitate);
	print '<br/><em>Anual</em><br/>';
	$buget_venit->year();
	
	print '<br/><br/><em>Lunar</em><br/>';
	$buget_venit->month();
	
	print '<br/><br/><em>Zilnic</em><br/>';
	$buget_venit->day();
	print"</div>";
	
	#------------------------------------------------------------------
	
	print '<div class="buget"><strong>BUGET CHELTUIELI</strong><hr/>';
	$buget_chelt=new BugetQuery("buget_cheltuieli","data_inr_cheltuiala","valoare_cheltuiala",$id_localitate);
	print '<br/><em>Anual</em><br/>';
	$buget_chelt->year();
	
	print '<br/><br/><em>Lunar</em><br/>';
	$buget_chelt->month();
	
	print '<br/><br/><em>Zilnic</em><br/>';
	$buget_chelt->day();
	print"</div>";
	print"<hr style='clear:both;'/>";	
?>