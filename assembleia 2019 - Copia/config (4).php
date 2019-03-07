<?php
	$host = "localhost";
	$user = "cbpco785_lucas";
	$pass = "pi31415926";
	$base = "cbpco785_lucas";
	
	$conn = new mysqli($host, $user, $pass, $base);
	
	//opcional: mostrar o erro caso não consiga conectar
	if ($conn->connect_error) {
		die('Error: ' . $conn->connect_error);
	}
	
?>