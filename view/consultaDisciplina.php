<?php
    include "../control/sessionControl.php";
    include "../control/selectDisciplina.php";
    include "../control/funcoes.php";
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
    <script src="../js/controlersInicio.js"></script>
    <title>SGS - Consulta Disciplina</title>
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
        <form action="consultaDisciplina.php" method="post">
            <fieldset id="fieldsetPositionNone" style="margin-bottom: 0px">
                <legend class="ajusteTitulos" style="width: 240px" id="labelsLogin">Consulta de Disciplina</legend>

                <div class="col-md-12">
                    <div class="editor-label col-md-4" id="tipoPesquisaLabel" style="">
                        <label for="tipoPesquisaLabel" id="labelsLogin">Pesquisar por</label>
                    </div>
                    <div class="dropdown col-md-8" style="">
                        <select class="form-control dropdown-toggle" type="button" data-toggle="dropdown" name="dropTipoPesquisa">
                            <option value="1">Nome Disciplina</option>
                            <option value="2">Curso</option>
                            <option value="4">Regente</option>
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
        <div>
            <fieldset id="fieldsetPositionNone" style="margin-bottom: 0px;">
                <legend class="ajusteTitulos" style="width: 120px" id="labelsLogin">Consulta</legend>
                <table class="table">
                    <tr>
                        <th id="labelsLogin">Nome Disc.</th>
                        <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Descrição</th>
                        <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Visibilidade</th>
                        <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Alunos</th>
                        <th id="labelsLogin">Curso</th>
                        <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Regente</th>
                        <th id="labelsLogin">Plano</th>
                        <th id="labelsLogin">Aulas</th>
                        <th></th>

                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($resultSelectDisciplina)) {
                            if ($row['visibilidade'] == 1){
                                $visibilidade = "Sim";
                                $campoVisibilidade = 1;
                            }else{
                                $visibilidade = "Não";
                                $campoVisibilidade = 0;
                            }
                            echo "<tr>
                                   <td>{$row['nomeDisciplina']}</td>
                                   <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$row['descricao']}</td>
                                   <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$visibilidade}</td>
                                   <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$row['qntAlunos']}</td>
                                   <td>{$row['nomeCurso']}</td>
                                   <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['nomeUsuario']}</td> 
                                   <td class=\"text-center\"><a title='Plano de ensino' class='btn btn-info btn-circle' href=\"downloadPlano.php?id={$row['idDisciplina']}\"><i class='glyphicon glyphicon-save-file'></i></a></td>
                                   <td class=\"text-center\"><a title='Aulas' class='btn btn-info btn-circle' href=\"?id={$row['idDisciplina']}\"><i class='glyphicon glyphicon-book'></i></a></td>
                                   <td class=\"text-center\"><button type='button' class='btn btn-info btn-circle' data-toggle='modal' data-target='#modalDadosDisciplina{$row['idDisciplina']}' title='Ver dados'><i class=\"glyphicon glyphicon-pencil\"></i></button></td>
                            </tr>
                            
                            
                            <div id=\"modalDadosDisciplina{$row['idDisciplina']}\" class=\"modal fade\" role=\"dialog\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                    <h4 class=\"modal-title\" id='labelsLogin'>Dados da Disciplina</h4>
                                                </div>
                                                
                                        <div class=\"modal-body\">
                                            
                                            <form action='../control/updateDisciplina.php' method='post'>
                                            
                                                <div class='col-md-12'>
                                                    <label id='labelsLogin'>ID:</label>
                                                    <input class=\"form-control\" type='text' disabled value='{$row["idDisciplina"]}' name='fieldIdDisciplina' title='Dado não pode ser alterado' style='background-color: white;'/>
                                                </div>
                                            
                                                <div class='col-md-12'>
                                                    <label id='labelsLogin'>Nome Disciplina:</label>
                                                    <input class=\"form-control\" type='text' value='{$row["nomeDisciplina"]}' name='fieldNomeDisciplina'/>
                                                </div>
                                            
                                                <div class='col-md-12'>
                                                    <label id='labelsLogin'>Quantidade de Alunos:</label>
                                                    <input class=\"form-control\" type='text' value='{$row["qntAlunos"]}' name='fieldQntAlunos'/>
                                                </div>
                                            
                                                <div class='col-md-12'>
                                                    <label for=\"comment\" id='labelsLogin'>Descrição:</label>
                                                    <textarea class=\"form-control\" rows='3' type='text' name='fieldDescricao'>{$row["descricao"]}</textarea>
                                                </div>
                                                
                                                <div class='col-md-12'>
                                                    <label id='labelsLogin'>Visibilidade:</label>";
                                                        if ($campoVisibilidade == 1){
                                                            echo "<label><input type=\"checkbox\" checked value=\"1\" name=\"fieldVisibilidade\">Disciplina visível para todos</label>";
                                                        }else{
                                                                echo "<label><input type=\"checkbox\" value=\"0\" name=\"fieldVisibilidade\">Disciplina visível para todos</label>";
                                                            }
                                                echo "
                                                </div>    
                                            
                                                <div class='col-md-12'>
                                                    <label id='labelsLogin'>Curso:</label>
                                                    <input class=\"form-control\" type='text' value='{$row["nomeCurso"]}' disabled name='fieldNomeCurso' title='Dado não pode ser alterado' style='background-color: white;'/>
                                                </div>
                                            
                                                <div class='col-md-12'>
                                                    <label id='labelsLogin'>Regente:</label>
                                                    <input class=\"form-control\" type='text' value='{$row["nomeUsuario"]}' disabled name='fieldNomeUsuario' title='Dado não pode ser alterado' style='background-color: white;'/>
                                                </div>
                                                
                                                <div class=\"modal-footer\">";
                                                if ($_SESSION['administrador'] == 1) {
                                                    echo "<button type='submit' class='btn btn-success' name='alterar' value='{$row['idDisciplina']}' style='margin-top: 30px;'>Alterar</button>
                                                          <label><a title='Plano de ensino da disciplina' class='btn btn-info' href=\"downloadPlano.php?id={$row['idDisciplina']}\" style='margin-top: 30px;'><i class='glyphicon glyphicon-save-file'> Plano de Ensino</i></a></label>
                                                          </form>
                                                          <form action='../control/deleteDisciplina.php' method='post'>
                                                            <button class='btn btn-danger' name='excluir' value='{$row['idDisciplina']}' >Excluir</button>
                                                          </form>
                                                          <button class='btn btn-warning' data-dismiss='modal' >Cancelar</button>";
                                                }else{
                                                echo "<button class='btn btn-warning' data-dismiss='modal' style='margin-top: 30px;' >Cancelar</button>";
                                                }
                                                echo"</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>";
                        }?>
                </table>
            </fieldset>

            <?php
            if(isset($_GET['id'])){
            echo "
            <fieldset  style=\"margin-bottom: 150px\">
                <legend id=\"labelsLogin\">Aulas</legend>
                <table class=\"table\">
                    <tr>
                        <th id=\"labelsLogin\">Nome Aula</th>
                        <th id=\"labelsLogin\" class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">Descrição</th>
                        <th id=\"labelsLogin\" class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">Hora Inicio</th>
                        <th id=\"labelsLogin\" class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">Hora Fim</th>
                        <th id=\"labelsLogin\">Data Inicio</th>
                        <th id=\"labelsLogin\">Data Fim</th>
                        <th id=\"labelsLogin\" class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">Cenário</th>
                        <th id=\"labelsLogin\">Curso</th>
                        <th></th>
                    </tr>";


                        while ($row2 = mysqli_fetch_assoc($resultSelectAulasIdDisciplina)) {
                            echo " <tr>
                           <td>{$row2['nomeAula']}</td>
                           <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row2['descricaoAula']}</td>
                           <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row2['horarioInicio']}</td>
                           <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row2['horarioFim']}</td>
                           <td>".converteDataFromSQL($row2['dataInicio'])."</td>
                           <td>".converteDataFromSQL($row2['dataFim'])."</td> 
                           <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row2['cenario']}</td> 
                           <td>{$row2['nomeCurso']}</td>
                           <td class=\"text-center\"><button type='button' class='btn btn-info btn-circle' data-toggle='modal' data-target='#modalDadosAula{$row2['idAula']}'><i class=\"glyphicon glyphicon-pencil\"></i></button></td>
                    </tr>
                    
                    <div id='modalDadosAula{$row2['idAula']}' class='modal fade' role='dialog'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                    <h4 class='modal-title' id='labelsLogin'>Dados da Aula</h4>
                                </div>        
                                <div class='modal-body'>
                                    
                                    <form action='../control/updateAula.php?tela=disciplina' method='post'>
                                        <div class='col-md-12' style='padding-top: 20px;'>
                                            <label id='labelsLogin'>ID:</label>
                                            <input class='form-control' type='text' disabled value='{$row2["idAula"]}' name='fieldIdAula'/>
                                        </div>
                                    
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Nome Aula:</label>
                                            <input class='form-control' type='text' value='{$row2["nomeAula"]}' name='fieldNomeAula'/>
                                        </div>
    
                                        <div class='col-md-12'>
                                            <label for='comment' id='labelsLogin'>Descrição:</label>
                                            <textarea class='form-control' rows='3' type='text' name='fieldDescricaoAula'>{$row2["descricaoAula"]}</textarea>
                                        </div>
                                        
                                        <div class='col-md-12'>
                                            <label for='comment' id='labelsLogin'>Cenário:</label>
                                            <textarea class='form-control' rows='3' type='text' name='fieldCenario'>{$row2['cenario']}</textarea>
                                         </div>
    
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Hora Inicio:</label>
                                            <input class='form-control' type='text' maxlength='5' onkeypress='mascaraHorario( this, event )' value='{$row2["horarioInicio"]}' name='fieldHoraInicio'/>
                                        </div>
    
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Hora Fim:</label>
                                            <input class='form-control' type='text' maxlength='5' onkeypress='mascaraHorario( this, event )' value='{$row2["horarioFim"]}' name='fieldHoraFim'/>
                                        </div>
    
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Data Inicio:</label>
                                            <input class='form-control' type='text' onkeypress='mascaraData( this, event )' maxlength='10' value='".converteDataFromSQL($row2['dataInicio'])."' name='fieldDataInicio'/>
                                        </div>
                                        
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Data Fim:</label>
                                            <input class='form-control' type='text' onkeypress='mascaraData( this, event )' maxlength='10' value='".converteDataFromSQL($row2['dataFim'])."'  name='fieldDataFim'>
                                        </div>
                                        <div class='modal-footer'>";
                                        if ($_SESSION['administrador'] == 1) {

                                            echo "<button type = 'submit' class='btn btn-success' name = 'alterarAula' value = '{$row2['idAula']}' style = 'margin-top: 30px;' > Alterar</button >                                            </form >
                                            <form action = '../control/deleteAula.php' method = 'post' >
                                                <button class='btn btn-danger' name = 'excluir' value = '{$row2['idAula']}' style = 'margin-top: 30px;' > Excluir</button >
                                            </form >";
                                            }
                                            echo "<button class='btn btn-warning' data-dismiss='modal' style='margin-top: 30px;'>Cancelar</button>
                                        </div>
                            </div>
                          </div>    
                        </div>
                     </div>";
                    }
                echo "
                </table>
            </fieldset>";
            }
            ?>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>