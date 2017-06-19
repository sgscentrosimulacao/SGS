<?php

include_once "controleDoBanco.php";

updateConselho();

function updateConselho(){

    $conn = abrirDatabase();

    $id = $_POST['alterar'];
    $nomeConselho = $_POST['fieldNomeConselho'];

    $updateConselho = "UPDATE tb_conselho
                        SET nomeConselho = '{$nomeConselho}'
                          WHERE idConselho = '{$id}'";


    if ($conn->query($updateConselho)==true){
        echo '<SCRIPT>
                        confirm("Conselho alterado no sistema!");
                        window.location.href = "../Vision/consultaConselho.php";
                      </SCRIPT>';
    }else{
        echo '<SCRIPT>
                        confirm("Erro ao alterar o conselho no banco de dados!");
                        window.location.href = "../Vision/consultaConselho.php";
                      </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>