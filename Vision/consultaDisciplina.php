<?php
include "../Control/sessionControl.php";
include "../Control/selectDisciplina.php";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style_index.css">
    <title>SGS - Consulta Disciplina</title>
</head>
<body>
<?php
include "navbar.php";
?>
<div>
    <div class="col-md-4">
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
                                <a href="consultaConselho.php"><button type="button" class="btn btn-default"
                                                                       id="leftNavBarButtons">Conselho</button></a>
                            </div>
                            <div>
                                <a href="consultaSala.php"><button type="button" class="btn btn-default"
                                                                   id="leftNavBarButtons">Sala</button></a>
                            </div>
                            <div>
                                <button type="button" class="btn btn-default" id="leftNavBarButtons">Calendário</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>

    <div class="col-md-8 zeroPadding teste">
        <div>
            <form action="consultaDisciplina.php" method="post">
                <fieldset id="consulta">
                    <legend id="labelsLogin">Consulta de Disciplina</legend>

                    <div class="col-md-12">
                        <div class="editor-label col-md-4" id="tipoPesquisaLabel" style="">
                            <label for="tipoPesquisaLabel" id="labelsLogin">Pesquisar por</label>
                        </div>
                        <div class="dropdown col-md-8" style="">
                            <select class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" name="dropTipoPesquisa">
                                <option value="1">Nome Disciplina</option>
                                <option value="2">Curso</option>
                                <option value="3">Instituição</option>
                                <option value="4">Regente</option>
                                <option value="5">Numero Conselho</option>
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
            <div class="col-md-12" style="width: 100%;">
                <fieldset>
                    <legend id="labelsLogin">Consulta</legend>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Nome Disc.</th>
                            <th>Descrição</th>
                            <th>Visibilidade</th>
                            <th>Alunos</th>
                            <th>Curso</th>
                            <th>Regente</th>
                            <th>Editar</th>
                            <th>Remover</th>

                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                   <td>".$row['idDisciplina']."</td>
                                   <td>".$row['nomeDisciplina']."</td>
                                   <td>".$row['descricao']."</td>
                                   <td>".$row['visibilidade']."</td>
                                   <td>".$row['qntAlunos']."</td>
                                   <td>".$row['nomeCurso']."</td>
                                   <td>".$row['nomeUsuario']."</td> 
                                   <td class=\"text-center\"><i class=\"glyphicon glyphicon-pencil\"></i></td>
                                   <td class=\"text-center\"><i class=\"glyphicon glyphicon-remove\"></i></td>
                            </tr>";
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

<?php


?>