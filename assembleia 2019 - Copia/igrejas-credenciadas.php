<h1>Listar de igrejas Credenciadas para Assembleia 10 nov</h1>
<?php
	$sql = "SELECT * FROM igreja";
	
	$result = $conn->query($sql) or die($conn->error);
	
	$qtd = $result->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		
		print "<th>Nome</th>";
		
		print "</tr>";
		while( $row = $result->fetch_assoc() ){
			print "<tr>";
			
			print "<td>".$row["nome_igreja"]."</td>";
			
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>


