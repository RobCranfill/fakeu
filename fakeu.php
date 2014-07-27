<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<!-- A simple GUI for heyu. 
	robcranfill@gmail.com
-->
<head>
	<title>fakeu</title>
	<link rel="stylesheet" type="text/css" href="switchButtonSingle_2.css">
	<script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>
	<script>
		function sendToHeyu(unitCode, onOrOff)
			{
			console.log("sendToHeyu: unitCode=" + unitCode + ", onOrOff=" + onOrOff);
			$.ajax(
					{
					url: 'sendToHeyu.php',
					data: {unitCode: unitCode, onOrOff: onOrOff},
					type: 'post',
					success: function(output) 
						{
						console.log("Response was: " + output);
						}
					}
				);
			}
	</script>
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Oswald);
	body, table, tr, td
		{
		font-family: Oswald;
		font-size: 12px;
		color: navy;
		//	background-color: maroon;
		}
</style>
</head>

<body>

<table border="0">

<?php

$codes = [
	"LivingRoom"    => "A1",
	"FrontStairs"   => "A2",
	"FrontDeck"     => "A4",
	"FrontPorch"    => "B1",
	"BackEaves"     => "B2",
	"test"          => "A13"
	];

function makeButton($name, $unit)
    {
    echo "<tr width='300px'>\n";
    echo " <td>$name</td>\n";
		echo " <td width='150px'><a href='#' class='btnGreen' onclick='sendToHeyu(\"$unit\", \"on\" )'></a></td>\n";
		echo " <td width='150px'><a href='#' class='btnRed'   onclick='sendToHeyu(\"$unit\", \"off\")'></a></td>\n";
    echo "</tr>\n";
    }

foreach ($codes as $desc => $code)
    {
    makeButton($desc, $code);
    }

?>

</table>
</body>
</html>
