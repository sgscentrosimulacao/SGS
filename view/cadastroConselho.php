<?php
include "../control/sessionControl.php";
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
    <title>SGS - Cadastro Conselho</title>
</head>
<body>
 <?php
    if ($_SESSION['administrador'] == 1){
        include "navbarAdmin.php"; //NAV BAR
        include "navMenuAdmin.php"; //NAV MENU
        echo "<div>";
        include "menuAdmin.php";   //MENU
        echo"
            <div class='col-md-8 zeroPadding'>

            <form action='../control/inserirConselho.php' method='post'>
    
                <div class='col-md-12'>
                    <fieldset id='fieldsetPositionNone'>
                        <legend class='ajusteTitulos' style='width: 210px' id='labelsLogin'> Cadastrar Conselho</legend>
    
                        <div class='col-md-12'>
                            <div class='editor-label col-md-6'>
                                <label for='nomeConselho' id='labelsLogin'>Nome do Conselho</label>
                            </div>
                            <div class='editor-label form-inline' style='padding-bottom: 5px'>
                                <input class='form-control' id='fieldNomeConselho' name='fieldNomeConselho'
                                       placeholder='Insira o nome do conselho' style='width: 100%' type='text'>
                            </div>
                        </div>
    
                        <div class='col-md-12' style='margin-left:30px'>
                            <div class='col-md-4'>
                            </div>
                            <div class='col-md-4'>
    
                                <input id='cadastrar' type='submit' value='Enviar' name='submit' class='btn btn-success'>
    
                            </div>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>";
    }else{
        include "navbarUser.php"; //NAV BAR
        include "navMenuUser.php"; //MENU
        echo "<div>";
        include "menuUser.php"; //NAV MENU
        echo "
        <fieldset id='fieldsetPositionNone'>
            <div class='col-md-12 text-center'>
                <h1 id='labelsLogin'>Você não tem permissão para acessar esta página!</h1>
                <img src='../img/warning.png' style='width: 150px; height: 150px;'>
            </div>
            <div class='col-md-12 text-center'>
                <a href='paginaPrincipalUser.php' class='btn btn-success'><i class='glyphicon glyphicon-arrow-left'> Voltar</i></a>
            </div>
         </fieldset>
        
        ";

    }
 ?>

<?php
include "footer.php";
?>
</body>
</html>