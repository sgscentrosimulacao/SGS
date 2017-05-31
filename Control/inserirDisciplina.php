<?php

require "../Control/controleDoBanco.php";
include "sessionControl.php";

inserirDisciplina();


function inserirDisciplina(){

    $nomeDisci = $_POST['fieldNomeDisci'];
    $qntAlunos = $_POST['fieldQntAlunos'];
    $curso = $_POST['dropCurso'];
    $visibilidade = $_POST['fieldVisibilidade'];

    if ($visibilidade != "1"){
        $visibilidade = 0;
    }

    $descricao = $_POST['fieldDescricaoDisci'];

    $idUsuario = $_SESSION['idUsuario'];
    $idConselho = $_SESSION['idConselho'];
    $idInstituicao = $_SESSION['idInstituicao'];


    $conn = abrirDatabase();

    $inserirDisciplina = "INSERT INTO tb_disciplina(nomeDisciplina, descricao, visibilidade, qntAlunos, idCurso,
                                                                                idUsuario, idConselho, idInstituicao)
                            VALUES('{$nomeDisci}','{$descricao}','{$visibilidade}','{$qntAlunos}','{$curso}','{$idUsuario}',
                                                                            '{$idConselho}','{$idInstituicao}')";

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