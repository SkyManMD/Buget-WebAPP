<html>
<head>
	<title>Repartizare lunară a bugetului</title>
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel='stylesheet' type='text/css' href='../style.css'>
	<link rel='stylesheet' type='text/css' href='style_local.css'>
	<script type='text/javascript' src='../tools/jquery-2.0.3.js'></script>
	<script type='text/javascript' src='../tools/jquery-ui.js'></script>
	<script type='text/javascript' src='js_fn.js'></script>
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
		<div class='menu'>
			<?php include_once'rep_form.php'; ?>
		</div>
		<div class='ajax_body'>
		</div>
	</div>
</body>
</html>