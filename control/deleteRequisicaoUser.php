<?php
include_once "controleDoBanco.php";

deleteUser();

function deleteUser(){

    $id = $_POST['rejeitarUsuario'];

    $conn = abrirDatabase();

    $deleteUser = "DELETE FROM tb_usuario WHERE idUsuario = {$id}";


    if ($conn->query($deleteUser)) {
        echo '<SCRIPT>
                            confirm("Requisição excluída do sistema!");
                            window.location.href = "../view/usuariosSolicitados.php";
                          </SCRIPT>';
    } else {
        echo '<SCRIPT>
                            confirm("Requisição não pode ser excluída do sistema!");
                            window.location.href = "../view/usuariosSolicitados.php";
                          </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>