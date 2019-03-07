	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
<?php
	$sql = "SELECT * FROM eleicao_asb2019
        INNER JOIN mensageiro ON id_mensageiro =  no_id_mensageiro 
        INNER JOIN igrejas_asb2019 ON id_igreja = igreja_id_igreja
    WHERE id_eleicao = ".$_REQUEST["id_eleicao"];
	$result = $conn->query($sql) or die($conn->error);
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
?>
               <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						<?php print $row["nome_mensageiro"]; ?><br>
                        
					</span>
				</div> 
    <form action="index.php?page=eleicao_s&acao=editar&id_eleicao=<?php print $row["id_eleicao"]; ?>" method="POST" name="from" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Nome do Indicado</span>
						<input class="input100" type="text" name="indicado" value="<?php print $row["no_id_mensageiro"]; ?>" placeholder="Igreja Batista de Tal">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Numero de Votos</span>
						<input class="input100" type="text" name="n_votos" value="<?php print $row["n_votos"]; ?>" placeholder="Nome do pastor da igreja">
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