<?php
include "../Control/sessionControl.php";
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style_index.css">
    <title>SGS - Cadastro Conselho</title>
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
                <li class="inativo navbar-inverse ativo"><a href="paginaPrincipalAdmin.php" id="navbarLetras">Página Principal</a></li>
                <li class="inativo"><a href="#" id="navbarLetras">Sobre</a></li>
                <li class="inativo"><a href="index.php" id="navbarLetras">Logout</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right" id="labelUsuario">
                <li>
                    <h4><span class="label label-default">
                        <?php

                        echo "Olá, ".$_SESSION['nomeUsuario'];


                        ?>
                    </span></h4>
                </li>
            </ul>


            <!--<ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>-->
        </div>
    </div>
</nav>

<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <fieldset style="left: 0; margin-left: 50px;">
                    <div class="row">
                        <div class="col-sm-12">

                            <h1><span class="label label-default" id="alinhadoCentro">Cadastrar</span></h1>

                            <div>
                                <a href="cadastroUsuarioPP.php"><button type="button" class="btn btn-default"
                                                                        id="leftNavBarButtons"> Usuário</button></a>
                            </div>
                            <div>
                                <a href="cadastroDisciplina.php"><button type="button" class="btn btn-default"
                                                                         id="leftNavBarButtons">Disciplina</button></a>
                            </div>
                            <div>
                                <a href="cadastroItem.php"><button type="button" class="btn btn-default"
                                                                   id="leftNavBarButtons">Item</button></a>
                            </div>
                            <div>
                                <a href="cadastroInstituicao.php"><button type="button" class="btn btn-default"
                                                                          id="leftNavBarButtons">Instituicão</button></a>
                            </div>
                            <div>
                                <a href="cadastroConselho.php"><button type="button" class="btn btn-default"
                                                                       id="leftNavBarButtonsAtivo">Conselho</button></a>
                            </div>
                            <div>
                                <a href="cadastroSala.php"><button type="button" class="btn btn-default"
                                                                   id="leftNavBarButtons">Sala</button></a>
                            </div>




                            <h1><span class="label label-default" id="alinhadoCentro">Consultar</span></h1>



                            <div>
                                <a href="consultaUsuario.php"><button type="button" class="btn btn-default"
                                                                      id="leftNavBarButtons"> Usuário</button></a>
                            </div>
                            <div>
                                <a href="consultaDisciplina.php"><button type="button" class="btn btn-default"
                                                                         id="leftNavBarButtons">Disciplina</button></a>
                            </div>
                            <div>
                                <a href="consultaItem.php"><button type="button" class="btn btn-default"
                                                                   id="leftNavBarButtons">Item</button></a>
                            </div>
                            <div>
                                <a href="consultaInstituicao.php"><button type="button" class="btn btn-default"
                                                                          id="leftNavBarButtons">Instituicão</button></a>
                            </div>
                            <div>
                                <a href="consultaConselho.php"><button type="button" class="btn btn-default"
                                                                       id="leftNavBarButtons">Conselho</button></a>
                            </div>
                            <div>
                                <a href="consultaSala.php"><button type="button" class="btn btn-default"
                                                                   id="leftNavBarButtons">Sala</button></a>
                            </div>
                            <div>
                                <button type="button" class="btn btn-default" id="leftNavBarButtons">Calendário</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>

    <div class="col-md-8 zeroPadding">

        <form action="../Control/inserirConselho.php" method="post">

            <div class="col-md-12">
                <fieldset>
                    <legend id="labelsLogin"> Cadastrar Conselho</legend>

                    <div class="col-md-12">
                        <div class="editor-label col-md-6">
                            <label for="nomeConselho" id="labelsLogin">Nome do Conselho</label>
                        </div>
                        <div class="editor-label form-inline" style="padding-bottom: 5px">
                            <input class="form-control" id="fieldNomeConselho" name="fieldNomeConselho"
                                   placeholder="Insira o nome do conselho" style="width: 100%" type="text">
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
            </div>
        </form>
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