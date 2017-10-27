<?php
include_once "controleDoBanco.php";

deleteUsuario();

function deleteUsuario(){

    $id = $_POST['excluir'];

    $conn = abrirDatabase();

    $deleteUsuario = "DELETE FROM tb_usuario WHERE idUsuario = {$id}";

    echo '<script></script>';



    if ($conn->query($deleteUsuario) == true) {
        echo '<SCRIPT>
                        confirm("Usuário excluído do sistema!");
                        window.location.href = "../view/consultaUsuario.php";
                      </SCRIPT>';
    } else {
        echo '<SCRIPT>
                        confirm("Usuário não pode ser excluído do banco. Verifique se o mesmo não possui disciplinas cadastradas!");
                        window.location.href = "../view/consultaUsuario.php";
                      </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>