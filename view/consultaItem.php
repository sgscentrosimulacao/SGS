<?php
    include "../control/sessionControl.php";
    include "../control/selectItem.php";
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
    <title>SGS - Consulta Item</title>
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
        <div>
            <form action="consultaItem.php" method="post">
                <fieldset id="fieldsetPositionNone" style="margin-bottom: 0px;">
                    <legend class="ajusteTitulos" style="width: 190px" id="labelsLogin">Consulta de Item</legend>

                    <div class="col-md-12">
                        <div class="editor-label col-md-4" id="tipoPesquisaLabel" style="">
                            <label for="tipoPesquisaLabel" id="labelsLogin">Pesquisar por</label>
                        </div>
                        <div class="dropdown col-md-8" style="">
                            <select class="form-control dropdown-toggle" type="button" data-toggle="dropdown" name="dropTipoPesquisa">
                                <option value="1">Nome Peça</option>
                                <option value="2">Sala</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <input class="form-control" id="fieldPesquisar" name="fieldPesquisar"
                                       placeholder="Insira sua consulta" style="margin-top:10px;width: 100%" type="text">
                            </div>
                            <div class="col-md-4">
                                <input id="cadastrar" type="submit" value="Pesquisar" name="submit" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div>
            <fieldset id="fieldsetPositionNone">
                <legend class="ajusteTitulos" style="width: 120px" id="labelsLogin">Consulta</legend>
                <table class="table">
                    <tr>
                        <th id="labelsLogin">Nome Peça</th>
                        <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Descrição</th>
                        <th id="labelsLogin">Sala</th>
                        <th id="labelsLogin">Quantidade</th>
                        <th></th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($selectItem)) {
                        echo "<tr>
                               <td>{$row['nomePeca']}</td>
                               <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['descricao']}</td>
                               <td>{$row['nomeSala']}</td>
                               <td>{$row['quantidade']}</td>
                               <td class='text-center'><a class='btn btn-info btn-circle' title='Ver item' href='infoItem.php?id={$row['idPeca']}'><i class='glyphicon glyphicon-info-sign'></i></a></td>
                               <td class='text-center'><button type='button' class='btn btn-info btn-circle' data-toggle='modal' data-target='#modalDadosPeca{$row['idPeca']}' title='Ver dados'><i class='glyphicon glyphicon-pencil'></i></button></td>
                        </tr>
                        <div id=\"modalDadosPeca{$row['idPeca']}\" class=\"modal fade\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                        <h4 class=\"modal-title\" id='labelsLogin'>Dados da Peça</h4>
                                    </div>
                                    
                                    <div class=\"modal-body\">
                                        
                                        <form action='../control/updateItem.php' method='post'>
                                        
                                            <div class='col-md-12'>
                                                <label id='labelsLogin'>ID:</label>
                                                <input class=\"form-control\" type='text' disabled value='{$row["idPeca"]}' name='fieldIdPeca' title='Dado não pode ser alterado' style='background-color: white;'/>
                                            </div>
                                        
                                            <div class='col-md-12'>
                                                <label id='labelsLogin'>Nome Peça:</label>
                                                <input class=\"form-control\" type='text' value='{$row["nomePeca"]}' name='fieldNomePeca'/>
                                            </div>
                                        
                                            <div class='col-md-12'>
                                                <label id='labelsLogin'>Descrição:</label>
                                                <input class=\"form-control\" type='text' value='{$row["descricao"]}' name='fieldDescricao'/>
                                            </div>
                                        
                                            <div class='col-md-12'>
                                                <label id='labelsLogin'>Sala:</label>
                                                <input class=\"form-control\" type='text' disabled value='{$row["nomeSala"]}' name='fieldNomeSala' title='Dado não pode ser alterado' style='background-color: white;'/>
                                            </div>    
                                        
                                            <div class='col-md-12'>
                                                <label id='labelsLogin'>Quantidade:</label>
                                                <input class=\"form-control\" type='text' value='{$row["quantidade"]}' name='fieldQuantidade'/>
                                            </div>
                                        
                                            <div class=\"modal-footer\">";
                                            if ($_SESSION['administrador'] == 1) {
                                                echo "<button type='submit' class='btn btn-success' name='alterar' value='{$row['idPeca']}' style='margin-top: 30px;'>Alterar</button>
                                                      </form>
                                                      <form action='../control/deleteItem.php' method='post'>
                                                        <button class='btn btn-danger' name='excluir' value='{$row['idPeca']}' style='margin-top: 30px;'>Excluir</button>
                                                      </form>";
                                            }
                                                echo"<button class='btn btn-warning' data-dismiss='modal' style='margin-top: 30px;'>Cancelar</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
                    }?>
                </table>
            </fieldset>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>