<?php
    include "../Control/sessionControl.php";
    include "../Control/selectCurso.php";
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
    <title>SGS - Consulta Curso</title>
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
            <form action="consultaCurso.php" method="post">
                <fieldset id="consulta">
                    <legend id="labelsLogin">Consulta de Curso</legend>

                    <div class="col-md-12">
                        <div class="editor-label col-md-4" id="tipoPesquisaLabel" style="">
                            <label for="tipoPesquisaLabel" id="labelsLogin">Pesquisar por</label>
                        </div>
                        <div class="dropdown col-md-8" style="">
                            <select class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" name="dropTipoPesquisa">
                                <option value="1">Nome Curso</option>
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
            <div class="col-md-12" style="width: 100%;">
                <fieldset style="margin-bottom: 150px;">
                    <legend id="labelsLogin">Consulta</legend>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Nome Curso</th>
                            <th></th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                   <td>".$row['idCurso']."</td>
                                   <td>".$row['nomeCurso']."</td>
                                   <td class=\"text-center\"><button type='button' class='btn btn-info btn-circle' data-toggle='modal' data-target='#modalDadosCurso{$row['idCurso']}'><i class=\"glyphicon glyphicon-pencil\"></i></button></td>
                            </tr>
                            <div id=\"modalDadosCurso{$row['idCurso']}\" class=\"modal fade\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                        <h4 class=\"modal-title\" id='labelsLogin'>Dados do Curso</h4>
                                    </div>
                                            
                                    <div class=\"modal-body\">
                                        
                                        <form action='../Control/updateCurso.php' method='post'>
                                        
                                            <div class='col-md-12'>
                                                <div class='col-sm-6'>
                                                    <label id='labelsLogin'>ID:</label>
                                                </div>
                                                <div class='col-sm-4'>
                                                    <input class=\"form-control\" type='text' disabled value='{$row["idCurso"]}' name='fieldIdCurso'/>
                                                </div>
                                            </div>
                                        
                                            <div class='col-md-12'>
                                                <div class='col-sm-6'>
                                                    <label id='labelsLogin'>Nome Curso:</label>
                                                </div>
                                                <div class='col-sm-4'>
                                                    <input class=\"form-control\" type='text' value='{$row["nomeCurso"]}'  name='fieldNomeCurso'/>
                                                </div>
                                            </div>
                                            
                                            <div class=\"modal-footer\">
                                                <button type='submit' class='btn btn-success' name='alterar' value='{$row['idCurso']}' style='margin-top: 30px;'>Alterar</button>
                                                </form>
                                                <form action='../Control/deleteCurso.php' method='post'>
                                                    <button class='btn btn-danger' name='excluir' value='{$row['idCurso']}' style='margin-top: 30px;'>Excluir</button>
                                                </form>
                                                <button class='btn btn-warning' data-dismiss='modal' style='margin-top: 30px;'>Cancelar</button>
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
</div>
<?php
include "footer.php";
?>
</body>
</html>