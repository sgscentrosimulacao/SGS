<?php
include "../Control/sessionControl.php";
include "../Control/showDrops.php";
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
                                                                   id="leftNavBarButtonsAtivo">Item</button></a>
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
    <div class="col-md-8 zeroPadding">
        <form action="../Control/inserirItem.php" method="post">
            <div class="col-md-12">
                <fieldset>
                    <legend id="labelsLogin"> Cadastrar no Inventário</legend>

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
                            <select class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" name="dropSala"
                                    style="width: 100%">
                                <?php
                                while ($row = mysqli_fetch_assoc($resultSalas)) {
                                    echo "<option value=\"{$row['nomeSala']}\">".$row['nomeSala']."</option>";
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