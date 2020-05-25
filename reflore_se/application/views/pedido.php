<?php
$query = $this->session->get_userdata("usuario logado");
foreach($query as $row){
	$row['cnpj'];
}
if(isset($_SESSION['usuario logado']) && $row['cnpj'] == 0){

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pedido</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link do CSS -->
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/pedido.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/menu-2.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/style.css"><!-- Style do rodapé -->

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
                        <li><a href="http://localhost/reflore_se/index.php/principal/pedido" class="nav-link pagat">Fazer Pedido</a></li>
                        <li><a href="http://localhost/reflore_se/index.php/principal/minhaconta" class="nav-link">Minha Conta</a></li>
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

<!-- Formulário -->
<div class="form">
	<form action="fazerpedido" method="post" class="was-validated">
		<!-- Nome e endereço do usuario -->
		<?php
			$query = $this->session->get_userdata("usuario logado");
				foreach($query as $row){
					echo "<label style='display: block;' for='nome_user_pf' id='nome_user_pf'>".$row['nome']."</label>";
					echo "<label>".$row['endereco']."</label>";
				}
		?>
		<!-- escolher uma instituição -->
		<div class="form-group">
			<select name="instituicao" class="custom-select" id='selectInst'>
				<option disabled selected style="display:none;">Selecione a instituição mais próxima</option>
				<?php
					$query = $this->db->get_where("usuario",array('cnpj!=' => '0'));
					foreach($query->result_array("usuario") as $user){
						echo "<option class='userpj' id='".$user['nome']."' name='nome_inst' value='".$user['endereco']."'>".$user['nome']."</option>";
					}
				?>
			</select>
			<div class="valid-feedback"></div>
			<p id="displayValue" value="" style="margin-bottom: 0;"></p>
			<input id="nome2" name="nome_inst" value="" style="display:none;">
		</div>
		<!-- Nome da flora escolhida - será pego em php -->
		<div class="form-group">
			
			<input type="text" class="form-control" id="uname" placeholder="Nome da muda" name="codigo_mudas" value="<?php $codigo = $this->input->get('id'); echo $codigo; ?>">
		</div>
		<!-- escolher um local para reflorestar, é opcional - será pego em php -->
		<div class="form-group">
			
			<select name="local" class="custom-select">
				<option selected>Selecione um local próximo a você</option>
				<option value="endereco">Endereço</option>
				<option value="endereco">Endereço</option>
				<option value="endereco">Endereço</option>
			</select>
		</div>
		<!-- Data atual -->
		<div class="form-group"> 
			<?php 
				echo "<label for='data_pedido'>Data do pedido: ".date('d/m/Y')."</label>"; 
			?>
		</div>
		<button type="submit" class="btn">Finalizar Pedido</button>
	</form>
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
	<script src="http://localhost/reflore_se/assets/js/script.js"></script>
</body>
</html>
<?php 
}else{
    echo header('Location:login');
}