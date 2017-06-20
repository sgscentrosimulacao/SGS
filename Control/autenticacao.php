<?php
require "../Control/controleDoBanco.php";

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
            header("Location: ../Vision/paginaPrincipalAdmin.php");
        }else{
            header("Location: ../Vision/paginaPrincipalUser.php");
        }

    }else{
        echo '<SCRIPT>
                    confirm("Usuário ou senha inválidos!");
                    window.location.href = "../Vision/index.php";
              </SCRIPT>';
    }
    fecharDatabase($conn);
}

/*function mandarId(){
    $query = "SELECT * FROM tb_usuario WHERE usuario = '{$usuario}' AND senha = '{$senha}'";
    $teste = $conn->query($query);

    $resultados = mysqli_fetch_array($teste);

    $_SESSION['id'] = $resultados['idUsuario'];
    $_SESSION['usuario'] = $resultados['usuario'];
    $_SESSION['senha'] = $resultados['senha'];
    $_SESSION['nomeUsuario'] = $resultados['nomeUsuario'];


    return $resultados;

}*/


?>


