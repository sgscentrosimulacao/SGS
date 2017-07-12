<?php
    require_once "../control/selectDisciplina.php";
    require_once "../control/selectUsuario.php";

    $solicitacoes = ($resultSelectUsuarioNAprovado->num_rows);
    $solicitacoes2 = ($resultSelectAulasNAprovadas->num_rows);

?>

<nav class="navbar">
    <!--navbar-fixed-top-->
    <div class="container-fluid">
        <div class="navbar-header" id="navLogo">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"
                    style="background-color: #447d8d">
                <span class="icon-bar" style="background-color: white"></span>
                <span class="icon-bar" style="background-color: white"></span>
                <span class="icon-bar" style="background-color: white"></span>
            </button>

            <a class="navbar-brand zeroPadding" href="paginaPrincipalAdmin.php"><img src="..\img\SGS_Logo.png"
                                                                      id="logoImg"></a>
            <div class="col-lg" id="divLogo"></div>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" id="navbarLetras">
                <!--class="navbar-inverse ativo"-->
                <li class="inativo"><a href="paginaPrincipalAdmin.php" id="navbarLetras">Página Principal</a></li>
                <li class="inativo"><a href="sobreInside.php" id="navbarLetras">Sobre</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" id="labelUsuario">
                <li>
                    <a href="usuariosSolicitados.php" title="Usuários Solicitados" class="btn btn-primary" id="requisicoes" style="margin-top:10px;margin-right: 10px; padding-top: 0px; padding-bottom: 0px;"><i class="glyphicon glyphicon-user"></i>     <span class="badge"><?php echo $solicitacoes?></span></a>
                </li>
                <li>
                    <a href="aulasSolicitadas.php" title="Aulas Solicitadas" class="btn btn-primary" id="requisicoes" style="margin-top:10px;margin-right: 10px; padding-top: 0px; padding-bottom: 0px;"><i class="glyphicon glyphicon-book"></i>        <span class="badge"><?php echo $solicitacoes2?></span></a>
                </li>
                <li>
                    <h4><span class="label label-default">
                        <?php

                        echo "Olá, ".$_SESSION['nomeUsuario'];

                        echo "<a class=\"label label-default\" href='../control/logout.php' id='logout'>Sair</a>";
                        ?>
                    </span></h4>
                </li>
            </ul>
        </div>
    </div>
</nav>