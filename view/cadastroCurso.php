<?php
include "../control/sessionControl.php";
include_once "../control/showDrops.php";
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
    <title>SGS - Cadastro Curso</title>
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
    <div class="col-md-8 zeroPadding">

        <form action="../control/inserirCurso.php" method="post">
            <div class="col-md-12">
                <fieldset id="fieldsetPositionNone">
                    <legend class="ajusteTitulos" style="width: 180px" id="labelsLogin"> Cadastrar Curso</legend>

                    <div class="col-md-12">
                        <div class="editor-label col-md-6">
                            <label for="nomeCurso" id="labelsLogin">Nome do Curso</label>
                        </div>
                        <div class="editor-label form-inline" style="padding-bottom: 5px">
                            <input class="form-control" id="fieldNomeCurso" name="fieldNomeCurso"
                                   placeholder="Insira o nome do curso" style="width: 100%" type="text">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <label for="instituicaoLabel" id="labelsLogin">Instituição</label>
                        </div>
                            <select class="form-control dropdown-toggle" type="button" data-toggle="dropdown" name="dropInstituicao">
                                <?php
                                while ($row2 = mysqli_fetch_assoc($resultInstituicao)) {
                                    echo "<option value=\"{$row2['nomeInstituicao']}\">".$row2['nomeInstituicao']."</option>";
                                }?>
                            </select>

                    </div>

                    <div class="col-md-12" style="margin-left:30px">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <input id="cadastrar" type="submit" value="Enviar" name="submit" class="btn btn-success">
                        </div>
                    </div>
                </fieldset>
            </div>
        </form>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>