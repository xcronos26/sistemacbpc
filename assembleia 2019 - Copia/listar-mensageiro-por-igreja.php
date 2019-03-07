
<div >
		<div >
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						listar Igrejas<br>
                        
					</span>
				</div>

<?php
	$sql = "SELECT * FROM mensageiro AS c
			INNER JOIN igrejas_asb2019 AS m
			ON m.id_igreja = c.igreja_id_igreja WHERE id_igreja='".$_REQUEST["id_igreja"]."'";
	
	$resultado = $conn->query($sql) or die($conn->error);
	$qtd = $resultado->num_rows;
	if($resultado->num_rows > 0){
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
			print "<th>cadastrado Por</th>";
			print "<th>igrejas</th>";
			print "<th>mensageiro</th>";
			print "<th>telefone  </th>";
			print "<th>Verificação  </th>";
			print "<th>Ações</th>";
			print "</tr>";
		while($row = $resultado->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["responsavel_m"]."</td>";
			print "<td>".$row["nome_igreja"]."</td>";
			print "<td>".$row["nome_mensageiro"]."</td>";
			print "<td>".$row["tel_mensageiro"]."</td>";
            if($row["val_mensageiro"] == ''){
                print "<td><button class='btn btn-danger'><i class='fa fa-ban'></i></button></td>";
            }else{
                print "<td><button class='btn btn-success'><i class='fa fa-check'></i></button></td>";
            }
			if($row["val_mensageiro"] == ''){
                print "<td>
					 <button onclick=\"location.href='index.php?page=e_mensageiro&id_mensageiro=".$row["id_mensageiro"]."';\" class='btn btn-success'><i class='fa fa-black-tie'></i></button>
					
				   </td>";
            }else{
                print "<td> </td>";
            }
			
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>
                
                
                </div>
		</div>
	
