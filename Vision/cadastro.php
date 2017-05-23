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
                <li class="active navbar-inverse ativo"><a href="cadastro.php" id="navbarLetras">Cadastrar</a></li>
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
                <fieldset >
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
                            <!--150px-->
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

                    <div class="col-md-12">
                        <div class="editor-label col-md-2" id="cpfLabel">
                            <label for="cpfLabel" id="labelsLogin">CPF</label>
                        </div>
                        <div class="editor-label form-inline" id="cpfLabel" style="padding-bottom:5px">
                            <input class="form-control" id="fieldCpf" name="fieldCpf" placeholder="Digite seu CPF"
                                   style="width: 100%" type="text" >
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="editor-label col-md-2" id="telefoneLabel">
                            <label for="telefoneLabel" id="labelsLogin">Telefone</label>
                        </div>
                        <div class="editor-label form-inline" id="telefoneLabel" style="padding-bottom:5px">
                            <input class="form-control" id="fieldTelefone" name="fieldTelefone" maxlength="15" placeholder="Digite seu telefone"
                                   style="width: 100%" type="text" >
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

                    <!--<div class="col-md-12">
                        <div class="editor-label col-md-6" id="numeroConLabel">
                            <label for="numeroConLabel" id="labelsLogin">Profissão</label>
                        </div>
                        <div class="editor-label form-inline" id="numeroConLabel" style="padding-bottom:5px">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Escolha
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Médico</a></li>
                                    <li><a href="#">Fisioterapeuta</a></li>
                                    <li><a href="#">Enfermeiro</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>-->



                    <div style="margin-left:30px">
                        <p style="margin-bottom:10px">
                            <input id="cadastrar" type="submit" value="Enviar" name="submit" class="btn btn-success">
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
            <img src="../img/UFCSPA MINI.png" id="footerImgRight" href="ufcspa.edu.br">
        </div>
    </div>

</footer>
</body>
</html>
<?php

?>