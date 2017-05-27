<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style_index.css">
    <title>SGS - Cadastro Usuário</title>
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
        <div class="col-md-12" id="divConteudoMeio">

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
                        <div class="editor-label col-md-12" id="emailLabel">
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
                    </div>
                </fieldset>
            </form>
        </div>
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
<?php
/**
 * Created by PhpStorm.
 * User: carlo
 * Date: 27/05/2017
 * Time: 14:59
 */
?>