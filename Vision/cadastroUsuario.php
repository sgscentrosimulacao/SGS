<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style_index.css">
    <title>SGS - Cadastro</title>
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
                <li class="inativo"><a href="index.php" id="navbarLetras">Página Inicial</a></li>
                <li class="active navbar-inverse ativo"><a href="cadastroUsuario.php" id="navbarLetras">Cadastrar</a></li>
                <li class="inativo"><a href="#" id="navbarLetras">Sobre</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
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
                <form action="./../Control/inserirUsuario.php" method="post">

                <fieldset style="margin-bottom: 25%">
                    <legend><p id="labelsLogin">Cadastro</p></legend>

                    <div class="col-md-12">
                        <div class="editor-label col-md-2" id="userLabel">
                            <label for="userLabel" id="labelsLogin">Usuário</label>
                        </div>
                        <div class="editor-label form-inline" id="userLabel" style="padding-bottom:5px">
                            <input class="form-control" id="fieldUser" name="fieldUser" placeholder="Insira um usuário"
                                   style="width: 100%" type="text">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="editor-label col-md-2" id="senhaLabel">
                            <label for="senhaLabel" id="labelsLogin">Senha</label>
                        </div>
                        <div class="editor-label form-inline" id="senha" style="padding-bottom:5px">
                            <input class="form-control" id="fieldSenha" name="fieldSenha" placeholder="Insira uma senha"
                                   style="width:100%" type="password" >
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="editor-label col-md-6" id="cSenhaLabel">
                            <label for="cSenhaLabel" id="labelsLogin">Confirmar Senha</label>
                        </div>
                        <div class="editor-label form-inline" id="cSenha" style="padding-bottom:5px">
                            <input class="form-control" id="fieldCSenha" name="fieldCSenha" placeholder="Confirme sua senha"
                                   style="width:100%" type="password">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="editor-label col-md-4" id="nomeLabel">
                            <label for="nomeLabel" id="labelsLogin">Nome Completo</label>
                        </div>
                        <div class="editor-label form-inline" id="nomeLabel" style="padding-bottom:5px">
                            <input class="form-control" id="fieldNome" name="fieldNome" placeholder="Insira seu nome completo"
                                   style="width: 100%" type="text" >
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="editor-label col-md-2" id="emailLabel">
                            <label for="emailLabel" id="labelsLogin">E-mail</label>
                        </div>
                        <div class="editor-label form-inline" id="emailLabel" style="padding-bottom:5px">
                            <input class="form-control" id="fieldEmail" name="fieldEmail" placeholder="Digite seu e-mail"
                                   style="width: 100%" type="email" >
                        </div>
                    </div>

                    <!--<div class="col-md-12">
                        <div class="editor-label col-md-2" id="telefoneLabel">
                            <label for="telefoneLabel" id="labelsLogin">Telefone</label>
                        </div>
                        <div class="editor-label form-inline" id="telefoneLabel" style="padding-bottom:5px">
                            <input class="form-control" id="fieldTelefone" name="fieldTelefone" maxlength="15" placeholder="Digite seu telefone"
                                   style="width: 100%" type="text" >
                        </div>
                    </div>-->

                    <div class="col-md-12">
                        <div class="editor-label col-md-2" id="conLabel" style="">
                            <label for="conLabel" id="labelsLogin">Conselho</label>
                        </div>
                        <div class="dropdown col-md-4" style="">
                            <select class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" name="dropConselho">
                                <option value="1">CREMERS</option>
                                <option value="2">COREN-RS</option>
                                <option value="3">CREFITO-5</option>
                            </select>
                        </div>
                        <div class="editor-label col-md-2" id="instituicaoLabel" style="padding-left: 0px">
                            <label for="instituicaoLabel" id="labelsLogin">Instituição</label>
                        </div>
                        <div class="col-md-4">
                            <select class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" name="dropInstituicao">
                                <option value="1">UFCSPA</option>
                                <option value="2">Santa Casa</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="editor-label col-md-6" id="numeroConLabel">
                            <label for="numeroConLabel" id="labelsLogin">Número do Conselho</label>
                        </div>
                        <div class="editor-label form-inline" id="numeroConLabel" style="padding-bottom:5px">
                            <input class="form-control" id="fieldNumeroCon" name="fieldNumeroCon" placeholder="Digite número do conselho"
                                   style="width: 100%" type="text" >
                        </div>
                    </div>

                    <div class="col-md-12" style="margin-left:30px">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">

                            <input id="cadastrar" type="submit" value="Enviar" name="submit" class="btn btn-success">

                        </div>
                        <div class="col-md-4">

                        </div>
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
<?php
include "footer.php";
?>
</body>
</html>
<?php

?>