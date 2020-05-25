<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Flora</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link do CSS -->
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/informacao_flora.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/menu-2.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/style.css"><!-- Style do rodapé -->

    <!-- Link do Icone -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Link do CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- Link do Template Point (menu)-->
	<link rel="stylesheet" href="http://localhost/reflore_se/assets/fonts/p_fonts/icomoon/style.css">
	<link rel="stylesheet" href="http://localhost/reflore_se/assets/css/p_css/style.css">

    <!-- Link do Template Story (galeria)-->
    <link rel="stylesheet" href="http://localhost/reflore_se/assets/css/s_css/main.css" />
        <noscript><link rel="stylesheet" href="http://localhost/reflore_se/assets/css/s_css/noscript.css" /></noscript>

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
					<h1 class="mb-0 site-logo"><a href="http://localhost/reflore_se/index.php/principal/" class="h2 mb-0">Reflore - se</a></h1>
				</div>
				<div class="col-12 col-md-10 d-none d-xl-block">
					<nav class="site-navigation position-relative text-right" role="navigation">
						<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
							<li><a href="http://localhost/reflore_se/index.php/principal" class="nav-link">Home</a></li>
							<li><a href="http://localhost/reflore_se/index.php/principal/flora" class="nav-link">Mudas</a></li>
                            <li><a href="http://localhost/reflore_se/index.php/principal/pedido" class="nav-link">Fazer Pedido</a></li>
                                <?php
                                    if(isset($_SESSION['usuario logado'])){
                                    echo "
                                    <li class='nav-item'>
                                        <a class='nav-link' href='http://localhost/reflore_se/index.php/principal/minhaconta'>Minha Conta</a>
                                        </li>
                                        <li class='nav-item'>
                                        <a class='nav-link' href='http://localhost/reflore_se/index.php/principal/sair'>Sair</a>
                                        </li>";
                                    }else{
                                    echo "
                                    <li class='nav-item'>
                                        <a class='nav-link' href='http://localhost/reflore_se/index.php/principal/login'>Entrar</a>
                                    </li>";
									}
                                ?>
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
<br>
<div class="total">
    <img class="img-fluid float-left" src="http://localhost/reflore_se/assets/img/planta2.jpg">
    <div class="desc">
            <?php 
                $codigo = $this->input->get('id'); 
                $query = $this->db->get_where("mudas",array('codigo=' => $this->input->get('id')));
                foreach($query->result_array("mudas") as $item){
                    echo "<h2 class='text'>".$item["nome"]."</h2>";
                    echo "<h5 class='text'>Descrição</h5>";
                    echo $item["desc_mudas"];
                }
            ?>   
    </div>
</div>
<br>
<!-- RODAPÉ -->
<div class="footer">
	<div class="row m-3">
		<div class="col logo mt-3">
			<a class="icone" href="http://localhost/reflore_se/index.php/principal/">
				<img src="http://localhost/reflore_se/assets/img/logooficial.png" width="80" height="80" class="d-inline-block align-top" alt="">
			</a>
			<div class="slogan mt-4">Slogan.</div>
		</div>

		<div class="col mt-3">
			<h5 style="font-size: 30px;">Parcerias</h5>
			<a class="parceria" href="#">Borque dos Namorados</a><br>
			<a class="parceria" href="#">IF-Central</a>
		</div>

		<div class="col mt-3">
			<h5 style="font-size: 30px;">Redes Sociais</h5>
			<a href=""><i class="fab fa-facebook-f rounded-circle"></i></a>
			<a href=""><i class="fab fa-instagram rounded-circle"></i></a>
			<a href=""><i class="fab fa-twitter rounded-circle"></i></a>
			<a href=""><i class="fab fa-youtube rounded-circle"></i></a>
		
		</div>
	</div>
</div>

<div class="copyright p-2 text-center text-white">
	&copy; 2019 - Reflore-se
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
</body>
</html>