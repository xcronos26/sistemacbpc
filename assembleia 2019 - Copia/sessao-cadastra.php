<?php
$nome = $_GET['value'];
?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Entrada na Sessão<br>
                        
					</span>
				</div>
              
				<form form action="index.php?page=sessao_s&acao=cadastrar" method="POST" name="from" class="login100-form validate-form">
					
                    
                    <div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">sessão</span>
						<input type="text" name="sessao_n" class="input100" value="<?php print $nome; ?>" >
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Mensageiro</span>
						<input type="text" name="mensageiro" class="input100" placeholder="Mensageiro">
						<span class="focus-input100"></span>
					</div>
                   
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">Cadastrar membro</button>
                       
					</div>
				</form>
			</div>
		</div>
	</div>
