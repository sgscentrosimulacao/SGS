<?php
    include "../Control/sessionControl.php";
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
    <title>SGS - Página Principal - ADMIN</title>
</head>
<body>
<?php
    include "navbarAdmin.php";
    include "navMenuAdmin.php";
?>
<div>
    <?php
        include "menuAdmin.php";
    ?>
    <div class="col-md-8 zeroPadding">
        <fieldset id="fieldsetPositionNone">
            <div class="col-md-12">
                <img src="../img/SGS_LogoMarca.png" style="width:100%; height:100%;display: block; margin-left: auto; margin-right: auto;">
            </div>
        </fieldset>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>