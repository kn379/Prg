<?php session_start();

$_SESSION['var'] = $variabele;

 ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Naamloos document</title>
		<link href="style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="container">
			<div id="header">
			</div>
			<div id="content">
            				<p>To Do List</p>

				<div id="item">
					<div id="vink"></div><div id="opdracht">Website maken</div>
					<div id="verwijder"></div>
					<div id="lijn"></div>
				</div>

				<div id="item">
					<div id="vink"></div><div id="opdracht">Boodschappen doen</div>
					<div id="verwijder"></div>
					<div id="lijn"></div>
				</div>

				<div id="item">
					<div id="vink"></div><div id="opdracht">Dieren wassen</div>
					<div id="verwijder"></div>
					<div id="lijn"></div>
				</div>

				<div id="item">
					<div id="vink"></div><div id="opdracht">Paardenstal schoonmaken en hooien</div>
					<div id="verwijder"></div>
					<div id="lijn"></div>
				</div>
			</div>
		</div>
	</body>
</html>