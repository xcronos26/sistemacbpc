<?php 

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:home2.php');
  }
 
$logado = $_SESSION['login'];
?>


<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Concenção Batista do Planalto Central</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/js/bootstrap.bundle.min.js">
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- ============================================-->
        <link rel="stylesheet" type="text/css" href="loguin/css/main.css">
        <link rel="stylesheet" type="text/css" href="loguin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!-- ============================================-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/modern-business.css" rel="stylesheet">
	</head>
	<body>
        

		
			
  



<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="height:50px"><span>⠀</span>Convenção Batista do Planalto Central   -  Olá <?php echo"   $logado";?> </a>  
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="index.php?page=v_igreja">Verificar Igreja</a>
        </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?page=eleicao_i">Eleição</a>
        </li>
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">igreja</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index.php?page=c_igreja">Cadastrar</a>
                <a class="dropdown-item" href="index.php?page=l_igreja">Listar</a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">mensageiro</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="index.php?page=c_mensageiro">Cadastrar</a>
                    <a class="dropdown-item" href="index.php?page=l_mensageiro">Listar</a>
                </div>
            </li>
        </ul><a href="logoff.php"><button class="btn btn-danger"> sair</button></a>
        </div>
    </div>
</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php
						include("config.php");
						switch(@$_REQUEST["page"]){
							case "c_igreja":
								include("cadastrar-igreja.php");
							break;
							case "l_igreja":
								include("listar-igreja.php");
							break;
                            case "li_igreja":
								include("listar-igreja-mostra.php");
							break;
							case "s_igreja":
								include("salvar-igreja.php");
							break;
							case "e_igreja":
								include("editar-igreja.php");
							break;
							case "c_mensageiro":
								include("cadastrar-mensageiro.php");
							break;
							case "l_mensageiro":
								include("listar-mensageiro.php");
							break;
                            case "li_mensageiro":
								include("listar-mensageiro-por-igreja.php");
							break;
							case "s_mensageiro":
								include("salvar-mensageiro.php");
							break;
							case "e_mensageiro":
								include("editar-mensageiro.php");
							break;
                            case "v_igreja":
								include("verificarigreja.php");
							break;
                            case "rv_igreja":
								include("usuario.php");
                            case "sessao":
								include("sessao.php");
                            case "sessao_c":
								include("sessao-cadastra.php");
							break;
                            case "sessao_s":
								include("sessao-salvar.php");
							break;
                            case "sessao_l":
								include("sessao-listar.php");
							break;
                            case "sessao_i":
								include("sessao-info.php");
							break;
                            case "eleicao_i":
								include("eleicao-indicacao.php");
							break;
                            case "eleicao_s":
								include("eleicao-salvar.php");
							break;
                            case "eleicao_v":
								include("eleicao-votar.php");
							break;
                            case "eleicao_c":
								include("eleicao-cont.php");
							break;
                            case "qr":
								include("qrcode.php");
							break;
                            case "print":
								include("print.php");
							break;
							default:
								include("home.php");
						}
					?>
				</div>
			</div>
		</div>
   
        
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>





