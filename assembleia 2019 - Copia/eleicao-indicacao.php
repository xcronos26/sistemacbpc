<?php  
    $ind = @$_REQUEST["ind"];


?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						indicação<br>
					</span>
				</div>
				<form action="index.php?page=eleicao_s&acao=cadastrar" method="POST" name="from" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Indicação</span>
						<input class="input100" type="text" name="indicado" >
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">cadastrar</button>
                       
					</div>
				</form>               
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
	

$sql = "SELECT * FROM eleicao_asb2019
        INNER JOIN mensageiro ON id_mensageiro =  no_id_mensageiro 
        INNER JOIN igrejas_asb2019 ON id_igreja = igreja_id_igreja ";
	
	$result = $conn->query($sql) or die($conn->error);
	
	$qtd = $result->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		
		print "<th>Nome indicado</th>";
		print "<th>Igreja</th>";
		print "<th>Validação</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while( $row = $result->fetch_assoc() ){
			print "<tr>";
			print "<td>".$row["nome_mensageiro"]."</td>";
			print "<td>".$row["nome_igreja"]."</td>";
			if($row["val_mensageiro"] == ''){
                print "<td><button class='btn btn-danger'><i class='fa fa-ban'></i></button></td>";
            }else{
                print "<td><button class='btn btn-success'><i class='fa fa-check'></i></button></td>";
            }
			
			print "<td>
				   <button class='btn btn-danger' onclick=\"location.href='index.php?page=s_igreja&acao=excluir&id_igreja=".$row["id_igreja"]."'\"><i class='fa fa-trash'></i></button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
        ?><a href="index.php?page=eleicao_v"><button class="btn btn-danger"> VOTAR</button></a><?php 
    
	}else{
		print "Não encontrou resultados";
	} ?>

			</div>
		</div>
	</div>