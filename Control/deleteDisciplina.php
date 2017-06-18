<?php
include_once "controleDoBanco.php";

deleteDisciplina();

function deleteDisciplina(){

    $id = $_POST['excluir'];

    $conn = abrirDatabase();

    $deleteDisciplina = "DELETE FROM tb_disciplina WHERE idDisciplina = {$id}";


    if ($conn->query($deleteDisciplina)) {
            echo '<SCRIPT>
                            confirm("Disciplina excluída do sistema!");
                            window.location.href = "../Vision/consultaDisciplina.php";
                          </SCRIPT>';
        } else {
            echo '<SCRIPT>
                            confirm("Disciplina não pode ser excluída do banco. Verifique se a mesma não possui aulas cadastradas!");
                            window.location.href = "../Vision/consultaDisciplina.php";
                          </SCRIPT>';
        }

    fecharDatabase($conn);

}
?>