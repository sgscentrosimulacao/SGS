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

                        echo "<a class=\"label label-default\" href='../Control/logout.php'>Sair</a>";
                        ?>
                    </span></h4>
                </li>
            </ul>
        </div>
    </div>
</nav>