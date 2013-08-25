
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
                      Done => 0,
                    ),
               array( Beschrijving => "Boodschappen doen", 
                      Done => 1,
                    ),
               array( Beschrijving => "Dieren wassen", 
                      Done => 1,
                    ),
               array( Beschrijving => "Paardenstal schoonmaken en hooien", 
                      Done => 1,
                    )
             );             
echo "<p>To Do List</p>";

for ($row = 0; $row < 4; $row++)
{
	echo "<div id='item'>";
    if ($shop[$row]["Done"] < 1) {echo "<div id='vink'></div>";} else { echo "<div id='verwijder'></div>";}
    echo "<div id='opdracht'>".$shop[$row]["Beschrijving"];
	echo "</div> <div id='lijn'></div></div>";
			}
 ?>
			</div>
		</div>
	</body>
</html>