<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Indicação Salva!<br>
                        
					</span>
				</div><br>
<?php
    $indicado = @$_REQUEST["indicado"];
    $votos = @$_REQUEST["n_votos"];
    

	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO eleicao_asb2019 (no_id_mensageiro, responsavel, n_votos) VALUES ('{$indicado}', '{$logado}','{$votos}')";
			
			$resultado = $conn->query($sql) or die($conn->error);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Entrada permitida</div>";
			}else{
				print "<div class='alert alert-danger'>Entrada Não permitida</div>";
			}
		break;
        case "editar":
			$sql = "UPDATE eleicao_asb2019 SET
                            no_id_mensageiro='{$indicado}',
                            responsavel='{$logado}',
                            n_votos='{$votos}'
                            
                    WHERE 
                            id_eleicao =".$_REQUEST["id_eleicao"];
			
			$result = $conn->query($sql) or die($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar!</div>";
			}
		break;
		
	}
?>



                <a href="index.php?page=eleicao_i" class="login100-form-btn">Voltar</a>
                
        	</div>
		</div>
	</div>


