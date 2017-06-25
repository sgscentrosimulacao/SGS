<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>SGS - Centro Simulação Santa Casa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style_index.css">
    <script src="../js/controlersInicio.js"></script>

</head>
<body>
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header" id="navLogo">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"
                    style="background-color: #447d8d">
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
                <li class="inativo"><a href="index.php" id="navbarLetras">Página Inicial</a></li>
                <li class="inativo"><a href="cadastroUsuario.php" id="navbarLetras">Cadastrar</a></li>
                <li class="active navbar-inverse ativo"><a href="sobre.php" id="navbarLetras">Sobre</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="business-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" id="logoImgTop">

            </div>
        </div>
    </div>
</header>
<div class="corpo">
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-3 sidenav zeroPadding">
            </div>
            <div class="col-sm-6 text-left" id="ColunaDoMeio">
                <fieldset id="fieldsetPositionNone" style="margin-bottom: 0px;">
                    <legend class="ajusteTitulos" style="width: 130px" id="labelsLogin">Regimento</legend>
                    <div class="col-md-12">
                        <p>

                            Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                            Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                            Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                            Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                            Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                            Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto


                        </p>
                    </div>



                </fieldset>

                <fieldset id="fieldsetPositionNone" style="margin-bottom: 0px;">
                    <legend class="ajusteTitulos" style="width: 190px" id="labelsLogin">Desenvolvedores</legend>

                    <div class="col-md-12">
                        <p>

                            Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                            Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                            Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                            Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                            Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                            Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto


                        </p>
                    </div>



                </fieldset>
                <img src="../img/SGS_LogoMarca.png">
            </div>
            <div class="col-sm-3 sidenav zeroPadding"></div>

        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>