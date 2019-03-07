<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						listar Igrejas<br>
                        
					</span>
				</div>

<?php
	$sql = "SELECT * FROM igrejas_asb2019";
	
	$result = $conn->query($sql) or die($conn->error);
	
	$qtd = $result->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Igreja</th>";
		print "<th>Pastor</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while( $row = $result->fetch_assoc() ){
			print "<tr>";
			print "<td>".$row["id_igreja"]."</td>";
			print "<td>".$row["nome_igreja"]."</td>";
			print "<td>".$row["pastor_igreja"]."</td>";
			print "<td>
			
				   <button class='btn btn-success' onclick=\"location.href='index.php?page=e_igreja&id_igreja=".$row["id_igreja"]."'\"><i class='fa fa-edit'></i></button>
				   
				   <button class='btn btn-danger' onclick=\"location.href='index.php?page=s_igreja&acao=excluir&id_igreja=".$row["id_igreja"]."'\"><i class='fa fa-trash'></i></button>
				   
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>


                
                </div>
		</div>
	</div>
