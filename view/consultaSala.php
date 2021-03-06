<?php
    include "../control/sessionControl.php";
    include "../control/selectSala.php";
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
    <title>SGS - Consulta Sala</title>
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
            <form action="consultaSala.php" method="post">
                <fieldset id="fieldsetPositionNone" style="margin-bottom: 0px;">
                    <legend class="ajusteTitulos" style="width: 190px" id="labelsLogin">Consulta de Sala</legend>
                    <div class="col-md-12">
                        <div class="editor-label col-md-4" id="tipoPesquisaLabel" style=" margin-top:10px;">
                            <label for="tipoPesquisaLabel" id="labelsLogin">Pesquisar por</label>
                        </div>
                        <div class="dropdown col-md-8" style="">
                            <select class="form-control dropdown-toggle" type="button" data-toggle="dropdown" name="dropTipoPesquisa">
                                <option value="1">Nome Sala</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <input class="form-control" id="fieldPesquisar" name="fieldPesquisar"
                                       placeholder="Insira sua consulta" style="width: 100%" type="text">
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
                        <th id="labelsLogin">Nome Sala</th>
                        <th id="labelsLogin">Descrição</th>
                        <th id="labelsLogin"></th>

                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($selectSala)) {
                        echo "<tr>
                               <td>".$row['nomeSala']."</td>
                               <td>".$row['descricaoSala']."</td>
                               <td class=\"text-center\"><button type='button' class='btn btn-info btn-circle' data-toggle='modal' data-target='#modalDadosSala{$row['idSala']}' title='Ver dados'><i class=\"glyphicon glyphicon-pencil\"></i></button></td>
                        </tr>
                        <div id=\"modalDadosSala{$row['idSala']}\" class=\"modal fade\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                        <h4 class=\"modal-title\" id='labelsLogin'>Dados da Sala</h4>
                                    </div>
                                            
                                    <div class=\"modal-body\">
                                        
                                        <form action='../control/updateSala.php' method='post'>
                                        
                                            <div class='col-md-12'>
                                                <label id='labelsLogin'>ID:</label>
                                                <input class=\"form-control\" type='text' disabled value='{$row["idSala"]}' name='fieldIdSala' title='Dado não pode ser alterado' style='background-color: white;'/>
                                            </div>
                                        
                                            <div class='col-md-12'>
                                                <label id='labelsLogin'>Nome Sala:</label>
                                                <input class=\"form-control\" type='text' value='{$row["nomeSala"]}' name='fieldNomeSala'/>
                                            </div>
                                            
                                            <div class='col-md-12'>
                                                <label id='labelsLogin'>Descrição:</label>
                                                <input class=\"form-control\" type='text' value='{$row["descricaoSala"]}' name='fieldDescricaoSala'/>
                                            </div>
                                            
                                            <div class=\"modal-footer\">";
                                            if ($_SESSION['administrador'] == 1) {
                                                echo "<button type='submit' class='btn btn-success' name='alterar' value='{$row['idSala']}' style='margin-top: 30px;'>Alterar</button>
                                                      </form>
                                                      <form action='../control/deleteSala.php' method='post'>
                                                        <button class='btn btn-danger' name='excluir' value='{$row['idSala']}' style='margin-top: 30px;'>Excluir</button>
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