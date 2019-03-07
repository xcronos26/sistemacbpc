
<div >
		<div >
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						listar Igrejas<br>
                        
					</span>
				</div>

<?php
            $info = array();
            $qtdi = 0;
            $qtdp = 0;
            $sessao = $_GET['value'];
/*ORDER BY id_sessao*/	$sql = "SELECT * FROM sessao_asb2019 
			INNER JOIN mensageiro ON id_mensageiro =  n_id_mensageiro 
            INNER JOIN igrejas_asb2019 ON id_igreja = igreja_id_igreja 
            ORDER BY id_sessao";
	
	$resultado = $conn->query($sql) or die($conn->error);
	$qtd = $resultado->num_rows;
	if( $qtd > 0){
        ?>
             
            <br>
<div class="row">
          <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Membros da sessão <?php echo $sessao;?></h4>
            <div class="card-body">
            <?php
                print "<table class='table table-bordered table-striped table-hover'>";
                print "<tr>";
                print "<th>Nome Mensageiro</th>";
                print "<th>Igreja do mensageiro</th>";  
                print "</tr>";
		while($row = $resultado->fetch_assoc()){
            if($row["sessao_n"]==$sessao) {
                
			if(in_array($row["nome_igreja"],$info)){
                $qtdp += 1;
            }else{
                array_push($info,$row["nome_igreja"]);
                $qtdi += 1;
                $qtdp += 1;
            }
            print "<tr>";
			
			
			print "<td>".$row["nome_mensageiro"]."</td>";
			print "<td>".$row["nome_igreja"]."</td>";
			print "</tr>";
		}}
         print "<p>Temos <b>$qtdp</b> pessoas nesta sessão(s)</p>";
		print "</table>";
	}else{
		print "Não encontrou resultados";
	} 
                ?>
              
            </div>
          </div>
        </div>
        
          
          
    <!-- carde 1 fim --------------->    
          
    <!-- carde 2 --------------->    
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Igrejas representadas</h4>
            <div class="card-body">
                <p class="card-text">Nessa Sessão temos <b><?php print_r ($qtdi); ?></b> Igrejas representadas</p>
                <p class="card-text"><?php
                    print "<table class='table table-bordered table-striped table-hover'>";
                    print "<tr>";
                    print "<th>Igreja Representada</th>";
                    print "</tr>";
                    foreach($info as $igr){
                        print "<td>".$igr."</td>";
                        
                        print "</tr>";
                        
                    } ?></p>
            </div>
            
          </div>
        </div>
    <!-- carde 2 fim --------------->  
                
                </div>
		</div>
	
