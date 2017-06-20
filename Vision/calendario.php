<?php
    include "../Control/sessionControl.php";
    include "../Control/controleCalendario.php";
    $itemSelecionado = basename(__FILE__, '.php');
    $info = array(
            'tabela'=> 'tb_aulas',
            'data' => 'dataInicio',
            'titulo'=> 'nomeAula');
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
    <script src="../js/jquery.js"></script>
    <script src="../js/controlersInicio.js"></script>

    <title>SGS - Calendário</title>
</head>
<body>
<?php
if ($_SESSION['administrador'] == 1){
    include "navbarAdmin.php"; //NAV BAR
    include "navMenuAdmin.php"; //NAV MENU
    echo "<div>";
    include "menuAdmin.php";   //MENU
}else{
    include "navbarUser.php"; //NAV BAR
    include "navMenuUser.php"; //MENU
    echo "<div>";
    include "menuUser.php"; //NAV MENU
}
?>
    <div class="col-md-8     zeroPadding">
        <fieldset id="fieldsetPositionNone" style="margin-bottom: 0px;">
            <legend class="text-center" id="labelsLogin">Calendário de Reservas - 2017</legend>

            <div class="calendario">
                <?php
                $eventos = montaEventos($info);
                montaCalendario($eventos);
                ?>
                <div class="legends">
                    <span class="legenda"><span class="blue"></span> Aulas Marcadas</span>
                    <span class="legenda"><span class="red"></span> Hoje</span>
                </div>
            </div>

            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/functions.js"></script>

        </fieldset>
        <?php
        echo "<div>";
            mostraAulas();
        echo "</div>";
        ?>
    </div>
</div>



<?php
include "footer.php";
?>
</body>
</html>

<?php

?>