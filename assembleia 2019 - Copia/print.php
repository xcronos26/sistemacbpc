  <?php 

$user = filter_input(INPUT_POST, 'igreja');

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

<div id="print" class="conteudo">
    
<img src="<?php echo $user; ?>"/>
<img src="images/bg-01.jpg">
    <h2>aqui e um teste</h2>
</div>

<input type="button" onclick="cont();" value="Imprimir Div separadamente">

