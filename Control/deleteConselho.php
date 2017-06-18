<?php
include_once "controleDoBanco.php";

deleteConselho();

function deleteConselho(){

    $id = $_POST['excluir'];

    $conn = abrirDatabase();

    $deleteConselho = "DELETE FROM tb_conselho WHERE idConselho = {$id}";


    if ($conn->query($deleteConselho)) {
        echo '<SCRIPT>
                            confirm("Conselho excluído do sistema!");
                            window.location.href = "../Vision/consultaConselho.php";
                          </SCRIPT>';
    } else {
        echo '<SCRIPT>
                            confirm("O conselho não pode ser excluído do banco. Verifique se o mesmo não possui usuários vinculados!");
                            window.location.href = "../Vision/consultaConselho.php";
                          </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>