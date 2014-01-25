<html>
<head>
	<title>Buget : Adaugă...</title>
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel='stylesheet' type='text/css' href='../style.css'>
	<link rel='stylesheet' type='text/css' href='style_local.css'>
	<script type='text/javascript' src='../tools/jquery-2.0.3.js'></script>
	<script type='text/javascript' src='../tools/jquery-ui.js'></script>
	<script type='text/javascript'>
	function openPage(page)
	{
		switch(page)
		{
			case 1: window.open("../index.php","_self"); break;
			case 2: window.open("../venituri/index.php","_self"); break;
			case 3: window.open("../cheltuieli/index.php","_self"); break;
		}
	}
	$( document ).ready(function() {
			$('.categorii_adaugare').draggable();
	});
	</script>
</head>
<body>
	<div class='content'>
		<div class='menu'>
			<ul>
				<li><button onclick='openPage(1)'>PRINCIPALĂ</button></li>  <p style='display:inline; font-size:29px; color:#f9f9f9'>|</p>
				<li><button onclick='openPage(2)'>VENITURI</button></li>
				<li><button onclick='openPage(3)'>CHELTUIELI</button></li>
			</ul>
			<br/><hr/>
		</div>
		<div class='add_body'>
			<?php
				include_once'add_form.php';
				print"<br/><hr style='clear:both'/><br/>";
			?>
		</div>
	</div>
</body>
</html>