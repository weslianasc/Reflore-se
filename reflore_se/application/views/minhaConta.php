<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Minha Conta</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link do CSS -->
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/minhaConta.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/menu-2.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/style.css"><!-- Style do menu e rodapé -->

    <!-- Link do Icone -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Link do CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Link do JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Link do Template Point (menu)-->
    <link rel="stylesheet" href="http://localhost/reflore_se/assets/fonts/p_fonts/icomoon/style.css">
    <link rel="stylesheet" href="http://localhost/reflore_se/assets/css/p_css/style.css">

    <!-- Link do Template Story (galeria)-->
    <link rel="stylesheet" href="http://localhost/reflore_se/assets/css/s_css/main.css" />
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div class="site-wrap">
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-section-header">
			<div class="site-mobile-menu-close mt-3">
				<span class="icon-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>
	<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-6 col-xl-2">
					<h1 class="mb-0 site-logo"><a href="http://localhost/reflore_se/index.php/principal" class="h2 mb-0">Reflore - se</a></h1>
				</div>
				<div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="http://localhost/reflore_se/index.php/principal" class="nav-link">Home</a></li>
                        <li><a href="http://localhost/reflore_se/index.php/principal/flora" class="nav-link">Mudas</a></li>
                        <li><a href="http://localhost/reflore_se/index.php/principal/pedido" class="nav-link">Fazer Pedido</a></li>
                        <li><a href="http://localhost/reflore_se/index.php/principal/minhaconta" class="nav-link pagat">Minha Conta</a></li>
                        <li><a href="http://localhost/reflore_se/index.php/principal/sair" class="nav-link">Sair</a></li>
                    </ul>
                </nav>
				</div>
				<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
					<a href="#" class="site-menu-toggle js-menu-toggle text-black float-right">
						<span style="color: white;" class="icon-menu h3"></span>
					</a>
				</div>
			</div>
		</div>
	</header>
</div>
<!-- Perfil do usuário - essas informações serão preenchidas pelo proprio usuário no cadastro-->
<!-- Header -->
<header id="header">
    <div class="inner">
        <div class="image avatar">
            <img src="http://localhost/reflore_se/assets/img/user3.png">
        </div>
        <?php
        $query = $this->session->get_userdata("usuario logado");
            foreach($query as $row){
                $sexo = $row['sexo'];
                //  echo $sexo;
                if($sexo == 'F'){
                    $sexo = 'Feminino'; 
                }else if($sexo == 'M'){
                    $sexo = 'Masculino';
                }
            }
        ?> 
        <h4><?php echo "Nome: ".$row['nome']; ?></h4>
        <h4><?php echo "Data de Nascimento: ".date('d/m/Y',  strtotime($row["data_nascimento"])); ?></h4>
        <h4><?php echo "Sexo: ".$sexo;?></h4>
        <h4><?php echo "Endereco: ".$row['endereco'];?></h4>
        <h4><?php echo "Email: ".$row['email'];?></h4>
        <h4><?php echo "<a href='#' data-target='#abriModel' data-toggle='modal'>Editar dados</a>";?></h4>      
    </div>  
</header>




<!-- Main -->
<div id="main"><br>
<h2>Histórico de pedidos</h2><br>
    <div class="tabela">            
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome da muda</th>
                    <th>Status</th>
                    <th>Pegar muda até</th>
                    <th>Instituição</th>
                    <th>Local</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nome = $row['nome'];
                $query = $this->db->get_where("pedido",array('codigo_usuario=' => $nome));
                foreach($query->result_array("pedido") as $item){
                    echo 
                    "
                    <tr>
                        <td>".$item['codigo_mudas']."</td>";
                        //$this->db->get('pedido');
                        $status =  $this->db->get_where("pedido",array('status=' => $item['status']));
                        if($status = $item['status']){
                            echo  "<td>".$item['status']."</td>";
                        }else{
                            echo "<td>Em espera</td>";
                        }
                        $data_entrega =  $this->db->get_where("pedido",array('data_entrega=' => $item['data_entrega']));
                        if($data_entrega = $item['data_entrega']){
                            $datanova = date('d/m/Y',  strtotime($data_entrega));
                            echo  "<td>".$datanova ."</td>";
                        }else{
                            echo "<td>Em espera</td>";
                        }
                        $data = $item['data_entrega'];
                        $datanova = date('d/m/Y',  strtotime($data));
                        
                        // echo "<td>".$datanova."</td>";
                        echo "<td>".$item['codigo_instituicao']."</td>
                        <td></td>
                        <td>"; echo anchor('http://localhost/reflore_se/index.php/Principal/delete_row?id='.$item["codigo"], 'Excluir', 'id="$item["codigo"]"'); echo "</td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div> 
</div>
<!--Modal-->
<div class="modal fade" id="abriModel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>EDITAR DADOS</h3>   
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true" style="font-size:30px !important;border: none !important;">&times;</span>
                </button>
            </div>
            <div class="form">
                <form action="editarDados" method="post" style="">
                    <div class="modal-body">
                        <div style="display: inline-block; width: 100%;">
                            <input style="width: 100% !important; margin-bottom: 2%;" name="nome" type="text" value="<?php echo $row['nome']; ?>">
                            <input style="float: left !important;" name="data_nascimento" type="text" value="<?php echo date('d/m/Y',  strtotime($row["data_nascimento"])); ?>">
                            <input style="float: left !important; margin-bottom: 2%; margin-left: 2%;" name="sexo" type="text" value="<?php echo $sexo; ?>">
                            <input style="float: left !important;" name="endereco" type="text" value="<?php echo $row['endereco']; ?>">
                            <input style="float: left !important; margin-bottom: 2%;  margin-left: 2%;" name="cpf" type="text" value="<?php echo $row['cpf']; ?>">
                            <input style="float: left !important;" name="email" type="text" value="<?php echo $row['email']; ?>">
                            <input style="float: left !important; margin-bottom: 5%; margin-left: 2%;" name="senha" type="text" value="<?php echo $row['senha']; ?>">
                        </div>
                        
                        <div class="modal-footer" style="padding: 0px !important; margin: 0px !important;">
                            <button type="submit" class="editar" class="btn btn-danger" style="margin: 0px !important;">Confirmar modificação</button>
                        </div>
                    </div>
                </form>
            <div>
        </div>
    </div>
</div>

<script>
            function openNav() {
                document.getElementById("mysidebar").style.width = "250px";
                            
            }
                    
            function closeNav() {
                document.getElementById("mysidebar").style.width = "0";
            }
        </script>

        <!-- JS do point -->
        <script src="http://localhost/reflore_se/assets/js/p_js/jquery-3.3.1.min.js"></script>
        <script src="http://localhost/reflore_se/assets/js/p_js/jquery-migrate-3.0.1.min.js"></script>
        <script src="http://localhost/reflore_se/assets/js/p_js/owl.carousel.min.js"></script>
        <script src="http://localhost/reflore_se/assets/js/p_js/jquery.stellar.min.js"></script>
        <script src="http://localhost/reflore_se/assets/js/p_js/jquery.countdown.min.js"></script>
        <script src="http://localhost/reflore_se/assets/js/p_js/aos.js"></script>
        <script src="http://localhost/reflore_se/assets/js/p_js/main.js"></script>
        <script src="http://localhost/reflore_se/assets/js/status.js"></script>
</body>
</html>