<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link do CSS -->
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/cadastro.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/login.css">

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
</head>
<body>

<div class="form" id="form">
    <form action="novo" method="post" style="max-width:500px;margin:auto;">
        <div class="imgcontainer">
            <img src="http://localhost/reflore_se/assets/img/logooficial.png" alt="logo" class="avatar">
        </div>
        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Nome" name="nome">
        </div>
        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email">
        </div>
        
        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Senha" name="senha">
        </div>
        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Endereço" name="endereco">
        </div>

        <!--Pessoa Fisica e Juridica-->
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h7 class="mb-0">
                        <div class='form-row'>
                            <div class="radio">
                                <label><input onclick="getElementById('form').style.height = 'auto', getElementById('form').style.padding = '1% 0'" type="radio" name="optradio" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Pessoa Fisica</label>
                            </div>
                            <div class="radio">
                                <label><input onclick="getElementById('form').style.height = 'auto', getElementById('form').style.padding = '1% 0'" type="radio" name="optradio" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Pessoa Juridica</label>
                            </div>
                        </div>
                    </h7>
                </div>
            
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <ul class="list-group" class="panel-body">
                        <li class="list-group-item">
                            <div class='form-row'>
                                <div class="input-container">
                                    <i class="fa fa-envelope icon"></i>
                                    <input class="input-field" type="text" placeholder="CPF" name="cpf">
                                </div>
                                <div class="input-container">
                                    <i class="fa fa-envelope icon"></i>
                                    <input class="input-field" type="date" placeholder="Data de Nascimento" name="data_nascimento">
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="sexo" value="M">Masculino</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="sexo" value="F">Feminino</label>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="card">
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <ul class="list-group" class="panel-body">
                        <li class="list-group-item">
                            <div class='form-group cadastro' id="pessoaJ">
                                <div class="input-container">
                                    <i class="fa fa-envelope icon"></i>
                                    <input class="input-field" type="number" placeholder="CNPJ" name="cnpj">
                                </div>
                            </div>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
        </div>
        <button type="submit" class="btn">Cadastrar</button> 
        <hr>
        <div class="dsu">
            <span><a  class="su" href="http://localhost/reflore_se/index.php/principal/login">Já possui login? Faça login</a></span>
        </div>
    </form>
</div>

</body>
</html>