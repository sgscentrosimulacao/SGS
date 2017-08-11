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
    <title>SGS - Página Principal</title>
</head>
<div>
<?php
include "navbarUser.php";
include "navMenuUser.php";
?>
    <body>
<div>
    <?php
        include "menuUser.php";
    ?>
    <div class="col-md-8 zeroPadding">
        <div class="col-md-1 "></div>
        <div class="col-md-10" style="width: 100%; height: 100%">
            <img class="visible-lg visible-md visible-sm hidden-xs hidden-sm" src="../img/SGS_LogoMarca.png" style="margin-top: 100px;">
            <img class="hidden-lg hidden-md hidden-sm" src="../img/SGS_LogoMarca3.png">
        </div>
        <div class="col-md-1 "></div>
    </div>
</div>

<?php
include "footer.php";
?>
</body>
</html>