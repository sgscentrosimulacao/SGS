<?php
include "../control/sessionControl.php";
include "../control/showDrops.php";
include "../control/perfilUserControl.php";

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

    <title>SGS - Perfil Usuário</title>
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
<div class="col-md-8 zeroPadding teste">
    <fieldset id="fieldsetPositionNone" style="margin-bottom: 0;">
        <legend class="ajusteTitulos" style="width: 100px" id="labelsLogin">Usuário</legend>


        <?php
        while ($row = mysqli_fetch_assoc($resultUsuario)) {
            while ($row2 = mysqli_fetch_assoc($resultConselho)) {
                while ($row3 = mysqli_fetch_assoc($resultInstituicao)) {
                    if ($row['administrador'] == "1") {
                        $administrador = "Sim";
                    } else {
                        $administrador = "Não";
                    }
                    echo "
    
                        <div class='col-md-12'>
                            <div class='col-md-8 zeroPadding'>
                            
                                <div class='editor-label col-md-12'>
                                    <label for='nomeSalaLabel' id='labelsLogin'>Nome Completo:</label>
                                </div>
                                
                                <div class='editor-label form-inline' style='padding-bottom: 5px'>
                                    <label class='form-control' id='fieldNomeSala' style='width: 100%'>{$row['nomeUsuario']}</label>
                                </div>
                                
                                <div class='editor-label col-md-6'>
                                    <label for='nomePecaLabel' id='labelsLogin'>E-mail</label>
                                </div>
                                
                                <div class='editor-label form-inline' style='padding-bottom: 5px'>
                                    <label class='form-control' id='fieldNomePeca' style='width: 100%'>{$row['email']}</label>
                                </div>
                                
                                <div class='editor-label col-md-6'>
                                    <label for='nomePecaLabel' id='labelsLogin'>Nome de Usuário</label>
                                </div>
                                
                                <div class='editor-label form-inline' style='padding-bottom: 5px'>
                                    <label class='form-control' id='fieldNomePeca' style='width: 100%'>{$row['usuario']}</label>
                                </div>
                                
                                <div class='editor-label col-md-6'>
                                    <label for='nomePecaLabel' id='labelsLogin'>Conselho</label>
                                </div>
                                
                                <div class='editor-label form-inline' style='padding-bottom: 5px'>
                                    <label class='form-control' id='fieldNomePeca' style='width: 100%'>{$row2['nomeConselho']}</label>
                                </div>
                                
                                <div class='editor-label col-md-6'>
                                    <label for='nomePecaLabel' id='labelsLogin'>Nº Conselho</label>
                                </div>
                                
                                <div class='editor-label form-inline' style='padding-bottom: 5px'>
                                    <label class='form-control' id='fieldNomePeca' style='width: 100%'>{$row['numeroConselho']}</label>
                                </div>
                                
                                <div class='editor-label col-md-6'>
                                    <label for='nomePecaLabel' id='labelsLogin'>Instituição</label>
                                </div>
                                
                                <div class='editor-label form-inline' style='padding-bottom: 5px'>
                                    <label class='form-control' id='fieldNomePeca' style='width: 100%'>{$row3['nomeInstituicao']}</label>
                                </div>
                                
                            </div>
                            
                            <div class='col-md-4 text-center'>
                                <div class='editor-label col-md-12'>
                                    <label for='nomeSalaLabel' id='labelsLogin'>Imagem</label>
                                </div>
                                <div class='col-md-12' style='padding-bottom: 5px'>
                                    <img src='../img/user_default.png'>
                                </div>
                                
                                <div class='editor-label col-md-6'>
                                    <label for='fieldQntPeca' id='labelsLogin'>Administrador</label>
                                </div>
                                <div class='editor-label form-inline' style='padding-bottom: 5px'>
                                    <label class='form-control' id='fieldQntPeca' style='width: 100%'>{$administrador}</label>
                                </div>
                                
                            </div>
                        </div>
                        ";
                }
            }
        }?>
        <div class="col-md-12">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4 text-center">
                <a href="consultaUsuario.php" class="btn btn-danger" title="Voltar para Consulta de Usuário"><i class="glyphicon glyphicon-arrow-left"> Voltar</i></a>
            </div>
        </div>
    </fieldset>


</div>
<?php
include "footer.php";
?>
</body>
</html>