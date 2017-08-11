<?php
include "../control/sessionControl.php";
include "../control/showDrops.php";
include "../control/infoItemControl.php";

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

    <title>SGS - Informação Item</title>
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
        <legend class="ajusteTitulos" style="width: 80px" id="labelsLogin">Item</legend>


        <?php
        while ($row = mysqli_fetch_assoc($resultItens)) {
            while ($row2 = mysqli_fetch_assoc($pegarSala)) {

            echo "

                    <div class='col-md-12'>
                        <div class='col-md-8 zeroPadding'>
                        
                            <div class='editor-label col-md-12'>
                                <label for='nomeSalaLabel' id='labelsLogin'>Pertence a Sala</label>
                            </div>
                            
                            <div class='editor-label form-inline' style='padding-bottom: 5px'>
                                <label class='form-control' id='fieldNomeSala' style='width: 100%'>{$row2['nomeSala']}</label>
                            </div>
                            
                            <div class='editor-label col-md-6'>
                                <label for='nomePecaLabel' id='labelsLogin'>Nome da Peça</label>
                            </div>
                            
                            <div class='editor-label form-inline' style='padding-bottom: 5px'>
                                <label class='form-control' id='fieldNomePeca' style='width: 100%'>{$row['nomePeca']}</label>
                            </div>
                            
                            <div class='editor-label col-md-6'>
                                <label for='nomeDescLabel' id='labelsLogin'>Descrição</label>
                            </div>
                            
                            <div class='editor-label form-inline' style='padding - bottom: 5px'>
                                <textarea class='form-control' rows='5' id='fieldDescPeca' style='background-color:white; width: 100%' disabled>{$row['descricao']}</textarea>
                            </div>
                            
                        </div>
                        
                        <div class='col-md-4 text-center'>
                            <div class='editor-label col-md-12'>
                                <label for='nomeSalaLabel' id='labelsLogin'>Imagem</label>
                            </div>
                            <div class='col-md-12' style='padding-bottom: 5px'>
                                <img src='../img/item_default.png'>
                            </div>
                            
                            <div class='editor-label col-md-6'>
                                <label for='fieldQntPeca' id='labelsLogin'>Quantidade</label>
                            </div>
                            <div class='editor-label form-inline' style='padding-bottom: 5px'>
                                <label class='form-control' id='fieldQntPeca' style='width: 100%'>{$row['quantidade']}</label>
                            </div>
                            
                        </div>
                    </div>
                    ";
            }
        }?>
        <div class="col-md-12">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4 text-center">
                <a href="cadastroDisciplina.php" class="btn btn-danger" title="Voltar para Cadastro de Aula"><i class="glyphicon glyphicon-arrow-left"> Voltar</i></a>
            </div>
        </div>
    </fieldset>


</div>
<?php
include "footer.php";
?>
</body>
</html>