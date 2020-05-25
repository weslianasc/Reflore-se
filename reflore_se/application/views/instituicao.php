<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Instituição</title>

  <!-- Link do JS Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
	integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
	integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  <!-- Link do CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link href="http://localhost/reflore_se/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="http://localhost/reflore_se/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="http://localhost/reflore_se/assets/css/in_css/style.css" rel="stylesheet">
  <link href="http://localhost/reflore_se/assets/css/in_css/style-responsive.css" rel="stylesheet">
  <script src="http://localhost/reflore_se/assets/lib/chart-master/Chart.js"></script>
  

  </head>

<body>
<div class="form">
 <form action="salvarStatus" method="post" ajax="true">
  <section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" style="color:#19A861;" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="#" class="logo"><b style="font-weight: 400;">Reflore - se</b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" style="color:white;" href="#" data-toggle="modal" data-target="#ExemploModalCentralizado1">Adicionar Muda</a></li>
          <li><a class="logout" style="color:white;" href="http://localhost/reflore_se/index.php/principal/sair">Sair</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="http://localhost/reflore_se/assets/img/user3.png" class="img-circle" width="80"></a></p>
          <br>
          <?php
            $query = $this->session->get_userdata("usuario logado");
            foreach($query as $row){}
          ?> 
        <h5 class="centered" style="color: white;"><?php echo "Nome: ".$row['nome']; ?></h5>
        <br>
        <h5 class="centered" style="color: white;"><?php echo "Endereco: ".$row['endereco'];?></h5>
        <br>
        <h5 class="centered" style="color: white;"><?php echo "Email: ".$row['email'];?></h5>
        <br>
        <h5 class="centered"><?php echo "<a href='#' style='color: white;' data-target='#abriModel' data-toggle='modal'>Editar dados</a>";?></h5> 
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
        
    <!--main content start-->

    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>PEDIDOS ANUAIS</h3>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>100</span></li></br></br>
                <li><span>70</span></li>
                <li><span>50</span></li>
                <li><span>30</span></li>
                <li><span>10</span></li>
              </ul>
              <div class="bar">
                <div class="title">JAN</div>
                <div class="value tooltips" data-original-title="15" data-toggle="tooltip" data-placement="top">15%</div>
              </div>
              <div class="bar ">
                <div class="title">FEV</div>
                <div class="value tooltips" data-original-title="50" data-toggle="tooltip" data-placement="top">50%</div>
              </div>
              <div class="bar ">
                <div class="title">MAR</div>
                <div class="value tooltips" data-original-title="60" data-toggle="tooltip" data-placement="top">60%</div>
              </div>
              <div class="bar ">
                <div class="title">ABR</div>
                <div class="value tooltips" data-original-title="85" data-toggle="tooltip" data-placement="top">85%</div>
              </div>
              <div class="bar">
                <div class="title">MAI</div>
                <div class="value tooltips" data-original-title="32" data-toggle="tooltip" data-placement="top">32%</div>
              </div>
              <div class="bar ">
                <div class="title">JUN</div>
                <div class="value tooltips" data-original-title="62" data-toggle="tooltip" data-placement="top">62%</div>
              </div>
              <div class="bar">
                <div class="title">JUL</div>
                <div class="value tooltips" data-original-title="75" data-toggle="tooltip" data-placement="top">75%</div>
              </div>
            </div>
            <!--custom chart end-->
            <!-- <div class="row mt">
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header" style="background: rgba(15, 87, 63, 0.671) !important">
                    <h5>DISK SPACE</h5>
                  </div>
                  <canvas id="serverstatus03" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 60,
                        color: "#1C1C1C"
                      },
                      {
                        value: 40,
                        color: "#fffffd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <h3>60% USED</h3>
                </div>
              </div> -->
              <!-- /col-md-4 -->
              <!-- <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>DROPBOX STATICS</h5>
                  </div>
                  <canvas id="serverstatus02" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 60,
                        color: "#1c9ca7"
                      },
                      {
                        value: 40,
                        color: "#f68275"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <p>April 17, 2014</p>
                  <footer>
                    <div class="pull-left">
                      <h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
                    </div>
                    <div class="pull-right">
                      <h5>60% Used</h5>
                    </div>
                  </footer>
                </div> -->
                <!--  /darkblue panel -->
              <!-- </div> -->
              <!-- /col-md-4 -->
              <!-- <div class="col-md-4 col-sm-4 mb"> -->
                <!-- REVENUE PANEL -->
                <!-- <div class="green-panel pn">
                  <div class="green-header" style="background: rgba(15, 87, 63, 0.671) !important">
                    <h5>REVENUE</h5>
                  </div>
                  <div class="chart mt">
                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
                  </div>
                  <p class="mt"><b>$ 17,980</b><br/>Month Income</p>
                </div>
              </div> -->
              <!-- /col-md-4 -->
            <!-- </div> -->
            <br>
            <!-- /row -->
            <div class="showback">
              <h4>MUDAS MAIS POPULARES</h4>
              <h5>MUDA x</h5>
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
              <h5>MUDA x</h5>
              <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                  <span class="sr-only">20% Complete</span>
                </div>
              </div>
              <h5>MUDA x</h5>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">60% Complete (warning)</span>
                </div>
              </div>
              
            </div>
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <div class="col-lg-3 ds">
            <!-- AQUI VAI ESTAR LISTADO TODOS OS PEDIDOS QUE ESTÃO PENDENTES -->
            <br/>
            <h4 class="centered mt" style='color: white !important;'>PEDIDOS PENDENTES</h4>
            <!-- One Activity -->
            <div id="fora">
            <?php
                $nome = $row['nome'];
                $query = $this->db->get_where("pedido_inst",array('codigo_instituicao=' => $nome));
                foreach($query->result_array("pedido") as $item){
                    echo 
                    "
                    <div class='desc'>
                        <br>
                        <div class='thumb' data-toggle='modal'>
                            <span class='badge bg-theme'><i class='fa fa-clock-o'></i></span>
                        </div>
                        <div class='details'>
                            <p>
                            <muted>--:--</muted>
                            <br>
                            <a href='#' data-target='#ExemploModalCentralizado' data-toggle='modal' id='".$item['codigo']."' class='usuario' >".$item['codigo_usuario']." - ".$item['codigo_mudas']."</a>
                            </p>
                        </div>
                    </div>
                    ";
                }

            ?>
            </div>
          </div>
          <!-- Botão para acionar modal -->
          <!--Modal-->
              <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                          <div class="modal-body">
                          <div style="display: inline-flex;">
                            <p>Autor do pedido:<p id='id_user'></p></p>
                          </div>
                          <div style="display: block;">
                            Definir data de entrega da muda: <input name="data" type="date">
                            <input name="info_user" type="text" id="info_user" style="display: none;"> 
                            <input name="status" type="text" id="aprovado" style="display: none;">
                            <input name="status1" type="text" id="negado" style="display: none;">
                          </div>
                          <br>
                          <div class="modal-footer">
                              <button type="submit" onclick="negar();" class="btn btn-danger">Negar pedido</button>
                              <button type="submit" onclick="aprovar();" class="btn btn-success">Aprovar pedido</button>
                          </div>
                        </form>
                        <div>
                        </div>
                      </div>
                  </div>
              </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--Modal para editar dados-->
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
                            <input style="float: left !important;" name="endereco" type="text" value="<?php echo $row['endereco']; ?>">
                            <input style="float: left !important; margin-bottom: 2%;  margin-left: 2%;" name="cnpj" type="text" value="<?php echo $row['cnpj']; ?>">
                            <input style="float: left !important;" name="email" type="text" value="<?php echo $row['email']; ?>">
                            <input style="float: left !important; margin-bottom: 5%; margin-left: 2%;" name="senha" type="text" value="<?php echo $row['senha']; ?>">
                        </div>
                        
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success">Confirmar modificação</button>
                      </div>
                    </div>
                </form>
            <div>
        </div>
    </div>
</div>








<!-- <div class="modal fade" id="abriModel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Editar dados</h3>   
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true" style="font-size:30px !important;border: none !important;">&times;</span>
                </button>
            </div>
            <div class="form">
                <form action="editarDados2" method="post" style="">
                    <div class="modal-body">
                        <div style="display: block;">
                            <input name="nome" type="text" value="<?php echo $row['nome']; ?>"><br>
                            <input name="endereco" type="text" value="<?php echo $row['endereco']; ?>"><br>
                            <input name="cnpj" type="text" value="<?php echo $row['cnpj']; ?>"><br>
                            <input name="email" type="text" value="<?php echo $row['email']; ?>"><br>
                            <input name="senha" type="text" value="<?php echo $row['senha']; ?>"><br>
                        </div>
                        <br>
                        <div class="modal-footer" style="padding: 0px !important; margin: 0px !important;">
                            <button type="submit" class="editar" class="btn btn-danger" style="margin: 0px !important;">Confirmar modificação</button>
                        </div>
                    </div>
                </form>
            <div>
        </div>
    </div>
</div> -->
    <!--main content end-->
  </section>

<!--Modal para adicionar mudas-->
<div class="modal fade" id="ExemploModalCentralizado1" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h3 class="modal-title" id="TituloModalCentralizado">ADICIONAR NOVA MUDA</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true" style="font-size:30px !important;border: none !important;">&times;</span>
                </button>
          </div>
          <div class="form">
            <form action="adicionarmuda" method="post" style="">
              <div class="modal-body">
                  <label>Nome da muda: </label><br>
                  <input type="text" name="nome" style="width:100% !important;"><br>
                  <label>Descrição da muda: </label><br>
                  <textarea name="desc_mudas" style="width:100%; height: 10em !important;"></textarea><br>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Adicionar nova muda</button>
              </div>
            </form>
          <div>
        </div>
    </div>
</div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="http://localhost/reflore_se/assets/lib/jquery/jquery.min.js"></script>

  <script src="http://localhost/reflore_se/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="http://localhost/reflore_se/assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <!-- <script src="lib/jquery.scrollTo.min.js"></script> -->
  <script src="http://localhost/reflore_se/assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="http://localhost/reflore_se/assets/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="http://localhost/reflore_se/assets/lib/common-scripts.js"></script>
  <!-- <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script> -->
  <!-- <script type="text/javascript" src="lib/gritter-conf.js"></script> -->
  <!--script for this page-->
  <script src="http://localhost/reflore_se/assets/lib/sparkline-chart.js"></script>
  <!-- <script src="lib/zabuto_calendar.js"></script> -->
  <script src="http://localhost/reflore_se/assets/js/status.js"></script>
  
</body>
</html>