<?php
require "../Control/controleDoBanco.php";


   $result = consultarUsuario();

function consultarUsuario()
{
    $conn = abrirDatabase();
    if(isset($_POST['fieldPesquisar']) && $_POST['fieldPesquisar'] != null){
        $pesquisa = $_POST['fieldPesquisar'];
        $dropTipoPesquisa = $_POST['dropTipoPesquisa'];

        switch ($dropTipoPesquisa) {

            case 1:
                $selectUsuario = "SELECT * FROM tb_usuario WHERE nomeUsuario = '{$pesquisa}'";
                break;
            case 2:
                $selectUsuario = "SELECT * FROM tb_usuario WHERE usuario = '{$pesquisa}'";
                break;
            case 3:
                $selectUsuario = "SELECT * FROM tb_usuario WHERE email = '{$pesquisa}'";
                break;
            case 4:
                $selectUsuario = "SELECT * FROM tb_usuario WHERE idConselho = '{$pesquisa}'";
                break;
            case 5:
                $selectUsuario = "SELECT * FROM tb_usuario WHERE numeroConselho = '{$pesquisa}'";
                break;
            case 6:
                $selectUsuario = "SELECT * FROM tb_usuario WHERE idInstituicao = '{$pesquisa}'";
                break;
        }
    }else{
        $selectUsuario = "SELECT * FROM tb_usuario";
    }

        return mysqli_query($conn, $selectUsuario);
}
?>