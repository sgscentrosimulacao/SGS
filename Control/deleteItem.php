<?php
include_once "controleDoBanco.php";

deleteItem();

function deleteItem(){

    $id = $_POST['excluir'];

    $conn = abrirDatabase();

    $deleteItem = "DELETE FROM tb_inventario WHERE idPeca = {$id}";


    if ($conn->query($deleteItem)) {
        echo '<SCRIPT>
                            confirm("Peça excluída do sistema!");
                            window.location.href = "../view/consultaItem.php";
                          </SCRIPT>';
    } else {
        echo '<SCRIPT>
                            confirm("A peça não pode ser excluída do banco!");
                            window.location.href = "../view/consultaItem.php";
                          </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>