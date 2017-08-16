<nav class="navbar hidden-lg hidden-md hidden-sm">
    <div class="container-fluid">
        <div class="navbar-header" id="navLogo">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myMenu"
                    style="background-color: #447d8d; width: auto;">
                <span style="color: white;">Menu</span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="nav navbar-nav" id="navbarLetras">
                <li><h1><span class="label label-default" id="alinhadoCentro">Cadastrar</span></h1></li>

                <li><a href="cadastroDisciplina.php" id="leftNavBarButtons">Disciplina</a></li>


                <li><h1><span class="label label-default" id="alinhadoCentro">Consultar</span></h1></li>

                <li><a href="perfilUsuario.php?id=<?php echo $_SESSION['idUsuario']?>" id="leftNavBarButtons"> Meu Perfil</a></li>

                <li><a href="consultaDisciplina.php" id="leftNavBarButtons">Disciplina</a></li>

                <li><a href="consultaItem.php" id="leftNavBarButtons">Item</a></li>

                <li><a href="consultaInstituicao.php" id="leftNavBarButtons">Instituicão</a></li>

                <li><a href="consultaCurso.php" id="leftNavBarButtons">Curso</a></li>

                <li><a href="consultaConselho.php" id="leftNavBarButtons">Conselho</a></li>

                <li><a href="consultaSala.php" id="leftNavBarButtons">Sala</a></li>

                <li><a href="calendario.php" id="leftNavBarButtons">Calendário</a></li>
            </ul>
        </div>
    </div>
</nav>