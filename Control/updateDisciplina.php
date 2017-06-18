<?php

include_once "controleDoBanco.php";

updateDisciplina();

function updateDisciplina(){

    $conn = abrirDatabase();

    $id = $_POST['alterar'];
    $nomeDisciplina = $_POST['fieldNomeDisciplina'];
    $descricao = $_POST['fieldDescricao'];
    $visibilidade = $_POST['fieldVisibilidade'];
    $qntAlunos = $_POST['fieldQntAlunos'];


    $updateDisciplina = "UPDATE tb_disciplina
                        SET nomeDisciplina = '{$nomeDisciplina}', descricao= '{$descricao}', visibilidade = '{$visibilidade}', qntAlunos = '{$qntAlunos}'
                          WHERE idUsuario = '{$id}'";


    if ($conn->query($updateDisciplina)==true){
        echo '<SCRIPT>
                        confirm("Disciplina alterada no sistema!");
                        window.location.href = "../Vision/consultaDisciplina.php";
                      </SCRIPT>';
    }else{
        echo '<SCRIPT>
                        confirm("Erro ao alterar a disciplina no banco de dados!");
                        window.location.href = "../Vision/consultaDisciplina.php";
                      </SCRIPT>';
    }

    fecharDatabase($conn);

}


?>