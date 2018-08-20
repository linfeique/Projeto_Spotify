<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
</head>
<body>
	<?php
		$user =  $_POST["email_user"];
		$pass =  $_POST["senha_passS"];

		if($user == "matheus" && $pass == "02021996a"){
			Parabéns!!! Você entrou!!!		
		} else{
			Seu Bosta!!!
		}
	?>
</body>
</html>