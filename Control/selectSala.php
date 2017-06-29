<?php
require "controleDoBanco.php";


$selectSala = consultarSala();

function consultarSala()
{
    $conn = abrirDatabase();
    if(isset($_POST['fieldPesquisar']) && $_POST['fieldPesquisar'] != null){


        $pesquisa = strtoupper ($_POST['fieldPesquisar']);
        $dropTipoPesquisa = $_POST['dropTipoPesquisa'];

        switch ($dropTipoPesquisa) {

            case 1:

                $selectUsuario = "SELECT * FROM tb_sala WHERE UPPER(tb_sala.nomeSala) LIKE '%{$pesquisa}%'";
                break;

        }
    }else{
        $selectUsuario = "SELECT * FROM tb_sala";
    }

    return mysqli_query($conn, $selectUsuario);
}
?>