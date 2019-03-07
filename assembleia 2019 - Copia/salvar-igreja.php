
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Cadastro de Igreja<br>
                        
					</span>
				</div>
<?php
                $igreja = @$_REQUEST["nome_igreja"];
                $pastor = @$_REQUEST["pastor_igreja"];
	switch($_REQUEST["acao"]){
		case "cadastrar":

            
			$sql = "INSERT INTO igrejas_asb2019 (nome_igreja, pastor_igreja,responsavel_c) VALUES ('{$igreja}','{$pastor}','{$logado}')";
			
			$result = $conn->query($sql) or die($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'>Conseguiu cadastrar com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não possível cadastrar</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE igrejas_asb2019 SET nome_igreja='{$igreja}',pastor_igreja='{$pastor}' WHERE id_igreja =".$_REQUEST["id_igreja"];
			
			$result = $conn->query($sql) or die($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar!</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM igrejas_asb2019 WHERE id_igreja = ".$_REQUEST["id_igreja"];
			
			$result = $conn->query($sql) or die($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'>Foi excluído com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir!</div>";
			}
		break;
    }
?>
                <a href="index.php?page=c_mensageiro" class="login100-form-btn">Voltar</a>
                
        	</div>
		</div>
	</div>
