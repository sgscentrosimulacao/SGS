<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style_index.css">
    <title>SGS - Página Principal</title>
</head>
<body>
<nav class="navbar">
    <!--navbar-fixed-top-->
    <div class="container-fluid">
        <div class="navbar-header" id="navLogo">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"
                    style="background-color: #55a1fd">
                <span class="icon-bar" style="background-color: #a0c7e7"></span>
                <span class="icon-bar" style="background-color: #a0c7e7"></span>
                <span class="icon-bar" style="background-color: #a0c7e7"></span>
            </button>

            <a class="navbar-brand zeroPadding" href="index.php"><img src="..\img\SGS_Logo.png"
                                                                      id="logoImg"></a>
            <div class="col-lg" id="divLogo"></div>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" id="navbarLetras">
                <li class="inativo"><a href="index.php" id="navbarLetras">Logout</a></li>
                <li class="inativo navbar-inverse ativo"><a href="paginaPrincipalAdmin.php" id="navbarLetras">Página Principal</a></li>
                <li class="inativo"><a href="#" id="navbarLetras">Sobre</a></li>
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>-->
        </div>
    </div>
</nav>

<div class="row">
    <div class="col-md-4 zeroPadding">
        <div class="row">
        <div class="col-md-2" style="float: none">

        </div>
            <div class="col-md-10" style="float: none" >
                <fieldset style="left: 0; margin-left: 50px; margin-right: 50px">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1><span class="label label-default" id="alinhadoCentro">Cadastrar</span></h1>
                            <div>
                                <button type="button" class="btn btn-default" id="leftNavBarButtons"><a href="cadastroUsuario.php"> Usuário</a></button>
                            </div>
                            <div>
                            <div>
                                <button type="button" class="btn btn-default" id="leftNavBarButtons">Disciplina</button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-default" id="leftNavBarButtons">Item</button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-default" id="leftNavBarButtons">Instituicão</button>
                            </div>
                                <button type="button" class="btn btn-default" id="leftNavBarButtons">Conselho</button>
                            </div>


                            <h1><span class="label label-default" id="alinhadoCentro">Consultar</span></h1>
                            <div>
                                <button type="button" class="btn btn-default" id="leftNavBarButtons">Usuário</button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-default" id="leftNavBarButtons">Disciplina</button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-default" id="leftNavBarButtons">Sala</button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-default" id="leftNavBarButtons">Calendário</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="col-md-2">

        </div>
        </div>
    </div>

    <div class="col-md-8 zeroPadding">
        <fieldset style="left: 0; margin-bottom: 20%; margin-left: -100px; margin-right: 20px; position: inherit">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <img src="../img/SGS_LogoMarca.png">
            </div>
            <div class="col-md-2">
            </div>
        </fieldset>
    </div>

</div>

<footer class="container-fluid containet-fixed-bottom text-center" id="footer">
    <div class="row">
        <div class="col-md-4" id="footerDivLeft">
            <!--<img src="../img/informatica-biomedica-5.png" id="footerImgLeft">-->
        </div>
        <div class="col-md-4" id="footerText">
            <p>Powered by Informática Biomédica - UFCSPA</p>
        </div>
        <div class="col-md-4" id="footerDivRight">
            <img src="../img/UFCSPA MINI.png" id="footerImgRight">
        </div>
    </div>

</footer>
</body>
</html>

<?php


?>