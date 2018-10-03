<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	
	if($_SERVER['REQUEST_METHOD'] == "GET"){
		echo "Hello World";
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