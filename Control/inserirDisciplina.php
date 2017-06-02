<?php

require "../Control/controleDoBanco.php";
include "sessionControl.php";

inserirDisciplina();


function inserirDisciplina(){

    $conn = abrirDatabase();

    $nomeDisci = $_POST['fieldNomeDisci'];
    $qntAlunos = $_POST['fieldQntAlunos'];

    $valorDropCurso = $_POST['dropCurso'];
    $selectIdCurso = "SELECT tb_cursos.idCurso FROM tb_cursos
                        	WHERE tb_cursos.nomeCurso = '{$valorDropCurso}'";
    $curso = $conn->query($selectIdCurso);

    $idCurso = mysqli_fetch_row($curso);


    $visibilidade = $_POST['fieldVisibilidade'];

    if ($visibilidade != "1"){
        $visibilidade = 0;
    }

    $descricao = $_POST['fieldDescricaoDisci'];

    $idUsuario = $_SESSION['idUsuario'];
    $idConselho = $_SESSION['idConselho'];
    $idInstituicao = $_SESSION['idInstituicao'];



    $inserirDisciplina = "INSERT INTO tb_disciplina(nomeDisciplina, descricao, visibilidade, qntAlunos, idCurso,
                                                                                idUsuario, idConselho, idInstituicao)
                            VALUES('{$nomeDisci}','{$descricao}','{$visibilidade}','{$qntAlunos}','{$idCurso[0]}','{$idUsuario}',
                                                                            '{$idConselho}','{$idInstituicao}')";

    if ($nomeDisci and $qntAlunos and $descricao){
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