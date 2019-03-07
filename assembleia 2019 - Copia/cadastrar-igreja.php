	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Cadastro de Igrejas<br>
                        
					</span>
				</div>
              
				<form action="index.php?page=s_igreja&acao=cadastrar" method="POST" name="from" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Nome da Igreja</span>
						<input class="input100" type="text" value="" name="nome_igreja" placeholder="Igreja Batista de Tal">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Nome do Pastor</span>
						<input class="input100" type="text" name="pastor_igreja" placeholder="Nome do pastor da igreja">
						<span class="focus-input100"></span>
					</div>

						<br>
                   
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">cadastrar</button>
                       
					</div>
				</form>
                
                
<?php
	$qtdIgrejas = [];
   
    $sql = "SELECT * FROM igrejas_asb2019";
	
	$result = $conn->query($sql) or die($conn->error);
	
	$qtd = $result->num_rows;
	
	if($qtd > 0){?>
		<p>Encontrou <b><?php print $qtd ; ?> </b> resultado(s)</p>
		<table class='table table-bordered table-striped table-hover'>
		<tr>
		<th>Igreja</th>
		<th>Pastor</th>
		<th>Cadastrado Por</th>
		<th>Mensageiros</th>
		</tr>
        <?php
		while( $row = $result->fetch_assoc() ){ ?>
            
			<tr>
			<td><?php print  $row["nome_igreja"]; ?> </td>
			<td><?php print  $row["pastor_igreja"]; ?> </td>
			<td><?php print  $row["responsavel_c"]; ?> </td>
			<td><?php print "<button onclick=\"location.href='index.php?page=li_mensageiro&id_igreja=".$row["id_igreja"]."';\" class='btn btn-success'><i class='fa fa-child'></i></button>
				   
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
            