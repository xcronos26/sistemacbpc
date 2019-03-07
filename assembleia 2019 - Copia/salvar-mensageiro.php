<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Mensageiro Salvo!<br>
                        
					</span>
				</div><br>
<?php
	$igreja = @$_REQUEST["igreja_id_igreja"];
	$nome   = @$_REQUEST["nome_mensageiro"];
	$cpf    = @$_REQUEST["cpf_mensageiro"];
	$email  = @$_REQUEST["email_mensageiro"];
	$tel    = @$_REQUEST["tel_mensageiro"];
    $val    = @$_REQUEST["val_mensageiro"];

	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO mensageiro (igreja_id_igreja, nome_mensageiro, cpf_mensageiro, email_mensageiro, tel_mensageiro, val_mensageiro, responsavel_m) VALUES ('{$igreja}', '{$nome}', '{$cpf}', '{$email}', '{$tel}','{$val}','{$logado}')";
			
			$resultado = $conn->query($sql) or die($conn->error);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE mensageiro SET	
                        igreja_id_igreja={$igreja},
						nome_mensageiro='{$nome}',
						cpf_mensageiro='{$cpf}',
						email_mensageiro='{$email}',
						tel_mensageiro='{$tel}',
                        val_mensageiro='{$val}'
					WHERE 
                        id_mensageiro=".$_REQUEST['id_mensageiro'];
						
			$resultado = $conn->query($sql) or die($conn->error);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Editou com sucesso</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM mensageiro WHERE id_mensageiro=".$_REQUEST["id_mensageiro"];
			
			$resultado = $conn->query($sql) or die($conn->error);
			
			if($resultado==true){
				print "<div class='alert alert-success'>Excluiu com sucesso</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir</div>";
			}
		break;
	}
?>

               
                <a href="index.php?page=c_mensageiro" class="login100-form-btn">Voltar</a>
                
        	</div>
		</div>
	</div>



