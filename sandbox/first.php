
<!doctype html>
<html>
<head>
	<title>ITC250 Exercise</title>
	<style type="text/css">
		body {
			width: 75%;
			margin: 2em auto;
			background-color: white;
			padding: 1.5em;
			font-family: Calibri;
		}

		html {
			background-color: gainsboro;
		}

	</style>
</head>

<body>

<?php
	//echoing a variable
	$name = "Bront";
	echo "<p>Hello, ".$name."!</p>";

	//arrays
	//$arr = array(); //proper but unecessary declaration
	$arr[] = "Bruce"; //shorthand
	$arr[] = "Lucy";
	$arr[] = "Maggie";

	echo "<pre>";
	var_dump($arr);
	echo "</pre>";

?>


</body>
</html>