<?php

include_once "controleDoBanco.php";

updateCurso();

function updateCurso(){

    $conn = abrirDatabase();

    $id = $_POST['alterar'];
    $nomeCurso = $_POST['fieldNomeCurso'];

    $updateCurso = "UPDATE tb_cursos
                        SET nomeCurso = '{$nomeCurso}'
                          WHERE idCurso = '{$id}'";


    if ($conn->query($updateCurso)==true){
        echo '<SCRIPT>
                        confirm("Curso alterado no sistema!");
                        window.location.href = "../Vision/consultaCurso.php";
                      </SCRIPT>';
    }else{
        echo '<SCRIPT>
                        confirm("Erro ao alterar o curso no banco de dados!");
                        window.location.href = "../Vision/consultaCurso.php";
                      </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>