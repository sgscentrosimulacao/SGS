<?php

include_once "controleDoBanco.php";

updateSala();

function updateSala(){

    $conn = abrirDatabase();

    $id = $_POST['alterar'];
    $nomeSala = $_POST['fieldNomeSala'];
    $descricao = $_POST['fieldDescricaoSala'];

    $updateSala = "UPDATE tb_sala
                        SET nomeSala = '{$nomeSala}', descricaoSala = '{$descricao}'
                          WHERE idSala = '{$id}'";


    if ($conn->query($updateSala)==true){
        echo '<SCRIPT>
                        confirm("Sala alterada no sistema!");
                        window.location.href = "../Vision/consultaSala.php";
                      </SCRIPT>';
    }else{
        echo '<SCRIPT>
                        confirm("Erro ao alterar a sala no banco de dados!");
                        window.location.href = "../Vision/consultaSala.php";
                      </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>