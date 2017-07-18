<?php
    include "../control/sessionControl.php";
    include "../control/showDrops.php";
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
    <title>SGS - Cadastro Item</title>
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
        <form action="../control/inserirItem.php" method="post">
            <div class="col-md-12">
                <fieldset id="fieldsetPositionNone">
                    <legend class="ajusteTitulos" style="width: 250px" id="labelsLogin"> Cadastrar no Inventário</legend>

                    <div class="col-md-12">
                        <div class="editor-label col-md-6">
                            <label for="nomePecaLabel" id="labelsLogin">Nome da peça</label>
                        </div>
                        <div class="editor-label form-inline" style="padding-bottom: 5px">
                            <input class="form-control" id="fieldNomePeca" name="fieldNomePeca"
                                   placeholder="Insira o nome da peça" style="width: 100%" type="text">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-3">
                                <label for="quantidadeLabel" id="labelsLogin">Quantidade</label>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" id="fieldQuantidade" name="fieldQuantidade"
                                       placeholder="Insira quantidade" style="width: 100%" type="number">
                        </div>
                        <div class="editor-label col-md-1" id="salaLabel" style="">
                            <label for="salaLabel" id="labelsLogin">Sala</label>
                        </div>
                        <div class="dropdown col-md-4" style="">
                            <select class="form-control dropdown-toggle" type="button" data-toggle="dropdown" name="dropSala"
                                    style="width: 100%">
                                <?php
                                while ($row = mysqli_fetch_assoc($resultSalas)) {
                                    echo "<option value=\"{$row['idSala']}\">".$row['nomeSala']."</option>";
                                }?>
                            </select>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label for="descricaoPecaLabel" id="labelsLogin">Descrição</label>
                        </div>
                        <div class="form-group" id="descricaoPecaLabel">
                        <textarea class="form-control" rows="5" id="descricaoPecaLabel" style="width: 100%"
                                  placeholder="Insira a descrição da peça" name="fieldDescricaoPeca"></textarea>
                        </div>
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