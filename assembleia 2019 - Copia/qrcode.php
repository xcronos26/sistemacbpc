
<?php
	$sql = "SELECT * FROM mensageiro c
			INNER JOIN igrejas_asb2019 m
			ON c.igreja_id_igreja = m.id_igreja
			WHERE id_mensageiro=".$_REQUEST["id_mensageiro"];
	
	$resultado = $conn->query($sql) or die($conn->error);
	?><?php
	if($resultado==true){
		$row = $resultado->fetch_assoc();
?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						<?php print $row["nome_mensageiro"]; ?><br>
                        
					</span>
				</div>


<form action="index.php?page=print&id_mensageiro=<?php print $row["id_mensageiro"]; ?>" method="POST" class="login100-form validate-form">
	
	<div class="wrap-input100 validate-input m-b-18">
        <span class="label-input100"><?php print $row["nome_mensageiro"]; ?> o Seu QR e:</span>
		
<div id="print" class="conteudo">  
         
                <?php 
                    $aux = "qr_img0.50j/php/qr_img.php?";
                    $aux .= "d=".$row['id_mensageiro']."&";
                    $aux .= "e=h&";
                    $aux .= "s=10&";
                    $aux .= "t=p";
        
        $impressao = $aux;
                ?>
    <img src="<?php echo $aux; ?>"/>
    <input name="igreja" type="text" value="<?php echo $impressao; ?>"/>
             
        </div>
        <span class="focus-input100"></span>
    </div><br>
     
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">imprimir</button>
                       
					</div>
	
</form>
                
            

<?php
	} // fim do if   
?>
<script>
function cont(){
   var conteudo = document.getElementById('print').innerHTML;
   tela_impressao = window.open('about:blank');
   tela_impressao.document.write(conteudo);
   tela_impressao.window.print();
   tela_impressao.window.close();
}
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$("input[name='igreja']").on('blur', function(){
  var igreja = $(this).val();
  $.post('print.php?igreja=' + igreja,function(data){
    $('#resultado').html(data);
  });
});
</script>