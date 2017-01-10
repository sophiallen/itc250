
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

if($_POST){
	//show data
	echo $_POST['first_name'];
} else {
	//show form
	echo '
		<form method="post" action="formhandle1.php">
			<label>
				First Name
				<input type="text" name="first_name"/>
			</label><br/>
			<label>
				Last Name
				<input type="text" name="last_name"/>
			</label><br/>
			<label>
				Email
				<input type="email" name="email"/>
			</label>
			<input type="submit" value="submit"/>
		</form>
	'; //single quote echo
}

?>
</body>
</html>