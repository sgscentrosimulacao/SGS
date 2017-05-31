<?php

require "../Control/controleDoBanco.php";
include "sessionControl.php";

inserirAula();


function inserirAula(){

    $nomeAula = $_POST['fieldNomeAula'];
    $dataInicio = $_POST['fieldDataInicio'];
    $dataFim = $_POST['fieldDataFim'];
    $horaInicio = $_POST['fieldHoraInicio'];
    $horaFim = $_POST['fieldHoraFim'];
    $cenario = $_POST['fieldCenarioAula'];
    $descricaoAula = $_POST['fieldDescricaoAula'];

    $idUsuario = $_SESSION['idUsuario'];

    $conn = abrirDatabase();


    $inserirDisciplina = "INSERT INTO tb_aulas(nomeAula, descricaoAula, horarioInicio, dataInicio, cenario, idDisciplina, idCurso, horarioFim, dataFim)
                            VALUES('{$nomeAula}','{$descricaoAula}','{$horaInicio}','{$dataInicio}','{$cenario}','{}','{}','{$horaFim}','{$dataFim}')";

    if ($nomeDisci and $qntAlunos and $curso and $descricao){
        if ($conn->query($inserirDisciplina)==true){

            echo '<SCRIPT>
                        confirm("Disciplina cadastrada no sistema!");
                        window.location.href = "../Vision/cadastroDisciplina.php";
                      </SCRIPT>';
        }else{
            echo '<SCRIPT>
                        confirm("Erro ao cadastrar a disciplina no banco de dados!");
                        window.location.href = "../Vision/cadastroDisciplina.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("Algum campo não foi preenchido!");
                        window.location.href = "../Vision/cadastroDisciplina.php";
                      </SCRIPT>';
    }
}
?>