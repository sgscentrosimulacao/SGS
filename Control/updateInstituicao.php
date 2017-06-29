<?php

include_once "controleDoBanco.php";

updateInstituicao();

function updateInstituicao(){

    $conn = abrirDatabase();

    $id = $_POST['alterar'];
    $nomeInstituicao = $_POST['fieldNomeInstituicao'];

    $updateInsituicao = "UPDATE tb_instituicao
                        SET nomeInstituicao = '{$nomeInstituicao}'
                          WHERE idInstituicao = '{$id}'";


    if ($conn->query($updateInsituicao)==true){
        echo '<SCRIPT>
                        confirm("Instituição alterada no sistema!");
                        window.location.href = "../view/consultaInstituicao.php";
                      </SCRIPT>';
    }else{
        echo '<SCRIPT>
                        confirm("Erro ao alterar a instituição no banco de dados!");
                        window.location.href = "../view/consultaInstituicao.php";
                      </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>