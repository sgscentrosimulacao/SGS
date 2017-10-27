<?php
include_once "controleDoBanco.php";

deleteInstituicao();

function deleteInstituicao(){

    $id = $_POST['excluir'];

    $conn = abrirDatabase();

    $deleteInstituicao = "DELETE FROM tb_instituicao WHERE idInstituicao = {$id}";


    if ($conn->query($deleteInstituicao)) {
        echo '<SCRIPT>
                            confirm("Instituição excluída do sistema!");
                            window.location.href = "../view/consultaInstituicao.php";
                          </SCRIPT>';
    } else {
        echo '<SCRIPT>
                            confirm("A instituição não pode ser excluída do banco. Verifique se a mesma não possui usuários vinculados!");
                            window.location.href = "../view/consultaInstituicao.php";
                          </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>