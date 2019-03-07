
 <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>    
<hr>

    <!-- inicio da pagina -->
    <div class="container">

      <h1 class="my-4">Assembleia 2019</h1>

      <!-- info da assembleia -->
        <!-- carde 1  --------------->  
        
      <div class="row">
          <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Listar Igrejas Cadastradas</h4>
            <div class="card-body">
              <p class="card-text">Lista das igrejas ja credenciadas e com membros presentes ate o momento</p>
            </div>
            <div class="card-footer">
              <a class="btn btn-secondary" href="index.php?page=li_igreja">Listar igrejas</a>
            </div>
          </div>
        </div>
        
          
          
    <!-- carde 1 fim --------------->    
          
    <!-- carde 2 --------------->    
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Cadastro de Mensageiro</h4>
            <div class="card-body">
              <p class="card-text">cadastramento dos mensageiros ja previamente que pagaram a inscrição e estão auorizados pelo pastor a participar da assembleia como mensageiro da sua igreja</p>
            </div>
            <div class="card-footer">
              <a class="btn btn-secondary" href="index.php?page=c_mensageiro">Cadastrar mensageiro</a>
            </div>
          </div>
        </div>
    <!-- carde 2 fim --------------->  
          
    <!-- carde 3 --------------->  
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Sessões</h4>
            <div class="card-body">
              <p class="card-text">Cadastramentos e entrada de mensageiros </p>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="index.php?page=sessao">
              Cadastrar Igreja</a>
            </div>
          </div>
        </div>
      </div>
     

<div class="row">
    <?php 
        if($logado == 'Lucas' || $logado =='rob'){?>
          <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Eleição</h4>
            <div class="card-body">
              <p class="card-text">Cadastramentos e entrada de mensageiros </p>
            </div>
            <div class="card-footer">
              <a class="btn btn-secondary" href="index.php?page=eleicao_i">Iniciar Eleição</a>
            </div>
          </div>
        </div>
        
           <?php    } ?>
          
    <!-- carde 1 fim --------------->    
          
    <!-- carde 2 --------------->    
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">QR CODE</h4>
            <div class="card-body">
              <p class="card-text">caso nao esteja achando o seu qr code verifique aqui ou na lista de mesnageiros cadastrados</p>
            </div>
            <div class="card-footer">
              <a class="btn btn-secondary" href="index.php?page=l_mensageiro">Resgata QR Code</a>
            </div>
          </div>
        </div>
    <!-- carde 2 fim --------------->  
          
    <!-- carde 3 --------------->  
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Sessões</h4>
            <div class="card-body">
              <p class="card-text">Cadastramentos e entrada de mensageiros </p>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="index.php?page=sessao">
              Cadastrar Igreja</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section
      <h2>Portfolio Heading</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project One</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Two</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Three</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Four</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Five</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Six</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
        
    

      <!-- Duvidas  -->
        
        <hr>
      <div class="row">
        <div class="col-lg-6">
          <h2>Dúvidas sobre o sistema????</h2>
          <p>em caso de dúvidas no preenchimento ou execulção do sistema favor chamar o lucas, preenchimento de campos errados ou faltando dados chamem o Lucas Nunes  </p>
          <ul>
            <li>
              <strong>Não fique precionado por ninguem</strong>
            </li>
            <li>caso alguem queria ja preencher ele mesmo ou falar sobre entradas sem estarem presentes simplesmente me chamem ou deem a desculpa de que agora e feito no sistema e nao tem como alterar somente com o gerente do sistema </li>
            
          </ul>
          <p>Deus vai nos ajudar a cumprir mais esta etapa na vida da Convenção</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="images/logo.jpg" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      
   

