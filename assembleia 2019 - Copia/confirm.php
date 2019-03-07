<?php 

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];
$host = "localhost";
	$user = "cbpco785_lucas";
	$pass = "pi31415926";
	$base = "cbpco785_lucas";
	
	$conn = new mysqli($host, $user, $pass, $base);
if ($conn->connect_error) {
		die('Error: ' . $conn->connect_error);
	}



$sql = "SELECT * FROM `loguin` WHERE `nome_usr` = '$login' AND `senha_usr`= '$senha'";
	
	$result = $conn->query($sql) or die($conn->error);

$qtd = $result->num_rows;
	
	if($qtd > 0)
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:index.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:home2.php');
    
   
  }
?>