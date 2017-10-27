<?php
include_once "controleDoBanco.php";

deleteCurso();

function deleteCurso(){

    $id = $_POST['excluir'];

    $conn = abrirDatabase();

    $deleteCurso = "DELETE FROM tb_cursos WHERE idCurso = {$id}";


    if ($conn->query($deleteCurso)) {
        echo '<SCRIPT>
                            confirm("Curso excluído do sistema!");
                            window.location.href = "../view/consultaCurso.php";
                          </SCRIPT>';
    } else {
        echo '<SCRIPT>
                            confirm("O curso não pode ser excluído do banco. Verifique se o mesmo não possui usuários vinculados!");
                            window.location.href = "../view/consultaCurso.php";
                          </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>