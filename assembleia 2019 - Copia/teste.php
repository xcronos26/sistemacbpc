<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Document</title>
</head>
<body>

<form action="usuario.php" method="GET">
  <label>Nome Usuário: <input type="text" name="igreja" /></label>
</form>

<div id="resultado"></div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$("input[name='igreja']").on('blur', function(){
  var igreja = $(this).val();
  $.get('usuario.php?igreja=' + igreja,function(data){
    $('#resultado').html(data);
  });
});
</script>

</body>
</html>