<?php
include "../Control/sessionControl.php";
include "../Control/selectDisciplina.php";
include "../Control/funcoes.php";
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
    <script src="../js/controlers.js"></script>
    <title>SGS - Consulta Disciplina</title>
</head>
<body>
<?php
include "navbar.php";
include "navMenu.php";
?>
<div>
    <div class="col-md-4 visible-lg visible-md visible-sm hidden-xs hidden-sm">
        <div>
            <div class="col-md-12">
                <fieldset style="left: 0; margin-left: 50px;">
                    <div>
                        <div class="col-sm-12">

                            <h1><span class="label label-default" id="alinhadoCentro">Cadastrar</span></h1>

                            <div>
                                <a href="cadastroUsuarioPP.php"><button type="button" class="btn btn-default"
                                                                        id="leftNavBarButtons"> Usuário</button></a>
                            </div>
                            <div>
                                <a href="cadastroDisciplina.php"><button type="button" class="btn btn-default"
                                                                         id="leftNavBarButtons">Disciplina</button></a>
                            </div>
                            <div>
                                <a href="cadastroItem.php"><button type="button" class="btn btn-default"
                                                                   id="leftNavBarButtons">Item</button></a>
                            </div>
                            <div>
                                <a href="cadastroInstituicao.php"><button type="button" class="btn btn-default"
                                                                          id="leftNavBarButtons">Instituicão</button></a>
                            </div>
                            <div>
                                <a href="cadastroCurso.php"><button type="button" class="btn btn-default"
                                                                    id="leftNavBarButtons">Curso</button></a>
                            </div>
                            <div>
                                <a href="cadastroConselho.php"><button type="button" class="btn btn-default"
                                                                       id="leftNavBarButtons">Conselho</button></a>
                            </div>
                            <div>
                                <a href="cadastroSala.php"><button type="button" class="btn btn-default"
                                                                   id="leftNavBarButtons">Sala</button></a>
                            </div>


                            <h1><span class="label label-default" id="alinhadoCentro">Consultar</span></h1>


                            <div>
                                <a href="consultaUsuario.php"><button type="button" class="btn btn-default"
                                                                      id="leftNavBarButtons"> Usuário</button></a>
                            </div>
                            <div>
                                <a href="consultaDisciplina.php"><button type="button" class="btn btn-default"
                                                                         id="leftNavBarButtonsAtivo">Disciplina</button></a>
                            </div>
                            <div>
                                <a href="consultaItem.php"><button type="button" class="btn btn-default"
                                                                   id="leftNavBarButtons">Item</button></a>
                            </div>
                            <div>
                                <a href="consultaInstituicao.php"><button type="button" class="btn btn-default"
                                                                          id="leftNavBarButtons">Instituicão</button></a>
                            </div>
                            <div>
                                <a href="consultaCurso.php"><button type="button" class="btn btn-default"
                                                                    id="leftNavBarButtons">Curso</button></a>
                            </div>
                            <div>
                                <a href="consultaConselho.php"><button type="button" class="btn btn-default"
                                                                       id="leftNavBarButtons">Conselho</button></a>
                            </div>
                            <div>
                                <a href="consultaSala.php"><button type="button" class="btn btn-default"
                                                                   id="leftNavBarButtons">Sala</button></a>
                            </div>
                            <div>
                                <a href="calendario.php"><button type="button" class="btn btn-default"
                                                                 id="leftNavBarButtons">Calendário</button></a>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="col-md-8 zeroPadding teste">
        <form action="consultaDisciplina.php" method="post">
            <fieldset id="fieldsetPositionNone" style="margin-bottom: 0px">
                <legend id="labelsLogin">Consulta de Disciplina</legend>

                <div class="col-md-12">
                    <div class="editor-label col-md-4" id="tipoPesquisaLabel" style="">
                        <label for="tipoPesquisaLabel" id="labelsLogin">Pesquisar por</label>
                    </div>
                    <div class="dropdown col-md-8" style="">
                        <select class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" name="dropTipoPesquisa">
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
                <legend id="labelsLogin">Consulta</legend>
                <table class="table">
                    <tr>
                        <th class="visible-lg visible-md visible-sm hidden-xs hidden-sm">ID</th>
                        <th>Nome Disc.</th>
                        <th class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Descrição</th>
                        <th class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Visibilidade</th>
                        <th class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Alunos</th>
                        <th>Curso</th>
                        <th class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Regente</th>
                        <th>Aulas</th>
                        <th></th>

                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['visibilidade'] == 1){
                            $visibilidade = "Sim";
                        }else{
                            $visibilidade = "Não";
                        }
                        echo "<tr>
                               <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$row['idDisciplina']}</td>
                               <td>{$row['nomeDisciplina']}</td>
                               <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$row['descricao']}</td>
                               <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$visibilidade}</td>
                               <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$row['qntAlunos']}</td>
                               <td>{$row['nomeCurso']}</td>
                               <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['nomeUsuario']}</td> 
                               <td class=\"text-center\"><a class='btn btn-info btn-circle' href=\"?id={$row['idDisciplina']}\"><i class='glyphicon glyphicon-book'></i></a></td>
                               <td class=\"text-center\"><button type='button' class='btn btn-info btn-circle' data-toggle='modal' data-target='#modalDadosDisciplina{$row['idDisciplina']}'><i class=\"glyphicon glyphicon-pencil\"></i></button></td>
                        </tr>
                        
                        
                        <div id=\"modalDadosDisciplina{$row['idDisciplina']}\" class=\"modal fade\" role=\"dialog\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                <h4 class=\"modal-title\" id='labelsLogin'>Dados da Disciplina</h4>
                                            </div>
                                            
                                    <div class=\"modal-body\">
                                        
                                        <form action='../Control/updateDisciplina.php' method='post'>
                                        
                                            <div class='col-md-12'>
                                                <label id='labelsLogin'>ID:</label>
                                                <input class=\"form-control\" type='text' disabled value='{$row["idDisciplina"]}' name='fieldIdDisciplina'/>
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
                                                <label id='labelsLogin'>Visibilidade:</label>
                                                <label><input type=\"checkbox\" value=\"1\" name=\"fieldVisibilidade\">Disciplina visível para todos</label>
                                            </div>    
                                        
                                            <div class='col-md-12'>
                                                <label id='labelsLogin'>Curso:</label>
                                                <input class=\"form-control\" type='text' value='{$row["nomeCurso"]}' disabled name='fieldNomeCurso'/>
                                            </div>
                                        
                                            <div class='col-md-12'>
                                                <label id='labelsLogin'>Regente:</label>
                                                <input class=\"form-control\" type='text' value='{$row["nomeUsuario"]}' disabled name='fieldNomeUsuario'/>
                                            </div>
                                        
                                            <div class=\"modal-footer\">
                                                <button type='submit' class='btn btn-success' name='alterar' value='{$row['idDisciplina']}' style='margin-top: 30px;'>Alterar</button>
                                                </form>
                                                <form action='../Control/deleteDisciplina.php' method='post'>
                                                    <button class='btn btn-danger' name='excluir' value='{$row['idDisciplina']}' style='margin-top: 30px;'>Excluir</button>
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

            <?php
            if(isset($_GET['id'])){
            echo "
            <fieldset  style=\"margin-bottom: 150px\">
                <legend id=\"labelsLogin\">Aulas</legend>
                <table class=\"table\">
                    <tr>
                        <th class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">ID</th>
                        <th>Nome Aula</th>
                        <th class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">Descrição</th>
                        <th class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">Hora Inicio</th>
                        <th class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">Hora Fim</th>
                        <th>Data Inicio</th>
                        <th>Data Fim</th>
                        <th class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">Cenário</th>
                        <th>Curso</th>
                        <th></th>
                    </tr>";


                        while ($row2 = mysqli_fetch_assoc($resutl2)) {
                            echo " <tr>
                           <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row2['idAula']}</td>
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
                    
                    <div id=\"modalDadosAula{$row2['idAula']}\" class=\"modal fade\" role=\"dialog\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                    <h4 class=\"modal-title\" id='labelsLogin'>Dados da Aula</h4>
                                </div>        
                                <div class=\"modal-body\">
                                    
                                    <form action='../Control/updateAula.php?tela=disciplina' method='post'>
                                        <div class='col-md-12' style='padding-top: 20px;'>
                                            <label id='labelsLogin'>ID:</label>
                                            <input class=\"form-control\" type='text' disabled value='{$row2["idAula"]}' name='fieldIdAula'/>
                                        </div>
                                    
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Nome Aula:</label>
                                            <input class=\"form-control\" type='text' value='{$row2["nomeAula"]}' name='fieldNomeAula'/>
                                        </div>
    
                                        <div class='col-md-12'>
                                            <label for=\"comment\" id='labelsLogin'>Descrição:</label>
                                            <textarea class=\"form-control\" rows='3' type='text' name='fieldDescricaoAula'>{$row2["descricaoAula"]}</textarea>
                                        </div>
    
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Hora Inicio:</label>
                                            <input class=\"form-control\" type='text' maxlength=\"5\" onkeypress=\"mascaraHorario( this, event )\" value='{$row2["horarioInicio"]}' name='fieldHoraInicio'/>
                                        </div>
    
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Hora Fim:</label>
                                            <input class=\"form-control\" type='text' maxlength=\"5\" onkeypress=\"mascaraHorario( this, event )\" value='{$row2["horarioFim"]}' name='fieldHoraFim'/>
                                        </div>
    
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Data Inicio:</label>
                                            <input class=\"form-control\" type='text' onkeypress=\"mascaraData( this, event )\" maxlength='10' value='".converteDataFromSQL($row2['dataInicio'])."' name='fieldDataInicio'/>
                                        </div>
                                        
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Data Fim:</label>
                                            <input class=\"form-control\" type='text' onkeypress=\"mascaraData( this, event )\" maxlength='10' value='".converteDataFromSQL($row2['dataFim'])."' name='fieldDataFim'/>
                                        </div>
                                        
                                        <div class='col-md-12'>
                                            <label for=\"comment\" id='labelsLogin'>Cenário:</label>
                                            <textarea class=\"form-control\" rows='3' type='text' name='fieldCenario'>{$row2["cenario"]}</textarea>
                                        </div>
                                        
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Curso:</label>
                                            <input class=\"form-control\" type='text' value='{$row2["nomeCurso"]}' disabled name='fieldNomeCurso'/>
                                        </div>
                                        
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type='submit' class='btn btn-success' name='alterarAula' value='{$row2['idAula']}' style='margin-top: 30px;'>Alterar</button>
                                            </form>
                                            <form action='../Control/deleteAula.php' method='post'>
                                                <button class='btn btn-danger' name='excluir' value='{$row2['idAula']}' style='margin-top: 30px;'>Excluir</button>
                                            </form>
                                            <button class='btn btn-warning' data-dismiss='modal' style='margin-top: 30px;'>Cancelar</button>
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