<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>SGS - Centro Simulação Santa Casa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style_index.css">

</head>
<body>

<nav class="navbar">
    <!--navbar-fixed-top-->
    <div class="container-fluid">
        <div class="navbar-header" id="navLogo">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"
                    style="background-color: #5cb3fd">
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
                <li class="active navbar-inverse ativo"><a href="index.php" id="navbarLetras">Página Inicial</a></li>
                <li class="inativo"><a href="cadastro.php" id="navbarLetras">Cadastrar</a></li>
                <li class="inativo"><a href="#" id="navbarLetras">Sobre</a></li>
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

                <!--<h1 class="tagline">Business Name or Tagline</h1>-->
            </div>
        </div>
    </div>
</header>
<div class="corpo">
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav zeroPadding">
            <!--<p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>-->
        </div>
        <div class="col-sm-8 text-left" id="ColunaDoMeio">
           <!-- <img src="../img/SGS_Background.png">-->

            <form action="./../Control/autenticacao.php" method="post">

            <fieldset>
                <legend><p id="labelsLogin">Login</p></legend>

                <div class="col-md-12">
                    <div class="editor-label col-md-2" id="userLabel">
                        <label for="userLabel" id="labelsLogin">Usuário</label>
                    </div>
                    <div class="editor-label form-inline" id="userLabel" style="padding-bottom:5px">
                        <input class="form-control" id="fieldUser" name="fieldUser" placeholder="Digite seu usuário"
                               style="width: 100%" type="text">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="editor-label col-md-2" id="senhaLabel">
                        <label for="senhaLabel" id="labelsLogin">Senha</label>
                    </div>
                    <div class="editor-label form-inline" id="senha" style="padding-bottom:5px">
                        <input class="form-control" id="fieldSenha" name="fieldSenha" placeholder="Digite sua senha"
                               style="width:100%" type="password">



                        <p style="margin-left: 40%"><input type="checkbox" name="mostrarSenha" id="mostrarSenha"
                                                           value="Mostrar senha">Mostrar senha</p>


                    </div>
                </div>

                <div style="margin-left:30px">
                    <p style="margin-bottom:10px">
                        <input id="logar" type="submit" value="Entrar" class="btn btn-success">
                        <a class="btn btn-info" href="cadastro.php" id="semConta">Cadastrar</a>
                        <a class="btn btn-warning" href="#">Esqueci minha senha</a>
                    </p>
                </div>

            </fieldset>
            </form>
        </div>
        <div class="col-sm-2 sidenav zeroPadding"></div>

       <!--<div class="col-sm-2 sidenav">
                <div class="well">
                    <p>TESTE</p>
                </div>
                <div class="well">
                    <p>TESTE</p>
                </div>
        </div>-->
    </div>
</div>
</div>
<footer class="container-fluid containet-fixed-bottom text-center" id="footer">
    <!-- -->
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
