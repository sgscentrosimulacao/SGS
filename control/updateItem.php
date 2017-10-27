<?php

include_once "controleDoBanco.php";

updateItem();

function updateItem(){

    $conn = abrirDatabase();

    $id = $_POST['alterar'];
    $nomePeca = $_POST['fieldNomePeca'];
    $descricao = $_POST['fieldDescricao'];
    $qntPeca = $_POST['fieldQuantidade'];

    $updatePeca = "UPDATE tb_inventario
                        SET nomePeca = '{$nomePeca}', descricao= '{$descricao}', quantidade = '{$qntPeca}'
                          WHERE idPeca = '{$id}'";


    if ($conn->query($updatePeca)==true){
        echo '<SCRIPT>
                        confirm("Peça alterada no sistema!");
                        window.location.href = "../view/consultaItem.php";
                      </SCRIPT>';
    }else{
        echo '<SCRIPT>
                        confirm("Erro ao alterar a peça no banco de dados!");
                        window.location.href = "../view/consultaItem.php";
                      </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>