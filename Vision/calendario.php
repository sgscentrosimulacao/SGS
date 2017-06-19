<?php
include "../Control/sessionControl.php";
include "../Control/controleCalendario.php";
$info = array(
        'tabela'=> 'tb_aulas',
        'data' => 'dataInicio',
        'titulo'=> 'nomeAula');

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
    <script src="../js/jquery.js"></script>
    <script src="../js/controlersInicio.js"></script>

    <title>SGS - Calendário</title>
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
                                <a href="cadastroConselho.php"><button type="button" class="btn btn-default"
                                                                       id="leftNavBarButtons">Conselho</button></a>
                            </div>
                            <div>
                                <a href="consultaSala.php"><button type="button" class="btn btn-default"
                                                                   id="leftNavBarButtons">Sala</button></a>
                            </div>
                            <div>
                                <a href="calendario.php"><button type="button" class="btn btn-default"
                                                                 id="leftNavBarButtonsAtivo">Calendário</button></a>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="col-md-8     zeroPadding">
        <fieldset id="fieldsetPositionNone" style="margin-bottom: 0px;">
            <legend class="text-center" id="labelsLogin">Calendário de Reservas - 2017</legend>

            <div class="calendario">
                <?php
                $eventos = montaEventos($info);
                montaCalendario($eventos);
                ?>
                <div class="legends">
                    <span class="legenda"><span class="blue"></span> Aulas Marcadas</span>
                    <span class="legenda"><span class="red"></span> Hoje</span>
                </div>
            </div>

            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/functions.js"></script>

        </fieldset>
        <?php
        echo "<div>";
            mostraAulas();
        echo "</div>";
        ?>
    </div>
</div>



<?php
include "footer.php";
?>
</body>
</html>

<?php

?>