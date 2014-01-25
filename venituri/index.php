<html>
<head>
	<title>Venituri : Buget</title>
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel='stylesheet' type='text/css' href='../style.css'>
	<link rel='stylesheet' type='text/css' href='style_local.css'>
	<script type='text/javascript' src='../tools/jquery-2.0.3.js'></script>
	<script type='text/javascript' src='js_functions.js'></script>
</head>
<body onload='selectedItem("select_all_data.php")'>
	<div class='content'>
		<div class='menu'>
			<ul>
				<li><button onclick='home()'>PRINCIPALĂ</button></li> <p style='display:inline; font-size:29px; color:#ff8800'>|</p>
				<li><button onclick='selectedItem("select_all_data.php"), selectedButon(1)'>VIZUALIZEAZĂ TOATE</button></li>
				<li><button onclick='selectedItem("selective_data_form.php"), selectedButon(2)'>VIZUALIZEAZĂ SELECTIV</button></li>
				<li><button onclick='selectedItem("insert_form.php"), selectedButon(3)'>ADAUGĂ VENIT</button></li>
			</ul>
			<br/><hr/>
		</div>
		<div class='ajax_body'>
		
		</div>
	</div>
</body>
</html>