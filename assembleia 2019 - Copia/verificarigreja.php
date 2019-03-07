	

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Verificar Igreja<br>
                        
					</span>
				</div>
              
				<form class="login100-form validate-form" action="index.php?page=rv_igreja" method="post">
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Nome da Igreja</span>
						<input class="input100" type="text" name="igreja" placeholder="Igreja Batista de Tal" />
						<span class="focus-input100"></span>
					</div>
                </form>
                
     
<div id="resultado"></div>

			
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$("input[name='igreja']").on('blur', function(){
  var igreja = $(this).val();
  $.post('usuario.php?igreja=' + igreja,function(data){
    $('#resultado').html(data);
  });
});
</script>