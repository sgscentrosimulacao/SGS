<?php
require "controleDoBanco.php";

$resultSelectConselho = consultarConselho();

function consultarConselho()
{
    $conn = abrirDatabase();
    if(isset($_POST['fieldPesquisar']) && $_POST['fieldPesquisar'] != null){


        $pesquisa = strtoupper ($_POST['fieldPesquisar']);
        $dropTipoPesquisa = $_POST['dropTipoPesquisa'];

        switch ($dropTipoPesquisa) {

            case 1:

                $selectUsuario = "SELECT * FROM tb_conselho WHERE UPPER(tb_conselho.nomeConselho) LIKE '%{$pesquisa}%'";
                break;

        }
    }else{
        $selectUsuario = "SELECT * FROM tb_conselho";
    }

    return mysqli_query($conn, $selectUsuario);
}
?>