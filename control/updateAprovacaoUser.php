<?php

include_once "controleDoBanco.php";

updateAprovacaoUser();

function updateAprovacaoUser(){

    $conn = abrirDatabase();

    $id = $_POST['aprovarUsuario'];

    $aceito = 1;
    $updateUsuario = "UPDATE tb_usuario
                        SET tb_usuario.aceito = '{$aceito}'
                          WHERE idUsuario = '{$id}'";


    if ($conn->query($updateUsuario)==true){
        echo '<SCRIPT>
                    confirm("Usuário aprovado no sistema!");
                    window.location.href = "../view/aulasSolicitadas.php";
                  </SCRIPT>';
    }else{
        echo '<SCRIPT>
                confirm("Erro ao aprovar o usuário no banco de dados!");
                window.location.href = "../view/consultaDisciplina.php";
              </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>