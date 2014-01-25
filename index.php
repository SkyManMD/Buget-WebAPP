<html>
<head>
	<title>Buget</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel='stylesheet' type='text/css' href='style.css'>
	<script type='text/javascript' src='tools/jquery-2.0.3.js'></script>
	<script type='text/javascript' src='js_fn.js'></script>
</head>
<body>
	<div class='content'>
		<div class='menu'>
			<ul>
				<li><button onclick='openPage(1)'>PRINCIPALĂ</button></li>  <p style='display:inline; font-size:29px; color:#f9f9f9'>|</p>
				<li><button onclick='openPage(2)'>VENITURI</button></li>
				<li><button onclick='openPage(3)'>CHELTUIELI</button></li>
				<li><button onclick='openPage(4)'>ADAUGĂ...</button></li>
				<li><button onclick='openPage(5)'>REPARTIZARE BUGETARĂ</button></li>
			</ul>
			<br/><hr/>
		</div>
		<div class='menu'>
			<? include_once 'buget_select_form.php';?> 
			<hr/>
		</div>
		<div class='ajax_body' id='buget_div'>	
		</div>
		<div class='footer'>
			<hr/>
			<span>&#169 2014</span>
		</div>
	</div>
</body>
</html>