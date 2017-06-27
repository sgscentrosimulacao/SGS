<?php
include "../Control/sessionControl.php";
include "../Control/selectDisciplina.php";
include "../Control/funcoes.php";
$itemSelecionado = basename(__FILE__, '.php');
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style_index.css">
    <script src="../js/controlersInicio.js"></script>
    <title>SGS - Consulta Disciplina</title>
</head>
<body>
<?php
if ($_SESSION['administrador'] == 1){
    include "navbarAdmin.php"; //NAV BAR
    //include "navMenuAdmin.php"; //NAV MENU
    echo "<div>";
    //include "menuAdmin.php";   //MENU
}else{
    include "navbarUser.php"; //NAV BAR
    //include "navMenuUser.php"; //MENU
    echo "<div>";
    //include "menuUser.php"; //NAV MENU
}
?>
<div class="col-md-3"></div>
<div class="col-md-6 zeroPadding teste">
    <fieldset>
        <legend class="ajusteTitulos" id="labelsLogin">Sobre</legend>

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

        <div class="col-md-12">
            <p>

                Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto
                Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto

            </p>
        </div>



    </fieldset>
    <div>
        <div class="col-md-1"></div>
        <div class="col-md-10 text-center" style="margin-bottom: 100px">
            <img src="../img/SGS_LogoMarca.png" class="img-responsive text-center">
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<div class="col-md-3 zeroPadding"></div>


<?php
include "footer.php";
?>
</body>
</html>