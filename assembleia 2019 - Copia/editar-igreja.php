
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Editar Igreja<br>
                        
					</span>
				</div>
<?php
	$sql = "SELECT * FROM igrejas_asb2019 WHERE id_igreja = ".$_REQUEST["id_igreja"];
	
	$result = $conn->query($sql) or die($conn->error);
	
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
?>
    <form action="index.php?page=s_igreja&acao=editar&id_igreja=<?php print $row["id_igreja"]; ?>" method="POST" name="from" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Nome da Igreja</span>
						<input class="input100" type="text" value="<?php print $row["nome_igreja"]; ?>" name="nome_igreja" placeholder="Igreja Batista de Tal">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Nome do Pastor</span>
						<input class="input100" type="text" name="pastor_igreja" value="<?php print $row["pastor_igreja"]; ?>" placeholder="Nome do pastor da igreja">
						<span class="focus-input100"></span>
					</div>
        <div class="form-group">
		<p>             .</p>
	</div>
        <div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">cadastrar</button>
                       
					</div>

						<br>


<?php
	} //fim do if
?>