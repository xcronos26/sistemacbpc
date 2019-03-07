	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Votação<br>
					</span>
				</div>
				        
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
		print "<th>Votos</th>";
		print "<th>Contar Voto</th>";
		print "</tr>";
		while( $row = $result->fetch_assoc() ){
			print "<tr>";
			print "<td>".$row["nome_mensageiro"]."</td>";
			print "<td>".$row["n_votos"]."</td>";
            print "<td><button class='btn btn-success' onclick=\"location.href='index.php?page=eleicao_c&id_eleicao=".$row["id_eleicao"]."'\"><i class='fa fa-edit'></i></button>
				   </td>";
			
			
			print "</tr>";
		}
		print "</table>";
       
    
	}else{
		print "Não encontrou resultados";
	} ?>

			</div>
		</div>
	</div>