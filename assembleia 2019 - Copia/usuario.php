<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Cadastro de Igreja<br>
                        
					</span>
				</div>
<?php
  //envio o charset para evitar problemas com acentos
  header("Content-Type: text/html; charset=UTF-8");
  $mysqli = new mysqli('localhost', 'root', '', 'asb2019');
  $user = filter_input(INPUT_POST, 'igreja');
  $sql = "SELECT * FROM `igrejas_asb2019` WHERE `nome_igreja` = '{$user}'"; //monto a query
  $query = $mysqli->query( $sql ); //executo a query
  if( $query->num_rows > 0 ) {//se retornar algum resultado
  print "<div class='alert alert-danger'>Já existe!</div>";?>
        <a href="index.php?page=l_igreja" class="login100-form-btn">Voltar</a>
 

     <?php
  
  
  
  
  } else {
      print "<div class='alert alert-success'>Não Existe!</div>";?>
        <a href="index.php?page=c_igreja" class="login100-form-btn">Voltar</a>
    <?php
  }


?>

               
        	</div>
		</div>
	</div>


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
		<th>Mensageiros</th>
		</tr>
        <?php
		while( $row = $result->fetch_assoc() ){ ?>
            
			<tr>
			<td><?php print  $row["nome_igreja"]; ?> </td>
			<td><?php print  $row["pastor_igreja"]; ?> </td>
			<td>
			<?php 
				   print "<button onclick=\"location.href='index.php?page=li_mensageiro&id_igreja=".$row["id_igreja"]."';\" class='btn btn-success'><i class='fa fa-child'></i></button>
				   
				   
				   
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>



<?php
/*
  //envio o charset para evitar problemas com acentos
  header("Content-Type: text/html; charset=UTF-8");
  $mysqli = new mysqli('localhost', 'root', '', 'asb2019');
  $user = filter_input(INPUT_GET, 'igreja');
  $sql = "SELECT * FROM `igrejas_asb2019` WHERE `nome_igreja` = '{$user}'"; //monto a query
  $query = $mysqli->query( $sql ); //executo a query
  if( $query->num_rows > 0 ) {//se retornar algum resultado
    echo 'Já existe!';
  } else {
    echo 'Não existe ainda!';
  
  }
  
  */?>