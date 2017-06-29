<?php
require "controleDoBanco.php";

autenticarUsuario();

function autenticarUsuario(){

    $usuario = $_POST['fieldUser'];
    $senha = sha1($_POST['fieldSenha']);

    $conn = abrirDatabase();

    $VerificarUsuario = "SELECT * FROM tb_usuario WHERE usuario = '{$usuario}' AND senha = '{$senha}'";

    $verificacao = $conn->query($VerificarUsuario);

    $query = "SELECT * FROM tb_usuario WHERE usuario = '{$usuario}' AND senha = '{$senha}'";
    $teste = $conn->query($query);

    $row = mysqli_fetch_row($teste);

    if($verificacao->num_rows>0){

        session_start();
        $_SESSION['idUsuario'] = $row[0];
        $_SESSION['usuario'] = $row[1];
        $_SESSION['senha'] = $row[2];
        $_SESSION['nomeUsuario'] = $row[3];
        $_SESSION['email'] = $row[4];
        $_SESSION['numeroConselho'] = $row[5];
        $_SESSION['idConselho'] = $row[6];
        $_SESSION['idInstituicao'] = $row[7];
        $_SESSION['administrador'] = $row[9];

        if ($_SESSION['administrador'] == 1){
            header("Location: ../view/paginaPrincipalAdmin.php");
        }else{
            header("Location: ../view/paginaPrincipalUser.php");
        }

    }else{
        echo '<SCRIPT>
                    confirm("Usuário ou senha inválidos!");
                    window.location.href = "../view/index.php";
              </SCRIPT>';
    }
    fecharDatabase($conn);
}

?>


