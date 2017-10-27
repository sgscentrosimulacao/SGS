<?php
include_once "controleDoBanco.php";

deleteSala();

function deleteSala(){

    $id = $_POST['excluir'];

    $conn = abrirDatabase();

    $deleteSala = "DELETE FROM tb_sala WHERE idSala = {$id}";


    if ($conn->query($deleteSala)) {
        echo '<SCRIPT>
                            confirm("Sala excluída do sistema!");
                            window.location.href = "../view/consultaSala.php";
                          </SCRIPT>';
    } else {
        echo '<SCRIPT>
                            confirm("A sala não pode ser excluída do banco. Verifique se a mesma não possui usuários vinculados!");
                            window.location.href = "../view/consultaSala.php";
                          </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>