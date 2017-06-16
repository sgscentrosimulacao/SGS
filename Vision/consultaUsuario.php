<?php
include "../Control/sessionControl.php";
include "../Control/selectUsuario.php";
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
    <title>SGS - Consulta Usuário</title>
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
                                                                      id="leftNavBarButtonsAtivo"> Usuário</button></a>
                            </div>
                            <div>
                                <a href="consultaDisciplina.php"><button type="button" class="btn btn-default"
                                                                         id="leftNavBarButtons">Disciplina</button></a>
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
        <div>
            <form action="consultaUsuario.php" method="post">
                <fieldset id="consulta">
                    <legend id="labelsLogin">Consulta de Usuário</legend>

                    <div class="col-md-12">
                        <div class="editor-label col-md-4" id="tipoPesquisaLabel" style="">
                            <label for="tipoPesquisaLabel" id="labelsLogin">Pesquisar por</label>
                        </div>
                        <div class="dropdown col-md-8" style="">
                            <select class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" name="dropTipoPesquisa">
                                <option value="1">Nome Completo</option>
                                <option value="2">Usuário</option>
                                <option value="3">E-mail</option>
                                <option value="4">Conselho</option>
                                <option value="5">Nº Conselho</option>
                                <option value="6">Instituição</option>
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

            <fieldset>
                <table class="table">
                    <tr>
                        <th class="visible-lg visible-md visible-sm hidden-xs hidden-sm">ID</th>
                        <th>Usuário</th>
                        <th>Nome</th>
                        <th class="visible-lg visible-md visible-sm hidden-xs hidden-sm">E-mail</th>
                        <th>Conselho</th>
                        <th class="visible-lg visible-md visible-sm hidden-xs hidden-sm">NºConselho</th>
                        <th class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Instituição</th>
                        <th class="text-center visible-lg visible-md visible-sm hidden-xs hidden-sm" >Editar</th>
                        <th class="text-center visible-lg visible-md visible-sm hidden-xs hidden-sm">Remover</th>
                        <th></th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                   <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$row['idUsuario']}</td>
                                   <td>{$row['usuario']}</td>
                                   <td>{$row['nomeUsuario']}</td>
                                   <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$row['email']}</td>
                                   <td>{$row['nomeConselho']}</td>
                                   <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$row['numeroConselho']}</td>
                                   <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$row['nomeInstituicao']}</td>    
                                   <td class=\"text-center visible-lg visible-md visible-sm hidden-xs hidden-sm\"><i class=\"glyphicon glyphicon-pencil\"></i></td>
                                   <td class=\"text-center visible-lg visible-md visible-sm hidden-xs hidden-sm\"><i class=\"glyphicon glyphicon-remove\"></i></td>
                                   <td class=\"text-center hidden-lg hidden-md hidden-sm\"><button type='button' class='btn btn-info btn-circle' data-toggle='modal' data-target='#modalDados{$row['idUsuario']}'><i class=\"glyphicon glyphicon-pencil\"></i></button></td>
                    
                              </tr>
   
                              <div id=\"modalDados{$row['idUsuario']}\" class=\"modal fade\" role=\"dialog\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                            <h4 class=\"modal-title\">Dados Usuário</h4>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class='col-sm-12'>
                                                <label for='tipoPesquisaLabel' id='labelsLogin'>ID:</label>
                                                <label>".$row["idUsuario"]."</label>
                                            </div>
                                        </div>
                                        <div class='col-md-12'>
                                            <div class='col-sm-12'>
                                                <label for='tipoPesquisaLabel' id='labelsLogin'>Usuário:</label>
                                                <label>".$row["usuario"]."</label>
                                            </div>
                                        </div>
                                        <div class='col-md-12'>
                                            <div class='col-sm-12'>
                                                <label for='tipoPesquisaLabel' id='labelsLogin'>Nome Usuário:</label>
                                                <label>".$row["nomeUsuario"]."</label>
                                            </div>
                                        </div>
                                        <div class='col-md-12'>
                                            <div class='col-sm-12'>
                                                <label for='tipoPesquisaLabel' id='labelsLogin'>E-mail:</label>
                                                <label>".$row["email"]."</label>
                                            </div>
                                        </div>    
                                        <div class='col-md-12'>
                                            <div class='col-sm-12'>
                                                <label for='tipoPesquisaLabel' id='labelsLogin'>Nome Conselho:</label>
                                                <label>".$row["nomeConselho"]."</label>
                                            </div>
                                        </div>
                                        <div class='col-md-12'>
                                            <div class='col-sm-12'>
                                                <label for='tipoPesquisaLabel' id='labelsLogin'>Número Conselho:</label>
                                                <label>".$row["numeroConselho"]."</label>
                                            </div>
                                        </div>
                                        <div class='col-md-12'>
                                            <div class='col-sm-6'>
                                                <label for='tipoPesquisaLabel' id='labelsLogin'>Nome Instituição:</label>
                                            </div>
                                            <div class='col-sm-4'>
                                                <input type='text' value='{$row["nomeInstituicao"]}'/>
                                            </div>
                                        </div>
                                      </div>
                                      <div class=\"modal-footer\">
                                      
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              
                              
                              
                              ";
                    }
                    /*if (isset($_GET['id'])){

                        echo "<script> var minhaJanela = window.open('popUpConsultaUsuario.php?id={$_GET['id']}','dados','width=280,height=225');</script>";
                    }*/
                    ?>
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