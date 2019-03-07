<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$base = "asb2019";
	
	$conn = new mysqli($host, $user, $pass, $base);
	
	//opcional: mostrar o erro caso não consiga conectar
	if ($conn->connect_error) {
		die('Error: ' . $conn->connect_error);
	}
	
?>