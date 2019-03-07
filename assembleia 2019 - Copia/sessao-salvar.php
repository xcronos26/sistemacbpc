<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Mensageiro Salvo!<br>
                        
					</span>
				</div><br>
<?php
    $mensageiro = @$_REQUEST["mensageiro"];
    $sessao_n = @$_REQUEST["sessao_n"];

	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO sessao_asb2019 (n_id_mensageiro, sessao_n, responsavel_c) VALUES ('{$mensageiro}', '{$sessao_n}','{$logado}')";
			
			$resultado = $conn->query($sql) or die($conn->error);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Entrada permitida</div>";
			}else{
				print "<div class='alert alert-danger'>Entrada Não permitida</div>";
			}
		break;
		
	}
?>



                <a href="index.php?page=sessao_c" class="login100-form-btn">Voltar</a>
                
        	</div>
		</div>
	</div>


