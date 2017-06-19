<?php

require "../Control/controleDoBanco.php";
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

    $conn = abrirDatabase();

    $selectNomeDisciplina = "SELECT idDisciplina FROM tb_disciplina
	                              WHERE tb_disciplina.nomeDisciplina = '{$dropDisciplina}'";

    $parseIdDisciplina = $conn->query($selectNomeDisciplina);

    $idDisciplina = mysqli_fetch_row($parseIdDisciplina);

    $selectNomeCurso = "SELECT tb_cursos.idCurso FROM tb_disciplina
                            LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                            
                            WHERE tb_disciplina.nomeDisciplina = '{$dropDisciplina}'";

    $parseIdCurso = $conn->query($selectNomeCurso);

    $idCurso = mysqli_fetch_row($parseIdCurso);


    $valorDropSala = $_POST['dropSala'];
    $selectIdSala = "SELECT tb_sala.idSala FROM tb_sala
                        	WHERE tb_sala.nomeSala = '{$valorDropSala}'";
    $sala = $conn->query($selectIdSala);

    $idSala = mysqli_fetch_row($sala);



    $inserirDisciplina = "INSERT INTO tb_aulas(nomeAula, descricaoAula, horarioInicio, dataInicio, cenario, idDisciplina, idCurso, horarioFim, dataFim, idSala)
                            VALUES('{$nomeAula}','{$descricaoAula}','{$horaInicio}','{$dataInicio}','{$cenario}','{$idDisciplina[0]}','{$idCurso[0]}','{$horaFim}','{$dataFim}','{$idSala[0]}')";

    if ($nomeAula and $dataInicio and $dataFim and $horaInicio and $horaFim){
        if ($conn->query($inserirDisciplina)==true){

            echo '<SCRIPT>
                        confirm("Aula cadastrada no sistema!");
                        window.location.href = "../Vision/cadastroDisciplina.php";
                      </SCRIPT>';
        }else{
            echo '<SCRIPT>
                        confirm("Erro ao cadastrar a aula no banco de dados!");
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