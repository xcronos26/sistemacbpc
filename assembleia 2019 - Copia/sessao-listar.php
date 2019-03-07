
<div >
		<div >
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						listar Igrejas<br>
                        
					</span>
				</div>

<?php
/*ORDER BY id_sessao*/	$sql = "SELECT * FROM sessao_asb2019 
			INNER JOIN mensageiro ON id_mensageiro =  n_id_mensageiro 
            INNER JOIN igrejas_asb2019 ON id_igreja = igreja_id_igreja 
            ORDER BY id_sessao";
	
	$resultado = $conn->query($sql) or die($conn->error);
	
	if($resultado->num_rows > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
			
			print "<th>nºSessao</th>";
			print "<th>Nome Mensageiro</th>";
			print "<th>Igreja Representada</th>";
			print "</tr>";
		while($row = $resultado->fetch_assoc()){
			print "<tr>";
			
			print "<td>".$row["sessao_n"]."</td>";
			print "<td>".$row["nome_mensageiro"]."</td>";
			print "<td>".$row["nome_igreja"]."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>
                
                
                </div>
		</div>
	
