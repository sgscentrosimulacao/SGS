<?php
require "../Control/controleDoBanco.php";

autenticarUsuario();


function autenticarUsuario(){

    $usuario = $_POST['fieldUser'];
    $senha = $_POST['fieldSenha'];

    $conn = abrirDatabase();

    $VerificarUsuario = "SELECT * FROM tb_usuario WHERE usuario = '{$usuario}' AND senha = '{$senha}'";

    $verificacao = $conn->query($VerificarUsuario);

    if($verificacao->num_rows>0){

        header("Location: ../Vision/paginaPrincipalAdmin.php");

    }else{
        echo '<SCRIPT>
                    confirm("Usuário ou senha inválidos!");
                    window.location.href = "../Vision/index.php";
              </SCRIPT>';
    }
    fecharDatabase($conn);
}
?>


