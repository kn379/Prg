
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
			
			<?php session_start();


$shop = array( array( Beschrijving => "Website maken", 
                      Done => ja,
                      Number => nee 
                    ),
               array( Beschrijving => "Boodschappen doen", 
                      Done => ja,
                      Number => nee,
                    ),
               array( Beschrijving => "Dieren wassen", 
                      Done => ja,
                      Number => nee 
                    ),
               array( Beschrijving => "Paardenstal schoonmaken en hooien", 
                      Done => ja,
                      Number => nee 
                    )
             );             
echo "<p>To Do List</p>";

for ($row = 0; $row < 4; $row++)
{
	echo "<div id='item'><div id='opdracht'>";
    echo $shop[$row]["Beschrijving"]." is klaar? ".$shop[$row]["Done"].", ".$shop[$row]["Number"];
    echo "</div></div>";
}
 ?>
			
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