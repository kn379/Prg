<?php session_start();
	if (!isset($_SESSION['todo']) || !isset($_SESSION['todo_newId'])) {
    	 $_SESSION['todo'] = array();
    	 $_SESSION['todo_newId'] = 0;
    	 }
    if (isset($_POST['action'])) {
    	switch ($_POST['action']) {
          case "new":
               $newId = (++$_SESSION['todo_newId']);
               $_SESSION['todo'][$newId] = array("txt"=>$_POST['txt'], "done"=>false); 
               break;
          case "Bewerken":
               $id = $_POST['id'];                               
               $_SESSION['todo'][$id] = array("txt"=>$_POST['txt'], "done"=>isset($_POST['done']));
               break;
          case "Verwijderen":
               $id = $_POST['id'];                                 
               unset($_SESSION['todo'][$id]);                     
               break;
          default:
          }
     } 
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
					<form action="index.php" method="post">
						<input type="hidden" name="action" value="new">
						Nieuwe taak: <input type="text" name="txt"><input type="submit" value="Toevoegen">
					</form>
				</div>

					<?php foreach ($_SESSION['todo'] as $todoId=>$todo) {?>
					<div id="item">
						<form action="index.php" method="post">
							<input type="hidden" name="id" value="<?php echo $todoId; ?>">
							<input type="checkbox" name="done" value="1"<?php if ($todo['done']==true) echo " checked"; ?>>
							<input type="text" name="txt" value="<?php echo htmlspecialchars($todo['txt']); ?>">
							<input type="submit" name="action" value="Aanpassen">
							<input type="submit" name="action" value="Verwijderen">
						</form></div>
					<?php
						}
					?>
				

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