	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Cadastro de Mensageiro<br>
                        
					</span>
				</div>
              
				<form form action="index.php?page=s_mensageiro&acao=cadastrar" method="POST" name="from" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Igreja</span><br>
                        <?php
                            $sql = "SELECT * FROM igrejas_asb2019";

                            $result = $conn->query($sql) or die($conn->error);

                            $qtd = $result->num_rows;

                            if($qtd > 0){
                                print "<select name='igreja_id_igreja' class='input100'>";
                                while( $row = $result->fetch_assoc() ){
                                    print "<option value='".$row["id_igreja"]."'>".$row["nome_igreja"]."</option>";
                                }
                                print "</select>";
                            }else{
                                print "Não encontrou resultados";
                            }
                        ?>
						
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Nome do mesageiro</span>
						<input type="text" name="nome_mensageiro" class="input100" placeholder="Nome do mensageiro">
						<span class="focus-input100"></span>
					</div><br>
                    
                    <div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">CPF</span>
						<input type="text" name="cpf_mensageiro" class="input100" placeholder="CPF">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Email</span>
						<input type="text" name="email_mensageiro" class="input100" placeholder="Email para solicitações">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Telefone</span>
						<input type="text" name="tel_mensageiro" class="input100" placeholder="telefone">
						<span class="focus-input100"></span>
					</div>
                     <div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Chek-in</span>
						<input type="checkbox" name="val_mensageiro"  placeholder="telefone">
						<span class="focus-input100"></span>
					</div>
                    

        
                   
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">Cadastrar membro</button>
                       
					</div>
				</form>
			</div>
		</div>
	</div>






