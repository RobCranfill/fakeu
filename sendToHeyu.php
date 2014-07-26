<?php
/*
	sendToHeyu.php
	Expects two POST parameters: 
		unitCode, like "A1" or "B13"
		onOrOff, like "on" or "off"

	The output from this - done via 'echo', or otherwise? - is returned to the AJAX call.
	At the moment the caller does nothing with that return value.
*/

if (isset($_POST['unitCode']) && !empty($_POST['unitCode'])) 
	{
	$unitCode = $_POST['unitCode'];
	$onOrOff  = $_POST['onOrOff'];

	// TODO: Should check the value of these params before acting on them

	$execCommand = "/usr/local/bin/heyu f" . $onOrOff . " " . $unitCode;
	echo "sendToHeyu executing: $execCommand";
	exec($execCommand);
	}

?>
