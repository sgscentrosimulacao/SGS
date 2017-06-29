<?php
include "../control/sessionControl.php";
$itemSelecionado = basename(__FILE__, '.php');
include "../control/selectDisciplina.php";
include "../control/funcoes.php";

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
    <title>SGS - Solicitações</title>
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
        <div class="col-md-12">
            <fieldset id="fieldsetPositionNone">
                <legend id="labelsLogin"> Solicitações </legend>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-condensed" style="border-collapse:collapse;">

                            <thead>
                            <tr>
                                <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">ID</th>
                                <th id="labelsLogin">Nome Aula</th>
                                <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Descrição</th>
                                <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Hora Inicio</th>
                                <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Hora Fim</th>
                                <th id="labelsLogin">Data Inicio</th>
                                <th id="labelsLogin">Data Fim</th>
                                <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Cenário</th>
                                <th id="labelsLogin">Curso</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($resultSelectAulasNAprovadas)) {
                                echo "<tr data-toggle=\"collapse\" data-target=\"#{$row['idAula']}\" class=\"accordion-toggle panel panel-primary\">
                                    
                                    <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['idAula']}</td>
                                    <td>{$row['nomeAula']}</td>
                                    <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['descricaoAula']}</td>
                                    <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['horarioInicio']}</td>
                                    <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['horarioFim']}</td>
                                    <td>".converteDataFromSQL($row['dataInicio'])."</td>
                                    <td>".converteDataFromSQL($row['dataFim'])."</td>
                                    <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['cenario']}</td>
                                    <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['nomeCurso']}</td>
                                    <td class=\"text-center\"><button type='button' class='btn btn-info btn-circle' data-toggle='modal' data-target='#modalDadosAula{$row['idAula']}'><i class=\"glyphicon glyphicon-list\"></i></button></td>
                                </tr>
                                <tr>
                                    <td colspan=\"12\" class=\"hiddenRow\"><div class=\"accordian-body collapse\" id=\"{$row['idAula']}\">
                                        <table class=\"table table-striped\">
                                            <tr>
                                                <div>
                                                    <div class='col-md-12 form-control'>
                                                        <label id='labelsLogin'>Regente da Disciplina:</label>
                                                        <label>{$row['nomeUsuario']}</label></h2>
                                                    </div>
                                                </div>
                                                
                                                <div>
                                                    <div class='col-md-3'>
                                                        <label id='labelsLogin'>Data Inicio:</label>
                                                        <label>".converteDataFromSQL($row['dataInicio'])."</label>
                                                    </div>
                                                
                                                    <div class='col-md-3'>
                                                        <label id='labelsLogin'>Data Fim:</label>
                                                        <label>".converteDataFromSQL($row['dataFim'])."</label>
                                                    </div>
                                                    
                                                    <div class='col-md-3'>
                                                        <label id='labelsLogin'>Hora Inicio:</label>
                                                        <label>{$row["horarioInicio"]}</label>
                                                    </div>
                                                    
                                                    <div class='col-md-3'>
                                                        <label id='labelsLogin'>Hora Fim:</label>
                                                        <label>{$row["horarioFim"]}</label>
                                                    </div>
                
                                                </div>
                                                
                                                <div>
                                                    <div class='col-md-6'>
                                                        <label id='labelsLogin'>Nome Aula:</label>
                                                        <label>{$row["nomeAula"]}</label>
                                                    </div>
                                                    
                                                    <div class='col-md-6'>
                                                        <label id='labelsLogin'>Curso:</label>
                                                        <label>{$row['nomeCurso']}</label>
                                                    </div>
                                                    
                                                </div>
                                                    
                                                <div>
                                                    <div class='col-md-6'>
                                                        <label id='labelsLogin'>Cenário:</label>
                                                        <label>{$row['cenario']}</label>
                                                    </div>
                                                    
                                                    <div class='col-md-6'>
                                                        <label id='labelsLogin'>Descrição:</label>
                                                        <label>{$row["descricaoAula"]}</label>
                                                    </div>
                                                </div>
                                                
                                                <div >
                                                    <div class='col-md-4'></div>
                                                    <div class='col-md-4'></div>
                                                    <div class='col-md-4 text-right'>
                                                        <form action='../control/updateAprovacao.php' method='post'>
                                                            <button class='btn btn-success' name='aprovarAula' value='{$row['idAula']}' style='margin-top: 30px;'><i class='glyphicon glyphicon-ok' title='Aprovar aula'> Aprovar</i></button>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
    </div>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                               ";}?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </fieldset>
        </div>
</div>

<?php
include "footer.php";
?>
</body>
</html>