<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<!-- A simple GUI for heyu. 
	robcranfill@gmail.com
	Handles two different screen sizes (an iPhone and a Nexus7) - crudely.
-->
<head>
	<title>fakeu v2.0</title>

	<script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>

<!-- Let's 'sniff' the browser instead of looking at screen attributes... -->
<?php
	$browser = 'other';
	if (strpos($_SERVER['HTTP_USER_AGENT'], "iPhone")){
		$browser = 'iphone';
		}
	if (strpos($_SERVER['HTTP_USER_AGENT'], "Nexus 7")){
		$browser = 'nexus7';
		}
?>

<?php
if ($browser === 'iphone'){
?>
<link
	rel="stylesheet"
	type="text/css"
	href="fakeu_iphone.css"
	/>
<?php } ?>

<?php if ($browser === 'nexus7'){ ?>
<link
	rel="stylesheet"
	type="text/css"
	href="fakeu_nexus7.css"
	/>
<?php } ?>

<?php if ($browser === 'other'){ ?>
<link
	rel="stylesheet"
	type="text/css"
	href="fakeu_other.css"
	/>
<?php } ?>

	  
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

<!-- Magic tag for iPhone to create non-browser window for "Home Screen" shortcut -->
<meta name="apple-mobile-web-app-capable" content="yes">

</head>

<body>

<table border="0">

<?php

$codes = [
	"Living Room"  => "A1",
	"Front Stairs" => "A2",
	"Front Deck"   => "A4",
	"Front Porch"  => "B1",
	"Back Eaves"   => "B2",
	"test"         => "A13"
	];


function makeButton($name, $unit)
    {
    echo "<tr>\n";
    echo " <td class='table_column_label'>$name</td>\n";
		echo " <td class='table_column_button'><a href='#' class='btn green' onclick='sendToHeyu(\"$unit\", \"on\" )'></a></td>\n";
		echo " <td class='table_column_button'><a href='#' class='btn red'   onclick='sendToHeyu(\"$unit\", \"off\")'></a></td>\n";
    echo "</tr>\n";
    }

foreach ($codes as $desc => $code)
    {
    makeButton($desc, $code);
    }

?>

</table>

<!--
<?php
	echo $_SERVER['HTTP_USER_AGENT'];
?>
-->

</body>
</html>
