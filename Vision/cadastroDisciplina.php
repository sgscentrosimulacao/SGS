<?php
    include "../Control/sessionControl.php";
    include "../Control/showDrops.php";
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

    <title>SGS - Cadastro Disciplina</title>
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
            <div class="col-md-12">

            <form action="../Control/inserirDisciplina.php" method="post">
                <fieldset id="fieldsetPositionNone" style="margin-bottom: 0;">
                    <legend id="labelsLogin"> Cadastrar Disciplina</legend>

                    <div class="col-md-12">
                        <div class="editor-label col-md-6">
                            <label for="nomeDisciLabel" id="labelsLogin">Nome da disciplina</label>
                        </div>
                        <div class="editor-label form-inline" style="padding-bottom: 5px">
                            <input class="form-control" id="fieldNomeDisci" name="fieldNomeDisci"
                                   placeholder="Insira o nome da disciplina" style="width: 100%" type="text">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="editor-label col-md-6">
                            <label for="qntAlunosLabel" id="labelsLogin">Quantidade de alunos</label>
                        </div>
                        <div class="form-group" id="qntAlunosLabel">
                            <input class="form-control" id="fieldQntAlunos" name="fieldQntAlunos"
                                   placeholder="Insira a quantidade de alunos" style="width: 100%" type="text">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="editor-label col-md-2" id="cursoLabel" style="">
                            <label for="cursoLabel" id="labelsLogin">Curso</label>
                        </div>
                        <div class="dropdown col-md-4" style="">
                            <select class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" name="dropCurso"
                                    style="width: 100%">
                                <?php
                                while ($row = mysqli_fetch_assoc($resultCurso)) {
                                    echo "<option value=\"{$row['nomeCurso']}\">".$row['nomeCurso']."</option>";
                                }?>

                            </select>

                        </div>
                        <div class="col-md-6 checkbox">
                            <label><input type="checkbox" value="1" name="fieldVisibilidade">Disciplina visível para todos</label>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label for="descricaoDisciLabel" id="labelsLogin">Descrição</label>
                        </div>
                        <div class="form-group" id="descricaoLabel">
                        <textarea class="form-control" rows="5" id="descricaoDisciLabel" style="width: 100%"
                                  placeholder="Insira a descrição da disciplina" name="fieldDescricaoDisci"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12" style="margin-left:30px">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">

                            <input id="cadastrar" type="submit" value="Enviar" name="submit" class="btn btn-success">

                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </fieldset>
            </form>
            </div>
        </div>
        <div>
            <div class="col-md-12">
            <form action="../Control/inserirAula.php" method="post">
                <fieldset id="fieldsetPositionNone">
                    <legend id="labelsLogin"> Cadastrar Aulas</legend>

                    <div class="col-md-12">
                        <div class="editor-label col-md-6">
                            <label for="nomeAulaLabel" id="labelsLogin">Nome da aula</label>
                        </div>
                        <div class="editor-label form-inline" style="padding-bottom: 5px">
                            <input class="form-control" id="fieldNomeAula" name="fieldNomeAula"
                                   placeholder="Insira o nome da aula" style="width: 100%" type="text">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6 zeroPadding">
                            <div class="editor-label col-md-6">
                                <label for="dataInicioLabel" id="labelsLogin">Data de início</label>
                            </div>
                            <div class="editor-label form-inline" style="padding-bottom: 5px">
                                <input class="form-control" type="text" name="fieldDataInicio" id="fieldDataInicio"
                                       placeholder="dd/mm/yyyy" maxlength="10" onkeypress="mascaraData( this, event )"/>
                            </div>
                        </div>
                        <div class="col-md-6 zeroPadding">
                            <div class="editor-label col-md-6">
                                <label for="horaInicioLabel" id="labelsLogin">Hora de início</label>
                            </div>
                            <div class="editor-label form-inline" style="padding-bottom: 5px">
                                <input class="form-control" type="text" name="fieldHoraInicio" id="fieldHoraInicio"
                                       placeholder="hh:mm" maxlength="5" onkeypress="mascaraHorario( this, event )" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6 zeroPadding">
                            <div class="editor-label col-md-6">
                                <label for="dataFimLabel" id="labelsLogin">Data de Termino</label>
                            </div>
                            <div class="editor-label form-inline" style="padding-bottom: 5px">
                                <input class="form-control" type="text" name="fieldDataFim" id="fieldDataFim"
                                       placeholder="dd/mm/yyyy" maxlength="10" onkeypress="mascaraData( this, event )" />
                            </div>
                        </div>

                        <div class="col-md-6 zeroPadding">
                            <div class="editor-label col-md-6">
                                <label for="dataFimLabel" id="labelsLogin">Hora de Termino</label>
                            </div>
                            <div class="editor-label form-inline" style="padding-bottom: 5px">
                                <input class="form-control" type="text" name="fieldHoraFim" id="fieldHoraFim"
                                       placeholder="hh:mm" maxlength="5" onkeypress="mascaraHorario( this, event )" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="editor-label col-md-2" id="disciplinaLabel" style="">
                            <label for="disciplinaLabel" id="labelsLogin">Disciplina</label>
                        </div>
                        <div class="dropdown col-md-4" style="">
                            <select class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" id="dropDisciplina" name="dropDisciplina"
                                    style="width: 100%">
                                <?php
                                while ($row2 = mysqli_fetch_assoc($resultDisciplinaId)) {
                                    echo "<option value=\"{$row2['nomeDisciplina']}\">".$row2['nomeDisciplina']."</option>";
                                }?>
                            </select>
                        </div>
                        <div class="editor-label col-md-2" id="salaLabel" style="">
                            <label for="salaLabel" id="labelsLogin">Sala</label>
                        </div>
                        <div class="dropdown col-md-4" style="">
                            <select class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" id="dropSala" name="dropSala"
                                    style="width: 100%">
                                <?php
                                while ($row3 = mysqli_fetch_assoc($resultSalas)) {
                                    echo "<option value=\"{$row3['nomeSala']}\">".$row3['nomeSala']."</option>";
                                }?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label for="cenarioLabel" id="labelsLogin">Cenário</label>
                        </div>
                        <div class="form-group" id="cenarioLabel">
                        <textarea class="form-control" rows="5" id="fieldCenarioAula" style="width: 100%"
                                  placeholder="Insira o cenário da aula" name="fieldCenarioAula"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label for="descricaoAulaLabel" id="labelsLogin">Descrição</label>
                        </div>
                        <div class="form-group" id="descricaoAulaLabel">
                        <textarea class="form-control" rows="5" id="fieldDescricaoAula" style="width: 100%"
                                  placeholder="Insira a descrição da aula" name="fieldDescricaoAula"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 text-center" >
                        <div class="col-md-4 zeroPadding">
                        </div>
                        <div class="col-md-4 zeroPadding">

                            <input id="cadastrar" type="submit" value="Solicitar" name="submit" class="btn btn-success">

                        </div>
                        <div class="col-md-4 zeroPadding">

                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
<script src="../js/controlersFim.js"></script>
</body>
</html>