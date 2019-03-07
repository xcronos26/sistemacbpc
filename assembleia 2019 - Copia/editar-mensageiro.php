<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Editar Mensageiro<br>
                        
					</span>
				</div>


<?php
	$sql = "SELECT * FROM mensageiro c
			INNER JOIN igrejas_asb2019 m
			ON c.igreja_id_igreja = m.id_igreja
			WHERE id_mensageiro=".$_REQUEST["id_mensageiro"];
	
	$resultado = $conn->query($sql) or die($conn->error);
	
	if($resultado==true){
		$row = $resultado->fetch_assoc();
?>
<form action="index.php?page=s_mensageiro&acao=editar&id_mensageiro=<?php print $row["id_mensageiro"]; ?>" method="POST" class="login100-form validate-form">
	<div class="wrap-input100 validate-input m-b-18">
        <span class="label-input100">Igreja</span>
		<?php
			$sql_1 = "SELECT * FROM igrejas_asb2019";
			
			$resultado_1 = $conn->query($sql_1) or die($conn->error);
			
			$qtd = $resultado_1->num_rows;
			
			if($qtd > 0){
				print "<select name='igreja_id_igreja' class='form-control'>";
				print "<option value='".$row["id_igreja"]."'>".$row["nome_igreja"]."</option>";
				print "<option></option>";
				
				print "</select>";
			}else{
				print "Não encontrou resultados";
			}
        
        
        
       
        
        
        
        
		?>
	</div>
	<div class="wrap-input100 validate-input m-b-18">
        <span class="label-input100">Nome do mesageiro</span>
		  <input type="text" name="nome_mensageiro" class="input100" value="<?php print $row["nome_mensageiro"]; ?>">
        <span class="focus-input100"></span>
    </div><br>
    
	<div class="wrap-input100 validate-input m-b-18">
        <span class="label-input100">CPF</span>
		  <input type="text" name="cpf_mensageiro" class="input100" value="<?php print $row["cpf_mensageiro"]; ?>">
        <span class="focus-input100"></span>
    </div>
    
    
	<div class="wrap-input100 validate-input m-b-18">
        <span class="label-input100">Email</span>
		  <input type="text" name="email_mensageiro" class="input100" value="<?php print $row["email_mensageiro"]; ?>">
        <span class="focus-input100"></span>
    </div>
    
    
    <div class="wrap-input100 validate-input m-b-18">
        <span class="label-input100">Telefone</span>
		  <input type="text" name="tel_mensageiro" class="input100" value="<?php print $row["tel_mensageiro"]; ?>">
        <span class="focus-input100"></span>
    </div>
    
     <div class="wrap-input100 validate-input m-b-18">
        <span class="label-input100">Validar</span>
		  <input type="checkbox" name="val_mensageiro" class="input100" <?php if($row["val_mensageiro"] == ''){print " ";}else{print"checked";} ?>>
        <span class="focus-input100"></span>
    </div>
    <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn">Editar Mensageiro</button>
    </div>
</form>
<?php
	} // fim do if   
?>