<?php

require "controleDoBanco.php";
include "sessionControl.php";
include "funcoes.php";

inserirAula();


function inserirAula(){

    $nomeAula = $_POST['fieldNomeAula'];
    $dataInicio= converteDataToSQL($_POST['fieldDataInicio']);
    $dataFim= converteDataToSQL($_POST['fieldDataFim']);
    $horaInicio = converteHoraToSQL($_POST['fieldHoraInicio']);
    $horaFim = converteHoraToSQL($_POST['fieldHoraFim']);
    $cenario = $_POST['fieldCenarioAula'];
    $descricaoAula = $_POST['fieldDescricaoAula'];
    $dropDisciplina = $_POST['dropDisciplina'];
    $dropSala = $_POST['dropSala'];
    $aceita = 0;

    $conn = abrirDatabase();

    $selectCurso = "SELECT tb_cursos.idCurso FROM tb_cursos
                        LEFT JOIN tb_disciplina ON tb_cursos.idCurso = tb_disciplina.idCurso
                      
                      WHERE tb_disciplina.idDisciplina = {$dropDisciplina}";

    $curso = $conn->query($selectCurso);

    $idCurso = mysqli_fetch_row($curso);

    $inserirDisciplina = "INSERT INTO tb_aulas(nomeAula, descricaoAula, horarioInicio, dataInicio, cenario, idDisciplina, idCurso, horarioFim, dataFim, idSala, aceita, comentarioAceita) 
                            VALUES('{$nomeAula}','{$descricaoAula}','{$horaInicio}','{$dataInicio}','{$cenario}','{$dropDisciplina}','{$idCurso[0]}','{$horaFim}','{$dataFim}','{$dropSala}','{$aceita}',null)";

    if ($nomeAula and $dataInicio and $dataFim and $horaInicio and $horaFim){
        if ($conn->query($inserirDisciplina)==true){

            echo '<SCRIPT>
                        confirm("Aula inserida na fila de solicitação!");
                        window.location.href = "../view/cadastroDisciplina.php";
                      </SCRIPT>';
        }else{
            echo '<SCRIPT>
                        confirm("Erro ao cadastrar a aula na fila de requisições!");
                        window.location.href = "../view/cadastroDisciplina.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("Algum campo não foi preenchido!");
                        window.location.href = "../view/cadastroDisciplina.php";
                      </SCRIPT>';
    }
}
?>