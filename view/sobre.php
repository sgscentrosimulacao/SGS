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
                    <legend class="ajusteTitulos" style="width: 165px" id="labelsLogin">Sobre o centro</legend>
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <p id="textoSobre">

                            Construído dentro do complexo da Santa Casa de Misericórdia de Porto Alegre (ISCMPA), em
                            parceria com a Universidade Federal de Ciências da Saúde de Porto Alegre (UFCSPA), o
                            Centro de Simulação Realística é um espaço voltado para ensino, pesquisa e treinamento de
                            acadêmicos, residentes, médicos e demais profissionais da saúde das duas instituições. O
                            local conta sala de simulação avançada, área de realidade virtual, sala de simulação de
                            emergência, sala de habilidades, consultório e debriefing. Todos com equipamentos modernos
                            para procedimentos clínicos e cirúrgicos, em manequins feitos de plástico e resina que
                            imitam a pele humana. A estrutura ajudará a desenvolver desde habilidades técnicas até a
                            maneira como se portar diante do paciente. <br>
                            O Centro fica localizado junto ao prédio garagem da ISCMPA, 2º andar, na esquina das
                            ruas Sarmento Leite e Oswaldo Aranha.<br><br>

                            <p id="fonteSobre"><i><b>Fonte: UFCSPA, ISCMPA e Zero Hora</b></i></p>

                        </p>
                    </div>
                    <div class="col-md-1"></div>



                </fieldset>

                <fieldset id="fieldsetPositionNone" style="margin-bottom: 0px;">
                    <legend class="ajusteTitulos" style="width: 190px" id="labelsLogin">Desenvolvedores</legend>

                    <div class="col-md-12 text-center">
                        <div class="col-md-4" style="margin-top: 10px">
                            <img src="../img/Desenvolvedor1.png" style="border 5px solid #80bcb6; border-radius: 100% ; width: 70px;height: 70px">
                            <div id="labelsLogin"><b>Bruno Gomes Tavares</b></div>
                        </div>
                        <div class="col-md-4 text-center" style="margin-top: 10px">
                            <img src="../img/Desenvolvedor2.png" style="border 5px solid #80bcb6; border-radius: 100%; width: 70px;height: 70px">
                            <div id="labelsLogin"><b>Carlos G. M. Johansson</b></div>
                        </div>
                        <div class="col-md-4 text-center" style="margin-top: 10px">
                            <img src="../img/Desenvolvedor3.png" style="border 5px solid #80bcb6 ; border-radius: 100%; width: 70px;height: 70px">
                            <div id="labelsLogin"><b>Mayandre Bona</b></div>
                        </div>
                    </div>

                    <div class="col-md-12">

                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <p id="textoSobre" align="justify">
                                <br>
                                Este site foi desenvolvido por alunos do curso de Informática Biomédica da UFCSPA em um projeto da
                                disciplina de Engenharia de Software II, sob docência da profª Dra. Juliana Herbert. O projeto
                                ultrapassou as paredes da sala de aula e se tornou algo muito maior e mais importante do que
                                imaginávamos. Agradecemos a prof. Dra. Juliana por ter oportunizado que participássemos de algo desta
                                proporção ainda na graduação. Agradecemos, também, a equipe do Centro de Simulação e seu coordenador, prof
                                Dr. Newton Aerts por ter nos confiado esta missão. Esperamos que nosso software melhore e facilite
                                a gerência do agendamento de salas do Centro, tornando-o mais eficaz e dinâmico.
                                <br>
                            </p>

                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="col-md-2"></div>
                        <div class="col-md-4 text-center">
                            <img src="../img/informatica-biomedica-5.png" class="img-responsive" >
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="../img/UFCSPA_MINI.png" class="img-responsive">
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                </fieldset>
                <div>
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-center">
                        <img src="../img/SGS_LogoMarca.png" class="img-responsive text-center">
                    </div>
                    <div class="col-md-2"></div>
                </div>
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