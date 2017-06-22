<?php

include_once "controleDoBanco.php";
updateUsuario();

function updateUsuario(){

    $conn = abrirDatabase();

    $id = $_POST['alterar'];
    $usuario = $_POST['fieldUsuario'];
    $nomeUsuario = $_POST['fieldNomeUsuario'];
    $email = $_POST['fieldEmail'];
    $numeroConselho = $_POST['fieldNumeroConselho'];
    $admin = (isset($_POST['fieldAdministrador']))?1:0;

    $updateUsuario = "UPDATE tb_usuario
                        SET usuario = '{$usuario}', nomeUsuario= '{$nomeUsuario}', email = '{$email}', numeroConselho = '{$numeroConselho}', administrador = '{$admin}'
                          WHERE idUsuario = '{$id}'";


    if ($conn->query($updateUsuario)==true){
        echo '<SCRIPT>
                        confirm("Usuário alterado no sistema!");
                        window.location.href = "../Vision/consultaUsuario.php";
                      </SCRIPT>';
    }else{
        echo '<SCRIPT>
                        confirm("Erro ao alterar o usuário no banco de dados!");
                        window.location.href = "../Vision/consultaUsuario.php";
                      </SCRIPT>';
    }

    fecharDatabase($conn);

}


?>