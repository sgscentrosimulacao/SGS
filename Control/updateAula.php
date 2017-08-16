<?php

include_once "controleDoBanco.php";
include "funcoes.php";

updateAula();

function updateAula(){

    $conn = abrirDatabase();

    $id = $_POST['alterarAula'];
    $nomeAula = $_POST['fieldNomeAula'];
    $descricaoAula = $_POST['fieldDescricaoAula'];
    $horaInicio = $_POST['fieldHoraInicio'];
    $horaFim = $_POST['fieldHoraFim'];
    $dataInicio = converteDataToSQL($_POST['fieldDataInicio']);
    $dataFim = converteDataToSQL($_POST['fieldDataFim']);
    $cenarioAula = $_POST['fieldCenario'];

    $updateAula = "UPDATE tb_aulas
                        SET nomeAula = '{$nomeAula}', descricaoAula= '{$descricaoAula}', horarioInicio = '{$horaInicio}', horarioFim = '{$horaFim}', dataInicio = '{$dataInicio}', dataFim = '{$dataFim}', cenario = '{$cenarioAula}'
                      WHERE idAula = '{$id}'";

    if ($conn->query($updateAula)==true){
        if ($tela = $_GET['tela'] == "disciplina"){
        echo '<SCRIPT>
                        confirm("Aula alterada no sistema!");
                        window.location.href = "../view/consultaDisciplina.php";
                      </SCRIPT>';
        }else{
            echo '<SCRIPT>
                        confirm("Aula alterada no sistema!");
                        window.location.href = "../view/calendario.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("Erro ao alterar a aula no banco de dados!");
                        window.location.href = "../view/consultaDisciplina.php";
                      </SCRIPT>';
    }

    fecharDatabase($conn);

}


?>