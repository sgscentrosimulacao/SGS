<?php
    require_once "../Control/selectDisciplina.php";
    $solicitacoes = ($resultSelectAulasNAprovadas->num_rows);
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

            <a class="navbar-brand zeroPadding" href="paginaPrincipalUser.php"><img src="..\img\SGS_Logo.png"
                                                                                     id="logoImg"></a>
            <div class="col-lg" id="divLogo"></div>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" id="navbarLetras">
                <li class="navbar-inverse ativo"><a href="paginaPrincipalUser.php" id="navbarLetras">Página Principal</a></li>
                <li class="inativo"><a href="#" id="navbarLetras">Sobre</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" id="labelUsuario">
                <li>
                    <a href="aulasSolicitadas.php" class="btn btn-primary" id="requisicoes" style="margin-top:10px;margin-right: 10px; padding-top: 0px; padding-bottom: 0px;">Solicitações <span class="badge"><?php echo $solicitacoes?></span></a>
                </li>
                <li>
                    <h4><span class="label label-default">
                        <?php

                        echo "Olá, ".$_SESSION['nomeUsuario'];

                        echo "<a class=\"label label-default\" href='../Control/logout.php'>Sair</a>";
                        ?>
                    </span></h4>
                </li>
            </ul>
        </div>
    </div>
</nav>