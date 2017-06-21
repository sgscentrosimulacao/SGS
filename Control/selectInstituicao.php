<?php
require "../Control/controleDoBanco.php";


$selectInstituicao = consultarInstituicao();

function consultarInstituicao()
{
    $conn = abrirDatabase();
    if(isset($_POST['fieldPesquisar']) && $_POST['fieldPesquisar'] != null){


        $pesquisa = strtoupper ($_POST['fieldPesquisar']);
        $dropTipoPesquisa = $_POST['dropTipoPesquisa'];

        switch ($dropTipoPesquisa) {

            case 1:

                $selectUsuario = "SELECT * FROM tb_instituicao WHERE UPPER(tb_instituicao.nomeInstituicao) LIKE '%{$pesquisa}%'";
                break;

     }
    }else{
        $selectUsuario = "SELECT * FROM tb_instituicao";
    }

    return mysqli_query($conn, $selectUsuario);
}
?>