<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require_once("DE.php");

	$de = new DE("127.0.0.1", "Hesham", "root", "");

	if($_SERVER['REQUEST_METHOD'] == "GET"){
		print_r($de->query("SELECT * FROM users"))
	}
	else if ($_SERVER['REQUEST_METHOD'] == "POST"){
		echo "POST";
	}
	else{
		http_response_code(405);
	}

	?>

</body>
</html>