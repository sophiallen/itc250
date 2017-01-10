
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

	$arr[] = "one";
	$arr[] = "two";
	$arr[] = "three";
	$arr[] = "four";

	foreach($arr as $item){
		echo "<p>".$item."</p>";
	}


	//4. Associative Arrays

	$arr2["a"] = "Apple";
	$arr2["b"] = "Banana";
	$arr2["c"] = "Cranberry";

	foreach ($arr2 as $key=>$value){
		echo "<p>".$key."->".$value."</p>";
	}



?>
</body>
</html>