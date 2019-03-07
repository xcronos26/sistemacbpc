
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
			ON m.id_igreja = c.igreja_id_igreja ORDER BY id_mensageiro";
	
	$resultado = $conn->query($sql) or die($conn->error);
	
	if($resultado->num_rows > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
			print "<th>mensageiro</th>";
            print "<th>igrejas</th>";
            print "<th>cpf</th>";
			print "<th>Email</th>";
			print "<th>telefone  </th>";
            print "<th>CaP</th>";
			print "<th>Ver </th>";
			print "<th>Ações</th>";
			print "</tr>";
		while($row = $resultado->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["nome_mensageiro"]."</td>";
            print "<td>".$row["nome_igreja"]."</td>";
			print "<td>".$row["cpf_mensageiro"]."</td>";
			print "<td>".$row["email_mensageiro"]."</td>";
			print "<td>".$row["tel_mensageiro"]."</td>";
            print "<td>".$row["responsavel_m"]."</td>"; 
            if($row["val_mensageiro"] == ''){
                print "<td><button class='btn btn-danger'><i class='fa fa-ban'></i></button></td>";
            }else{
                print "<td><button class='btn btn-success'><i class='fa fa-check'></i></button></td>";
            }
			print "<td>
					 <button onclick=\"location.href='index.php?page=qr&id_mensageiro=".$row["id_mensageiro"]."';\" class='btn btn-success'><i class='fa fa-code'></i></button>
					 <button onclick=\"location.href='index.php?page=e_mensageiro&id_mensageiro=".$row["id_mensageiro"]."';\" class='btn btn-success'><i class='fa fa-edit'></i></button>
					 <button onclick=\"location.href='index.php?page=s_mensageiro&acao=excluir&id_mensageiro=".$row["id_mensageiro"]."';\" class='btn btn-danger'><i class='fa fa-trash'></i></button>
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
	
